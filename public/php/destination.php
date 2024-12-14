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

    // render destinations
    $result = mysqli_query($koneksi, "SELECT * FROM tours");
    if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
            echo '
                <h1>' . $data['nama_tempat'] . '</h1>
                <img src="data:image/jpeg;base64,' . base64_encode($data['gambar_tempat']) . '" alt="' . $data['nama_tempat'] . '"/>
                <p>' . $data['deskripsi_tempat'] . '</p>
                <form action="destination-detail.php" method="get">
                    <input type="hidden" name="id" value="' . $data['id'] . '"/>
                    <input type="submit" value="Lihat">
                </form>
            ';
        }
    }
    ?>
</body>

</html>