<?php
session_start(); // Mulai sesi PHP

$conn = new mysqli('localhost', 'root', '', 'donation');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM donasi WHERE id_donasi = ?");
    if ($stmt === false) {
        die("Error preparing statement: " . htmlspecialchars($conn->error));
    }

    $stmt->bind_param("i", $id);
    if ($stmt->execute() === false) {
        die("Error executing statement: " . htmlspecialchars($stmt->error));
    } else {
        echo "Berhasil melakukan delete.";
    }
    $stmt->close();
} else {
    echo "ID tidak ditemukan.";
}

$conn->close();
?>
