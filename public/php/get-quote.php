<?php
session_start();
include("koneksi.php");

// Validate user session
if (!isset($_SESSION['id'])) {
    echo "error: User not logged in.";
    exit();
}

$user_id = $_SESSION["id"];

// Validate and sanitize the 'id' from the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $destination_id = (int)$_GET['id'];
    error_log("Tour ID: $destination_id"); // Debugging
} else {
    echo "error: Tour ID is missing or invalid.";
    exit();
}

// Handle POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_user = htmlspecialchars($_POST['nama_user']);
    $nama_destinasi = htmlspecialchars($_POST['nama_destinasi']);
    $nomor_hp = htmlspecialchars($_POST['nomor_hp']);
    $tanggal_berangkat = htmlspecialchars($_POST['tanggal_berangkat']);
    $jumlah_tiket = (int)$_POST['jumlah_tiket'];
    $total_harga = (int)$_POST['total_harga'];
    $ide = htmlspecialchars($_POST['ide']);
    $email = htmlspecialchars($_POST['email']);
    $nationality = htmlspecialchars($_POST['nationality']);
    $umur = (int)$_POST['umur'];

    // Prepare SQL query to insert the data
    $stmt = $koneksi->prepare("INSERT INTO tickets (user_id, destination_id, nama_user, nama_destinasi, nomor_hp, tanggal_berangkat, jumlah_tiket, total_harga, ide, email, nationality, umur) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        error_log('SQL Prepare Error: ' . $koneksi->error);
        echo "error: SQL prepare failed.";
        exit();
    }

    // Bind parameters to the prepared statement
    $stmt->bind_param("iissssiisssi", $user_id, $destination_id, $nama_user, $nama_destinasi, $nomor_hp, $tanggal_berangkat, $jumlah_tiket, $total_harga, $ide, $email, $nationality, $umur);

    // Execute the statement and check for errors
    if ($stmt->execute()) {
        echo "success: Booking submitted successfully!";
    } else {
        error_log('SQL Execution Error: ' . $stmt->error);
        echo "error: Failed to submit booking.";
    }

    $stmt->close();
} else {
    echo "error: Invalid request method.";
}
?>