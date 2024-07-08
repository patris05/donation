<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Donasi Kami</title>
</head>
<body>
    <!----------------------- Main Container -------------------------->
     <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <!----------------------- Login Container -------------------------->
       <div class="row border rounded-5 p-3 bg-white shadow box-area">
    <!--------------------------- Left Box ----------------------------->
       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #d3d5dd;">
           <div class="featured-image mb-3">
            <img src="../asset/Logo.png" class="img-fluid" style="width: 189px;">
           </div>
           <p class="text-black fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Ayo Donasi</p>
           <small class="text-black text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Dengan Donasi Anda Banyak Yang Terbantu. </small>
       </div> 
    <!-------------------- ------ Right Box ---------------------------->
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <h2>Hello,Selamat datang </h2>
                     <p>Login Akun Anda</p>
                </div>
                <form action="masuk.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username" id="userName" name="userName">
                </div>
                <div class="input-group mb-1">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" id="password" name="password">
                </div>
                <div class="input-group mb-5 d-flex justify-content-between">
    
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6" name= "login">Login</button>
                    <a href="#beranda.html"></a>
                </div>
                <!-- <div class="input-group mb-3">
                    <button class="btn btn-lg btn-light w-100 fs-6"><img src="images/google.png" style="width:20px" class="me-2"><small>Sign In with Google</small></button>
                </div> -->
                <div class="row">
                    <small>Tidak Memiliki Akun? <a href="signup.php">Sign Up</a></small>
                </div>
          </div>
       </div> 
      </div>
    </div>
</body>
</html>
