<?php
session_start();
require_once 'db_connection.php'; // Ganti dengan path file koneksi database Anda

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_donasi = // Ambil id_donasi dari form atau session
    $nama_donatur = $_POST['nama_donatur'];
    $no_tlp = $_POST['no_tlp'];
    $pesan = $_POST['pesan'];
    $jumlah_donasi = $_POST['jumlah_donasi'];
    $kode_transaksi = strtoupper(substr(md5(time()), 0, 10)); // Generate kode transaksi acak
    $tgl_transaksi = date("Y-m-d H:i:s");

    $query = "INSERT INTO register (id_donasi, nama_donatur, no_tlp, pesan, jumlah_donasi, kode_transaksi, tgl_transaksi)
              VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("isssdss", $id_donasi, $nama_donatur, $no_tlp, $pesan, $jumlah_donasi, $kode_transaksi, $tgl_transaksi);
        if ($stmt->execute()) {
            echo "Transaksi berhasil disimpan dengan kode transaksi: " . $kode_transaksi;
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
