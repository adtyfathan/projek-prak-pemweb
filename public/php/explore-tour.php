<?php
session_start();
include("koneksi.php");

// Log the session and request method for debugging
error_log('Session User ID: ' . (isset($_SESSION['id']) ? $_SESSION['id'] : 'Session ID not set'));
error_log('Request Method: ' . $_SERVER['REQUEST_METHOD']);
error_log('POST Data: ' . print_r($_POST, true));
error_log('GET Data: ' . print_r($_GET, true));

// Validate session
if (!isset($_SESSION['id'])) {
    echo "error: User not logged in.";
    exit();
}

$user_id = $_SESSION["id"];

// Validate tour ID
if (isset($_GET['id'])) {
    $tour_id = (int)$_GET['id']; // Sanitize and validate
    error_log("Tour ID: $tour_id"); // Debugging
} else {
    echo "error: Tour ID is missing or invalid.";
    exit();
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['message']) && isset($_POST['rating'])) {
        $message = htmlspecialchars($_POST['message']);
        $rating = (int)$_POST['rating'];
        $result = $koneksi->prepare("SELECT nama FROM users WHERE id = ?");
        $result->bind_param("i", $user_id);
        $result->execute();
        $res= $result->get_result();

        if ($row = $res->fetch_assoc()) {
            $nama = $row['nama'];
        } else {
            echo "error: User not found.";
            exit();
        }
        $result->close(); // Close the first statement

        // Validate rating
        if ($rating <= 0 || $rating > 5) {
            echo "error: Invalid rating value.";
            exit();
        }

        error_log("User ID: $user_id, Tour ID: $tour_id, Rating: $rating, Message: $message");

        // Prepare SQL
        $stmt = $koneksi->prepare("INSERT INTO comments (user_id, tour_id, rating, messages, nama) VALUES (?, ?, ?, ?, ?)");

        if ($stmt === false) {
            error_log('SQL Prepare Error: ' . $koneksi->error);
            echo "error: SQL prepare failed.";
            exit();
        }

        $stmt->bind_param("iiiss", $user_id, $tour_id, $rating, $message, $nama);

        if (!$stmt->execute()) {
            error_log('SQL Execution Error: ' . $stmt->error);
            echo "error: Failed to execute SQL query.";
        } else {
            echo "success: Comment and rating added successfully.";
        }

        $stmt->close();
    } else {
        echo "error: Missing message or rating.";
    }
} else {
    echo "error: Form not submitted.";
}
?>