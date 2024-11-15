<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}
include("koneksi.php");
$result = mysqli_query($koneksi, "SELECT ticket_id, DATEDIFF(tanggal_pulang, tanggal_berangkat) AS day_difference FROM tickets;");
$data = mysqli_fetch_assoc($result);

$tanggal_awal = new DateTime($_SESSION['tanggal_berangkat']);
$tanggal_akhir = new DateTime($_SESSION['tanggal_pulang']);
$jumlah_hari = $tanggal_awal->diff($tanggal_akhir)->days;
$harga_bersih_tiket = $_SESSION['harga'] * $_SESSION['jumlah_tiket'] * $jumlah_hari;
$pajak = 0.12 * $harga_bersih_tiket;
$harga_layanan = 0.02 * $harga_bersih_tiket;
$total_harga = $harga_bersih_tiket + $pajak + $harga_layanan;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Payment</title>
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
            <h1>Info Pemesanan</h1>
            
            <p>Nama Pemesan: ' . $_SESSION['nama_user'] . '</p>

            <p>Destinasi: ' . $_SESSION['nama_destinasi'] . '</p>

            <p>Nomor HP: ' . $_SESSION['nomor_hp'] . '</p>

            <p>Tanggal Keberangkatan: ' . $_SESSION['tanggal_berangkat'] . '</p>

            <p>Tanggal Pulang: ' . $_SESSION['tanggal_pulang'] . '</p>

            <p>Jumlah Tiket: ' . $_SESSION['jumlah_tiket'] . '</p>

            <h1>Info Pembayaran</h1>

            <p>Harga Trip Rp' . $_SESSION['harga'] . ' x ' . $_SESSION['jumlah_tiket'] . ' tiket x ' . $jumlah_hari . ' hari = Rp' . $harga_bersih_tiket . '</p>

            <p>Pajak (12% harga trip) = Rp' . $pajak . '</p>

            <p>Biaya Layanan (2% harga trip) = Rp' . $harga_layanan . '</p>

            <p>Total Biaya = Rp' . $total_harga . '</p>
            
        '
    ?>
</body>

</html>