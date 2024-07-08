<?php
require_once 'db_connection.php'; // Ganti dengan path file koneksi database Anda

$id_transaksi = $_POST['id_transaksi']; // ID transaksi yang akan diupdate
$status_bayar = 'bayar'; // Status pembayaran baru

$query = "UPDATE register SET bayar = ? WHERE id_transaksi = ?";

if ($stmt = $conn->prepare($query)) {
    $stmt->bind_param("si", $status_bayar, $id_transaksi);
    if ($stmt->execute()) {
        echo "Status pembayaran berhasil diperbarui.";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
