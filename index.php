<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="destination.php">Destinations</a>
        <?php
            session_start();
            if(isset($_SESSION['id'])){
                echo "<a href='logout.php'>Logout</a>";
            } else {
                echo "<a href='login.php'>Login</a>";
            }
        ?>
    </nav>
    <h1>Ini Home</h1>
    <?php
    if (isset($_SESSION['id'])){
        echo "<h1>Hallo " . $_SESSION['nama'] . "</h1>";
    }
    ?>
</body>

</html>