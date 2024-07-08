<?php
// Menghubungkan ke database
$conn = new mysqli('localhost', 'root', '', 'donation');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari tabel donasi
$sql = "SELECT id_donasi, nama_donasi, kategori_donasi, target_donasi, perolehan_donasi, tenggat, deskripsi_donasi, img_1, img_2, img3 FROM donasi";
$result = $conn->query($sql);

if ($result === false) {
    die("Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Donasi</h2>
    <table>
        <tr>
            <th>ID Donasi</th>
            <th>Nama Donasi</th>
            <th>Kategori Donasi</th>
            <th>Target Donasi</th>
            <th>Perolehan Donasi</th>
            <th>Tenggat</th>
            <th>Deskripsi Donasi</th>
            <th>Gambar 1</th>
            <th>Gambar 2</th>
            <th>Gambar 3</th>
            <th>Action</th> <!-- Kolom untuk tombol action -->
        </tr>
        <?php
        if ($result->num_rows > 0) {          
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id_donasi']) . "</td>";
                echo "<td>" . htmlspecialchars($row['nama_donasi']) . "</td>";
                echo "<td>" . htmlspecialchars($row['kategori_donasi']) . "</td>";
                echo "<td>" . htmlspecialchars($row['target_donasi']) . "</td>";
                echo "<td>" . htmlspecialchars($row['perolehan_donasi']) . "</td>";
                echo "<td>" . htmlspecialchars($row['tenggat']) . "</td>";
                echo "<td>" . htmlspecialchars($row['deskripsi_donasi']) . "</td>";
                echo "<td><img src='uploads/" . htmlspecialchars($row['img_1']) . "' alt='Gambar 1' width='100'></td>";
                echo "<td><img src='uploads/" . htmlspecialchars($row['img_2']) . "' alt='Gambar 2' width='100'></td>";
                echo "<td><img src='uploads/" . htmlspecialchars($row['img3']) . "' alt='Gambar 3' width='100'></td>";
                echo "<td>";
                echo "<a href='update_donasi.php?id=" . htmlspecialchars($row['id_donasi']) . "'>Update</a> | ";
                echo "<a href='delete_donasi.php?id=" . htmlspecialchars($row['id_donasi']) . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Delete</a>";
                echo "</td>";             
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='12'>No records found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
