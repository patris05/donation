<?php
// Menghubungkan ke database
$conn = new mysqli('localhost', 'root', '', 'donation');

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Memeriksa apakah ada data yang dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $id_donasi = $_POST['id_donasi'];
    $nama_donasi = $_POST['nama_donasi'];
    $kategori_donasi = $_POST['kategori_donasi'];
    $target_donasi = $_POST['target_donasi'];
    $tenggat = $_POST['tenggat'];
    $deskripsi_donasi = $_POST['deskripsi_donasi'];

    // Query untuk melakukan update data donasi berdasarkan ID
    $stmt = $conn->prepare("UPDATE donasi SET nama_donasi = ?, kategori_donasi = ?, target_donasi = ?, tenggat = ?, deskripsi_donasi = ?  WHERE id_donasi = ?");
    $stmt->bind_param("ssidsi", $nama_donasi, $kategori_donasi, $target_donasi, $tenggat, $deskripsi_donasi, $id_donasi);

    // Eksekusi query
    if ($stmt->execute()) {
        echo "Data donasi berhasil diperbarui.";
        header("Location: donasi.php");                

    } else {
        echo "Error saat memperbarui data: " . htmlspecialchars($stmt->error);
    }

    // Menutup statement
    $stmt->close();
}

// Menutup koneksi
$conn->close();
?>
