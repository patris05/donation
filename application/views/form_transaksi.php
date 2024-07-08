<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Donasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Form Donasi</h2>
        <form action="process_transaksi.php" method="post">
            <div class="form-group">
                <label for="nama_donatur">Nama Donatur:</label>
                <input type="text" class="form-control" id="nama_donatur" name="nama_donatur" required>
            </div>
            <div class="form-group">
                <label for="no_tlp">No Telepon:</label>
                <input type="text" class="form-control" id="no_tlp" name="no_tlp" required>
            </div>
            <div class="form-group">
                <label for="pesan">Pesan:</label>
                <textarea class="form-control" id="pesan" name="pesan"></textarea>
            </div>
            <div class="form-group">
                <label for="jumlah_donasi">Jumlah Donasi:</label>
                <input type="number" class="form-control" id="jumlah_donasi" name="jumlah_donasi" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
