<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_donasi = $_POST['nama_donasi'];
    $kategori_donasi = $_POST['kategori_donasi'];
    
    // Ubah format Rupiah menjadi angka biasa
    $target_donasi = filter_var($_POST['target_donasi'], FILTER_SANITIZE_NUMBER_INT);
    
    $tenggat = $_POST['tenggat'];
    $deskripsi_donasi = $_POST['deskripsi_donasi'];
    // Menangani upload gambar
    $img_1 = $_FILES['img_1']['name'];
    $img_2 = $_FILES['img_2']['name'];
    $img3 = $_FILES['img3']['name'];
    
    // Path untuk menyimpan gambar
    $target_dir = "uploads/";
    
    // Memindahkan file yang diunggah ke direktori tujuan
    if ($img_1) {
        $target_file1 = $target_dir . basename($img_1);
        move_uploaded_file($_FILES["img_1"]["tmp_name"], $target_file1);
    }
    
    if ($img_2) {
        $target_file2 = $target_dir . basename($img_2);
        move_uploaded_file($_FILES["img_2"]["tmp_name"], $target_file2);
    }
    
    if ($img3) {
        $target_file3 = $target_dir . basename($img3);
        move_uploaded_file($_FILES["img3"]["tmp_name"], $target_file3);
    }

    // Menghubungkan ke database
    $conn = new mysqli('localhost', 'root', '', 'donation');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Menyisipkan data ke tabel donasi
    $stmt = $conn->prepare("INSERT INTO donasi (nama_donasi, kategori_donasi, target_donasi, perolehan_donasi, tenggat, deskripsi_donasi, img_1, img_2, img3) VALUES (?, ?, ?, 0.00, ?, ?, ?, ?, ?)");
    
    if ($stmt === false) {
        die("Error preparing statement: " . htmlspecialchars($conn->error));
    }

    $stmt->bind_param("ssdsdsss", $nama_donasi, $kategori_donasi, $target_donasi, $tenggat, $deskripsi_donasi, $img_1, $img_2, $img3);

    if ($stmt->execute() === false) {
        die("Error on execute: " . htmlspecialchars($stmt->error));
    } else {
        echo "Data berhasil dimasukkan.";
    }

    $stmt->close();
    $conn->close();
}
?>
