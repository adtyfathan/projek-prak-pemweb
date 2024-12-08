<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}

include("koneksi.php");
// BUG pas back parameter id ga ngikut (pake session aja)
$destination_id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM destinations WHERE id = $destination_id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    // $user_id = $_SESSION['id'];
    // $destination_id
    $nama_user = $_POST['nama'];
    $nama_destinasi = $data['nama_tempat'];
    $nomor_hp = $_POST['nomor'];
    $tanggal_berangkat = $_POST['berangkat'];
    $tanggal_pulang = $_POST['pulang'];
    $jumlah_tiket = $_POST['tiket'];
    $harga = $data['harga'];

    // $_SESSION['id'];
    $_SESSION['destination_id'] = $destination_id;
    $_SESSION['nama_user'] = $nama_user;
    $_SESSION['nama_destinasi'] = $nama_destinasi;
    $_SESSION['nomor_hp'] = $nomor_hp;
    $_SESSION['tanggal_berangkat'] = $tanggal_berangkat;
    $_SESSION['tanggal_pulang'] = $tanggal_pulang;
    $_SESSION['jumlah_tiket'] = $jumlah_tiket;
    $_SESSION['harga'] = $harga;
    header("Location:payment.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Reservasi</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="destination.php">Destinations</a>
        <?php
        if (isset($_SESSION['id'])) {
            echo "<a href='logout.php'>Logout</a>";
        } else {
            echo "<a href='login.php'>Login</a>";
        }
        ?>
    </nav>
    <?php
    echo '
    <img src="./asset/' . $data['gambar_tempat'] . '"/>
    ';
    ?>
    <h1>Pemesanan Tiket</h1>
    <form method="POST">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" required />

        <label>Nomor Handphone</label>
        <input type="number" name="nomor" required />

        <label>Tanggal Berangkat</label>
        <input type="date" name="berangkat" required />

        <label>Tanggal Pulang</label>
        <input type="date" name="pulang" required />

        <label>Jumlah Tiket</label>
        <input type="number" name="tiket" required min="1" />

        <input type="submit" value="Pesan Tiket" name="submit" />
    </form>
</body>

</html>