<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sukacita
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="fixed-top">

        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="#home">Suka Cita</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#beranda">Beranda <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="application/donasi.html">Donasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pesan">Pesan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="User/login.php">Login</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="cont-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>Untuk informasi selengkapnya <a href="006475364236"></a></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <section class="home-sec" id="home">
        <div class="container">
            <div class="home-content">
                <div class="row">
                    <div class="col-lg-6 align-item-center">
                        <div class="home-info">
                            <h1>Berbagi bukan hanya sekedar memberi</h1>
                            <h2>Tapi <span>bagaimana </span>kita melihat hal yang belum pernah kita temui</h2>
                            <p>Jadikan sebagai pengalaman terbaik</p>

                        </div>
                    </div>
                    <div class="col-lg-6 order-first order-lg-last">
                        <div class="img-sec">
                            <img src="asset/istockphoto-1256079963-170667a.jpg" alt="home-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="don-sec" id="donation">
        <div class="container">
            <div class="heading">
                <h2>Hidup ini indah ketika kita belajar untuk saling berbagi dengan sukacita...</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="asset/bencana (banjir demak).jpg" alt="img">
                        <h3>Bencana</h3>
                        <p>Bantu selamatkan warga terdampak banjir demak.</p>
                        <a href="#contact" class="btn1">Donasi sekarang</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="asset/bencana (gunung erupsi).jpeg" alt="img">
                        <h3>Bencana</h3>
                        <p>Gunung lewotobi NTT erupsi, Bantu warga dengan sukacita.</p>
                        <a href="#contact" class="btn1">Donasi sekarang</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="asset/bencana sumatra.jpg" alt="">
                        <h3>Bencana</h3>
                        <p>Satukan bantuan, ringankan bantuan untuk sumantra.</p>
                        <a href="#contact" class="btn1">Donasi sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mission" id="mission-id">
        <div class="container">
            <div class="heading">
                <h2>Galeri</h2>
                <p>Harapan <span>Akan</span>selalu <span>ada</span>untuk nyata</p>
            </div>
            <div class="gallery-sec">
                <div class="container">
                    <div class="image-container">
                        <div class="image"><img src="asset/panti-asuhan_169.jpeg" alt="img"></div>
                        <div class="image"><img src="asset/bencana (banjir demak).jpg" alt="img"></div>
                        <div class="image"><img src="asset/bencana (gunung erupsi).jpeg" alt="img"></div>
                        <div class="image"><img src="asset/kebakaran.jpg" alt="img"></div>
                        <div class="image"><img src="asset/lansia jualan (sosial).jpg" alt="img"></div>
                        <div class="image"><img src="asset/menderita hidrosefalus (kesehatan).webp" alt="img"></div>
                    </div>
                </div>
                <div class="pop-image">
                    <span>&times;</span>
                    <img src="asset/1.jpg" alt="gallery-img">
                </div>
                </di v>
            </div>
    </section>

    <section class="about-sec" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 about-img">
                    <img src="asset/anak yatim (sosial).jpg" alt="about">
                </div>
                <div class="col-lg-8 order-first order-lg-last">
                    <div class="heading">
                        <h2>Konsumsi untuk anak yatim</h2>
                    </div>
                    <p>Kami Mengajak para dermawan terkasih untuk menyisihkan sebagian hartanya melalaui program sedekah
                        ini semoga harta yang anda donasikan menjadi amal yang terus mengalir pahalanya  </p>
                    <p>Kami sangat membutuhkan bantuan kakak berupa donasi dari kakak-kakak, kami menerima seberapa
                        pun nominal yang kakak-kakak donasikan kepada kami.</p>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>Suka cita</h4>
                        <p>Alamat : Jl Raya uluwatu no.138A</p>
                        <p>No kontak : <a href="tel: +91 98659****59">08765432193</a></p>
                        <p>Email : <a href="mailto:foundation@code.com">sukacita@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-two">
                        <h4>link penting</h4>
                        <ul>
                            <li><a href="#home">Beranda</a></li>
                            <li><a href="#donation">Donasi</a></li>
                            <li><a href="#mission-id">Pesan</a></li>
                            <li><a href="#about">Galeri</a></li>
                            <li><a href="#contact">Akun</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>Social Media</h4>
                        <div class="social">
                            <a href="#"><img src="img/icons/gmail.png" alt="Email"></a>
                            <a href="https://www.instagram.com/oheb.official/?hl=en"><img src="img/icons/instagram.png" alt="inatagram"></a>
                            <a href="#"><img src="img/icons/youtube.png" alt="youtube"></a>
                          
                        </div>
                        <p>Copyright &copy; 2024 | sukacita</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>