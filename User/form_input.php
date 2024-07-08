<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input Donasi</title>
    <script>
        // Function to format number to Indonesian Rupiah
        function formatRupiah(angka) {
            var reverse = angka.toString().split('').reverse().join(''),
                ribuan = reverse.match(/\d{1,3}/g);
            ribuan = ribuan.join('.').split('').reverse().join('');
            return 'Rp ' + ribuan;
        }

        // Function to update input value with formatted Rupiah
        function updateRupiah() {
            var input = document.getElementById('target_donasi');
            var value = input.value.replace(/[^\d]/g, '');
            input.value = formatRupiah(value);
        }
    </script>
</head>
<body>
    <h2>Form Input Donasi</h2>
    <form action="process_input.php" method="post" enctype="multipart/form-data">
        <label for="nama_donasi">Nama Donasi:</label><br>
        <input type="text" id="nama_donasi" name="nama_donasi" required><br><br>
        
        <label for="kategori_donasi">Kategori Donasi:</label><br>
        <input type="text" id="kategori_donasi" name="kategori_donasi" required><br><br>
        
        <label for="target_donasi">Target Donasi:</label><br>
        <input type="text" id="target_donasi" name="target_donasi" oninput="updateRupiah()" required><br><br>
        
        <label for="tenggat">Tenggat:</label><br>
        <input type="date" id="tenggat" name="tenggat" required><br><br>
        
        <label for="deskripsi_donasi">Deskripsi Donasi:</label><br>
        <textarea id="deskripsi_donasi" name="deskripsi_donasi" required></textarea><br><br>
        
        <label for="img_1">Gambar 1:</label><br>
        <input type="file" id="img_1" name="img_1"><br><br>
        
        <label for="img_2">Gambar 2:</label><br>
        <input type="file" id="img_2" name="img_2"><br><br>
        
        <label for="img3">Gambar 3:</label><br>
        <input type="file" id="img3" name="img3"><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
