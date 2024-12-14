<?php
session_start();
include("koneksi.php");

if (!isset($_SESSION['id'])) {
    header("Location: ../html/login.php");
    exit();
}

$inputData = json_decode(file_get_contents("php://input"), true);

$response = [];

if (isset($inputData['key'])) {
    handleSearch($inputData['key'], $response);
} else {
    $response['message'] = "No key pressed.";
}

echo json_encode($response);

function handleSearch($keyPressed, &$response)
{
    global $koneksi; 

    $query = "SELECT * FROM tours WHERE nama_tempat LIKE ? OR deskripsi_tempat LIKE ?";
    $stmt = $koneksi->prepare($query);
    $searchTerm = "%" . $keyPressed . "%";
    $stmt->bind_param("ss", $searchTerm, $searchTerm);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $base64Image = base64_encode($row["gambar_tempat"]);

            $response[] = [
                "id" => $row["id"],
                "nama_tempat" => $row["nama_tempat"],
                "deskripsi_tempat" => $row["deskripsi_tempat"],
                "gambar_tempat" => $base64Image
            ];
        }
    } else {
        $response['message'] = "No results found.";
    }

    $stmt->close();
}
?>