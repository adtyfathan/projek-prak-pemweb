<?php
    session_start();
    include("koneksi.php");

    if (!isset($_SESSION['id'])) {
        header("Location: ../html/login.php");
        exit();
    }
?>