<?php
    session_start();
    if (isset($_SESSION['id'])){
        header("Location: ../html/home.php");
        exit();
    } 
    
    if (isset($_POST['submit'])) {
        $email = trim($_POST['email']);
        $nama = trim($_POST['nama']);
        $password = trim($_POST['password']);
        $konfirm_password = trim($_POST['konfirm-password']);

        // Password validation pattern
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

            if (mysqli_num_rows($result) > 0) {
                echo "<script>alert('Email is already registered.');</script>";
            } else {
                // Check if passwords match
                if ($password === $konfirm_password) {
                    // Hash the password
                    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                    // Insert the hashed password into the database
                    $stmt = mysqli_prepare($koneksi, "INSERT INTO users (nama, password, email) VALUES (?, ?, ?)");
                    mysqli_stmt_bind_param($stmt, "sss", $nama, $hashed_password, $email);
                    if (mysqli_stmt_execute($stmt)) {
                        echo "<script>alert('Registration successful!');</script>";
                        header("Location: login.php");
                        exit();
                    } else {
                        echo "<script>alert('Error occurred during registration.');</script>";
                    }

                    mysqli_stmt_close($stmt);
                } else {
                    echo "<script>alert('Password confirmation does not match.');</script>";
                }
            }

            // Close the prepared statement and database connection
            mysqli_stmt_close($stmt);
            mysqli_close($koneksi);
        }
    }
?>