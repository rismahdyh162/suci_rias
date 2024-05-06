<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="<?= base_url('assets/user/'); ?>css\gallery.css">

    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Bonheur+Royale&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/user/'); ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/user/'); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/nice-forms.css/nice-forms.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/user/'); ?>css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid position-relative p-0" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="<?= base_url('auth/'); ?>" class="navbar-brand p-0">
                <img src="<?= base_url('assets/user/'); ?>img\logo\logo black.svg" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?= base_url('auth/'); ?>" class="nav-item nav-link active" style="font-weight: bold;">Home</a>
                    <a href="<?= base_url('auth/package'); ?>" class="nav-item nav-link" style="font-weight: bold;">Package</a>
                    <a href="<?= base_url('auth/galeri'); ?>" class="nav-item nav-link" style="font-weight: bold;">Gallery</a>
                    <a href="<?= base_url('auth/faq'); ?>" class="nav-item nav-link" style="font-weight: bold;">FAQ</a>
                </div>
                <a href="login.html" class="btn btn-dark text-white py-2 px-4 flex-wrap flex-sm-shrink-0" style="font-weight: bold;">Login</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Gallery Top start -->
    <div class="landing_section px-0">
        <h1>Gallery</h1>
        <p>By Rias Pengantin Suci</p>
    </div>

    <div class="row-cols-lg-6 px-5 py-2" style="padding: 50px;">
        <div class="content-img">
            <a class="gambar" href="<?= base_url('assets/user/'); ?>img\galeri1.JPG">
                <img src="<?= base_url('assets/user/'); ?>img\galeri1.JPG" alt="gambar-1" width="260" height="auto">
            </a>
        </div>
        <div class="content-img">
            <a class="gambar" href="<?= base_url('assets/user/'); ?>img\galeri2.JPG">
                <img src="<?= base_url('assets/user/'); ?>img\galeri2.JPG" alt="gambar-2" width="260" height="auto">
            </a>
        </div>
        <div class="content-img">
            <a class="gambar" href="<?= base_url('assets/user/'); ?>img\galeri3.JPG">
                <img src="<?= base_url('assets/user/'); ?>img\galeri3.JPG" alt="gambar-3" width="260" height="auto">
            </a>
        </div>
    </div>
    <!-- Gallery Top end -->

    <!-- Gallery Text -->
    <div class="row-text py-3">
        <img class="icon" src="<?= base_url('assets/user/'); ?>img\icon-gallery.png" alt="">
        <p>"Yuk, wujudkan impian pernikahan istimewa Anda dengan Rias Pengantin Suci. Segera<a href="https://wa.me/62895366876608"> hubungi Kami </a>untuk konsultasi lebih lanjut.”</p>
        <img class="icon-line" src="<?= base_url('assets/user/'); ?>img\line.png" alt="">
    </div>
    <!-- Gallery Text end -->

    <!-- Gallery Wedding -->
    <div class="row-img">
        <div class="wedding-grid py-5">
            <a href="<?= base_url('assets/user/'); ?>img\Galeri\wedding1.JPG"><img class="wedding1-grid" src="<?= base_url('assets/user/'); ?>img\Galeri\wedding1.JPG" alt="" width="300" height="auto"></a>
            <a href="<?= base_url('assets/user/'); ?>img\Galeri\wedding2.JPG"><img class="wedding2-grid" src="<?= base_url('assets/user/'); ?>img\Galeri\wedding2.JPG" alt="" width="300" height="auto"></a>
            <a href="<?= base_url('assets/user/'); ?>img\Galeri\wedding3.JPG"><img class="wedding3-grid" src="<?= base_url('assets/user/'); ?>img\Galeri\wedding3.JPG" alt="" width="300" height="auto"></a>
            <a href="<?= base_url('assets/user/'); ?>img\Galeri\wedding4.JPG"><img class="wedding4-grid" src="<?= base_url('assets/user/'); ?>img\Galeri\wedding4.JPG" alt="" width="300" height="auto"></a>
            <a href="<?= base_url('assets/user/'); ?>img\Galeri\wedding5.jpg"><img class="wedding5-grid" src="<?= base_url('assets/user/'); ?>img\Galeri\wedding5.jpg" alt="" width="300" height="auto"></a>
            <a href="<?= base_url('assets/user/'); ?>img\Galeri\wedding6.jpg"><img class="wedding6-grid" src="<?= base_url('assets/user/'); ?>img\Galeri\wedding6.jpg" alt="" width="300" height="auto"></a>
            <div class="wedding-text">
                <h2>Wedding</h2>
            </div>
        </div>

        <!-- Gallery Jasa Makeup -->
        <div class="wedding-grid py-5">
            <a href="<?= base_url('assets/user/'); ?>img\Galeri\wedding1.JPG"><img class="wedding1-grid" src="<?= base_url('assets/user/'); ?>img\Galeri\makeup1.jpg" alt="" width="300" height="auto"></a>
            <a href="<?= base_url('assets/user/'); ?>img\Galeri\wedding2.JPG"><img class="wedding2-grid" src="<?= base_url('assets/user/'); ?>img\Galeri\makeup2.jpeg" alt="" width="300" height="auto"></a>
            <a href="<?= base_url('assets/user/'); ?>img\Galeri\wedding3.JPG"><img class="wedding3-grid" src="<?= base_url('assets/user/'); ?>img\Galeri\makeup3.jpeg" alt="" width="300" height="auto"></a>
            <div class="makeup-text">
                <h2>Jasa Makeup</h2>
            </div>
        </div>

    </div>

    <!-- Gallery Wedding End-->

    <!-- Gallery Dekorasi -->
    <div class="dekorasi-grid py-5">
        <h3>Dekorasi</h3>
        <div class="bg-img">
            <img src="<?= base_url('assets/user/'); ?>img\bg-dekorasi.png" alt="">
        </div>
        <div class="row-cols-lg-6 py-2 px-2" style="margin-top: -300px;">
            <div class="item-img">
                <a class="item" href="<?= base_url('assets/user/'); ?>img\Galeri\dekorasi1.png">
                    <img src="<?= base_url('assets/user/'); ?>img\Galeri\dekorasi1.png" alt="gambar-1" width="310" height="auto">
                </a>
            </div>
            <div class="item-img" style="margin-left: 20px;">
                <a class="item" href="<?= base_url('assets/user/'); ?>img\Galeri\dekorasi2.png">
                    <img src="<?= base_url('assets/user/'); ?>img\Galeri\dekorasi2.png" alt="gambar-2" width="310" height="auto">
                </a>
            </div>
            <div class="item-img" style="margin-left: 20px;">
                <a class="item" href="<?= base_url('assets/user/'); ?>img\Galeri\dekorasi3.png">
                    <img src="<?= base_url('assets/user/'); ?>img\Galeri\dekorasi3.png" alt="gambar-3" width="310" height="auto">
                </a>
            </div>
        </div>
    </div>
    <!-- Gallery Dekorasi End -->


    <!--Footer start bottom Area-->
    <div class="footer-area d-flex align-content-center mt-5">
        <div class="pl-50 m-0 col-12">
            <div class="row col-12 align-content-center">
                <div class="col-md-3 col-sm-4 col-xs-12 col-1 offset-1">
                    <div class="footer-content">
                        <div class="footer-head">
                            <div class="footer-logo">
                                <img src="<?= base_url('assets/user/'); ?>img\logo\logo-white.png" alt="">
                            </div>

                            <div class="footer-icons">
                                <ul>
                                    <li>
                                        <a href="https://rb.gy/8laact"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/suci.riaspengantin/"><i class="fab fa-instagram" aria-hidden="true"></i></a></a>
                                    </li>
                                    <li>
                                        <a href="https://wa.me/62895366876608"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-1 col-sm-4 col-xs-12 col-1">
                    <div class="footer-content">
                        <div class="footer-head">
                            <div class="footer-menu d-grid">
                                <a href="<?= base_url('auth/'); ?>">Home</a>
                                <a href="<?= base_url('auth/package'); ?>">Package</a>
                                <a href="<?= base_url('auth/galeri'); ?>">Gallery</a>
                                <a href="<?= base_url('auth/faq'); ?>">FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 col-8" style="overflow-x: hidden;">
                    <div class="footer-content">
                        <div class="footer-head">
                            <div class="footer-img d-flex position-relative">
                                <div class="btn-footer position-absolute top-50 start-50 translate-middle m-0 py-2 px-3">@suci.riaspengantin</div>
                                <img src="<?= base_url('assets/user/'); ?>img\footer-1.png" alt="">
                                <img src="<?= base_url('assets/user/'); ?>img\footer-2.png" alt="">
                                <img src="<?= base_url('assets/user/'); ?>img\footer-3.png" alt="">
                                <img src="<?= base_url('assets/user/'); ?>img\footer-4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-bawah col-12">
                    <p>© Copyright 2024 | Rias Pengantin Suci</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer END -->


    <!-- link js libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/user/'); ?>lib/wow/wow.min.js"></script>
    <script src="<?= base_url('assets/user/'); ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url('assets/user/'); ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url('assets/user/'); ?>lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url('assets/user/'); ?>lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/user/'); ?>js\main.js"></script>

</body>

</html>