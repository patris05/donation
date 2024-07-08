<?php
session_start();

// Menghubungkan ke database
$conn = new mysqli('localhost', 'root', '', 'donation');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk menghapus profil berdasarkan username
$username = $_SESSION['userName'];
$sql = "DELETE FROM register WHERE userName = '$username'";

if ($conn->query($sql) === TRUE) {
    // Hapus session dan arahkan kembali ke halaman login atau halaman lain yang sesuai
    session_unset();
    session_destroy();
    header("Location: login.php"); // Ganti dengan halaman tujuan setelah profil dihapus
    exit();
} else {
    echo "Error deleting profile: " . $conn->error;
}

$conn->close();
?>
