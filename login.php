<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    include("koneksi.php");

    $datanama = mysqli_query($koneksi, "SELECT * FROM users WHERE email = '$email'");

    // cek emailnya terdaftar ngga di database
    if (mysqli_num_rows($datanama) > 0) {
        $user = mysqli_fetch_assoc($datanama);
        // cek password input sesuai ngga sama password database
        if ($password === $user['password']) {
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $email;
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['password'] = $user['password'];
            header("Location: index.php");
            exit();
        } else {
            echo "Login gagal";
        }
    } else {
        echo "Login gagal";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h1>Halaman Login</h1>
    <form method="POST">
        <label>Email: </label>
        <input type="email" name="email" required />

        <label>Password: </label>
        <input type="password" name="password" required />

        <input type="submit" name="submit" value="Submit" />
    </form>
</body>

</html>