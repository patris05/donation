<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
    <title>Donasi Kami</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #d3d5dd;">
                <div class="featured-image mb-3">
                    <img src="../asset/Logo.png" class="img-fluid" style="width: 450px;">
                </div>
                <p class="text-black fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Ayo Donasi</p>
                <small class="text-black text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Dengan Donasi Anda Banyak Yang Terbantu. </small>
            </div> 
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h1>Buat Akun</h1>
                    </div>
                    <form action="connect.php" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Nama Depan" name="firstName">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Nama Belakang" name="lastName">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username" name="userName">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email" name="email">
                        </div>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control form-control-lg bg-light fs-6" placeholder="Tanggal Lahir" name="born">
                        </div>
                        <div class="input-group mb-3">
                            <select id="gender" name="gender" class="form-control form-control-lg bg-light fs-6" required>
                                <option value="">Jenis Kelamin</option>
                                <option value="m">Laki-laki</option>
                                <option value="f">Perempuan</option>
                                <option value="o">Lainnya</option>
                            </select>
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" name="password">
                        </div>
                        <!-- Input tersembunyi untuk level -->
                        <input type="hidden" name="level" value="user">
                        <div class="login">
                            <button class="btn btn-lg btn-primary w-100 fs-6">Buat Akun</button>
                        </div>
                    </form>
                    <div class="back">
                        <a href="login.php"><button class="btn btn-lg btn-primary w-100 fs-6">Kembali</button></a>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>
