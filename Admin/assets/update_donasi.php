<?php
// Menghubungkan ke database
$conn = new mysqli('localhost', 'root', '', 'donation');

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_donasi = $_GET['id'];
    $stmt = $conn->prepare("SELECT id_donasi, nama_donasi, kategori_donasi, target_donasi, tenggat, deskripsi_donasi FROM donasi WHERE id_donasi = ?");
    $stmt->bind_param("i", $id_donasi);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows == 1) {

            $row = $result->fetch_assoc();
            $nama_donasi = $row['nama_donasi'];
            $kategori_donasi = $row['kategori_donasi'];
            $target_donasi = $row['target_donasi'];
            $tenggat = $row['tenggat'];
            $deskripsi_donasi = $row['deskripsi_donasi'];
            $date = new DateTime($tenggat);
            $tenggat = $date->format('Y-m-d');
        } else {
            echo "Data donasi tidak ditemukan.";
            exit;
        }
    } else {
        echo "Error: " . htmlspecialchars($stmt->error);
        exit;
    }

    $stmt->close();
} else {
    echo "ID donasi tidak valid.";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Donasi</title>
</head>
<body>
    <h2>Updat
        e Data Donasi</h2>
    <form action="process_update.php" method="post">
        <input type="hidden" name="id_donasi" value="<?php echo htmlspecialchars($id_donasi); ?>">
        
        <label for="nama_donasi">Nama Donasi:</label><br>
        <input type="text" id="nama_donasi" name="nama_donasi" value="<?php echo htmlspecialchars($nama_donasi); ?>" required><br><br>
        
        <label for="kategori_donasi">Kategori Donasi:</label><br>
        <input type="text" id="kategori_donasi" name="kategori_donasi" value="<?php echo htmlspecialchars($kategori_donasi); ?>" required><br><br>
        
        <label for="target_donasi">Target Donasi:</label><br>
        <input type="text" id="target_donasi" name="target_donasi" oninput="updateRupiah()" required><br><br>
        
        <label for="tenggat">Tenggat:</label><br>
        <input type="date" id="tenggat" name="tenggat" value="<?php echo htmlspecialchars($tenggat); ?>" required><br><br>
        
        <label for="deskripsi_donasi">Deskripsi Donasi:</label><br>
        <textarea id="deskripsi_donasi" name="deskripsi_donasi" required><?php echo htmlspecialchars($deskripsi_donasi); ?></textarea><br><br>
        
        <input type="submit" value="Update">
    </form>
</body>
</html>
