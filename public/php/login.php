<?php
    session_start();
    if (isset($_SESSION['id'])){
        header("Location: ../html/home.php");
        exit();
    } 

    if (isset($_POST['submit'])) {
        // Retrieve user input
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $pattern = "/^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/";

        if (!preg_match($pattern, $password)) {
            echo "<script>alert('Password must be at least 8 characters long, include at least one uppercase letter, and one number.');</script>";
            exit();
        } else {
            include("koneksi.php");

            // Prepare statement to prevent SQL injection
            $stmt = mysqli_prepare($koneksi, "SELECT * FROM users WHERE email = ?");
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            // Check if email exists
            if (mysqli_num_rows($result) > 0) {
                $user = mysqli_fetch_assoc($result);

                // Verify the hashed password
                if (password_verify($password, $user['password'])) {
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['email'] = $email;
                    $_SESSION['nama'] = $user['nama'];

                    // Redirect to the home page
                    header("Location: ../html/home.php");
                    exit();
                } else {
                    echo "<script>alert('Incorrect password.');</script>";
                }
            } else {
                echo "<script>alert('Email not registered.');</script>";
            }

            // Close the prepared statement and connection
            mysqli_stmt_close($stmt);
            mysqli_close($koneksi);
        }
    }
?>