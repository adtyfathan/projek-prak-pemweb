<!DOCTYPE html>
<html>

<head>
    <title>Destination</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="destination.php">Destinations</a>
        <?php
        session_start();
        if (isset($_SESSION['id'])) {
            echo "<a href='logout.php'>Logout</a>";
        } else {
            echo "<a href='login.php'>Login</a>";
        }
        ?>
    </nav>
    <?php
    include("koneksi.php");
    $destination_id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM destinations WHERE id = $destination_id");
    $data = mysqli_fetch_assoc($result);
    echo '
            <h1>' . $data['nama_tempat'] . '</h1>
            <img src="./asset/' . $data['gambar_tempat'] . '"/>
            <p>' . $data['deskripsi_tempat'] . '</p>
            <p>Harga Trip = Rp' . $data['harga'] . '</p>
            <form action="reservation.php" method="get">
                <input type="hidden" name="id" value="' . $destination_id . '" />
                <input type="submit" value="Pesan Tiket">
            </form>
            <h1>Komen nanti dibawah sini</h1>
        ';
    ?>
</body>

</html>