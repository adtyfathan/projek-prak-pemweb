<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <?php include "../php/register.php"?>
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