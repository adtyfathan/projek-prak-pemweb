<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $konfirm_password = $_POST['konfirm-password'];

    include("koneksi.php");
    $result = mysqli_query($koneksi, "SELECT * FROM users WHERE email = '$email'");
    // cek emailnya udak terdaftar belum
    if (mysqli_num_rows($result) > 0) {
        echo "Email sudah terdaftar";
    } else {
        // cek password sama konfirmnya udah sama atau belum
        if($password === $konfirm_password){
            $result = mysqli_query($koneksi, "INSERT INTO users(nama, password, email) VALUES('$nama', '$password', '$email')");
            header("Location:login.php");
        } else {
            echo "Konfirmasi password tidak valid";
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>
    <h1>Halaman Registrasi</h1>
    <form method="POST">
        <label>Email: </label>
        <input type="email" name="email" required />

        <label>Nama: </label>
        <input type="text" name="nama" required />

        <label>Password: </label>
        <input type="password" name="password" required />

        <label>Konfirmasi Password: </label>
        <input type="password" name="konfirm-password" required />

        <input type="submit" name="submit" value="Submit" required />
    </form>

</body>

</html>