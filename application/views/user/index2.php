<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title>Home User - Suci Rias</title>
    <!-- template css -->
    <link rel="stylesheet" href="<?= base_url('assets/user/'); ?>css\style.css">

    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/user/'); ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/user/'); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/user/'); ?>css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="overflow-x: hidden;">
    <!-- Navbar -->
    <div class="container-fluid position-relative p-0" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="<?= base_url('auth/index2'); ?>" class="navbar-brand p-0">
                <img src="<?= base_url('assets/user/'); ?>img\logo\logo black.svg" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?= base_url('auth/index2'); ?>" class="nav-item nav-link active" style="font-weight: bold;">Home</a>
                    <a href="<?= base_url('auth/package'); ?>" class="nav-item nav-link" style="font-weight: bold;">Package</a>
                    <a href="<?= base_url('auth/galeri'); ?>" class="nav-item nav-link" style="font-weight: bold;">Gallery</a>
                    <a href="<?= base_url('auth/faq'); ?>" class="nav-item nav-link" style="font-weight: bold;">FAQ</a>
                </div>
                <div class="nav-item dropdown d-flex">
                    <img class="img-circle elevation-2" src="<?= base_url('assets/user/'); ?>..\user\img\pp-img.jpg" alt="pp-user">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item " href="<?= base_url('auth/profil'); ?>">Profile</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('auth/'); ?>">Keluar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Landing Page -->
    <div class="landing_section">
        <div class="row">
            <div class="img-shadow p-0"><img src="<?= base_url('assets/user/'); ?>img\img-home2.png" alt="" style="
                    z-index: -100;"></div>
            <div class="col-md-4">
                <div class="img-box"><img src="<?= base_url('assets/user/'); ?>img\img-home1.png" alt=""></div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="detail-box mx-7">
                <h2>RIAS PENGANTIN SUCI</h2>
                <p><em>Selamat datang</em>, kami adalah penyedia layanan lengkap untuk persiapan pernikahan. Dengan pengalaman bertahun-tahun dalam industri ini, Kami siap membantu mewujudkan impian pernikahan Anda menjadi kenyataan.</p>
                <div class="promo-rectangle">
                    <a class="promo-text" href="<?= base_url('auth/package'); ?>" style="color: #D1373F;"><img src="<?= base_url('assets/user/'); ?>img\icon-promo.png" alt="icon-promo">Dapatkan Promo Spesial Sekarang!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Landing Page END -->

    <!-- About Page -->
    <div id="about">
        <div class="sub-text">
            <h3>About</h3>
            <p>Rias Pengantin Suci berdiri sejak tahun 1998, yang beralamat di Desa Protomulyo
                RT. 05 RW 04 Kecamatan Kaliwungu Selatan, Kendal, Jawa Tengah. Kami bergerak dalam
                jasa wedding organizer. <a href="https://wa.me/62895366876608"><em>Silahkan hubungi kami </em></a>untuk konsultasi lebih lanjut atau
                untuk membuat janji temu. Kami siap bekerja bersama dengan Anda untuk mempersiapkan
                acara pernikahan dari awal hingga akhir. </p>
        </div>
    </div>
    <!-- About Page END-->

    <!-- Service Page -->
    <div class="services area-padding">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
                <h3>Layanan <em>Kami</em></h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="service-content">
                <!-- Icon services -->
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <img class="services-icon" src="<?= base_url('assets/user/'); ?>img\wedding-icon.png" alt="">
                                <h4>Paket Lengkap Pernikahan</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Icon services -->
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <img class="services-icon" src="<?= base_url('assets/user/'); ?>img\kebaya-icon.png" alt="">
                                <h4>Penyewaan Kebaya</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Icon services -->
                <div class="col-md-3 col-sm-4 col-xs-12" data-wow-delay="0.1s">
                    <div class="about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <img class="services-icon overflow-hidden" src="<?= base_url('assets/user/'); ?>img\dekorasi-icon.png" alt="">
                                <h4>Dekorasi Pernikahan <br>& Lamaran</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-contents">
                <!-- Icon services -->
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <img class="services-icon" src="<?= base_url('assets/user/'); ?>img\alatprasmanan-icon.png" alt="">
                                <h4>Penyewaan Alat Prasmanan</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Icon services -->
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <img class="services-icon" src="<?= base_url('assets/user/'); ?>img\makeup-icon.png" alt="">
                                <h4>Jasa Makeup</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Icon services END-->
        </div>
    </div>

    <!-- Service Page END-->

    <!-- Paket Page -->
    <div class="paket-page">
        <div class="row g-0 gx-5 overflow-hidden  d-inline-flex">
            <div class="col-lg-4">
                <div class="text-start mx-auto mb-10 wow slideInLeft" data-wow-delay="0.1s">
                    <h2 style="margin-left: 100px;">Pilih Paket <br>Pernikahan <br> Impian Anda</h2>
                    <a href="<?= base_url('auth/package'); ?>" class="btn-see" style="margin-left: 100px;">Lihat semua<i id="icon-arrow" class='fas fa-arrow-right' style="margin-left: 10px;"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-start wow slideInRight" data-wow-delay="0.1s">
                <div class="paket row-pills d-inline-flex justify-content-end mb-5" style="margin-top: 40px;">
                    <div id="paket" class="paket-pane fade show p-0 active">
                        <!--Item paket-->
                        <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden" style="margin-right: 25px;">
                                <div class="position-relative overflow-hidden">
                                    <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img\Package\pengantin 2.jpg" alt=""></a>
                                    <div class="btn-rank position-absolute start-0 top-0 m-0 py-2 px-3">1</div>
                                    <div class="text-primary position-absolute start-0 bottom-0 fadeInLeft-0">
                                        <div class="text-item mx-auto wow slideInLeft">
                                            <a id="nama_paket" class="d-block">Paket Premium 2</a>
                                            <a id="harga">Rp 5.000.000</a>
                                        </div>
                                        <div class="text-primary text-lg-end wow slideInRight">
                                            <ul class="nav nav-pills d-inline-flex justify-content-end">
                                                <li class="nav-item me-2">
                                                    <a class="icon-paket" href="<?= base_url('auth/pesanan'); ?>"><i style='font-size:14' class='fas'>&#xf218;</i></a>
                                                </li>
                                                <li class="nav-item me-2">
                                                    <div class="item-down" id="headingOne">
                                                        <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                        </div>
                                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                Detail: Makeup, 3 X Ganti Gaun Pengantin, Henna, Panggih Pengantin, Dekorasi, Foto dan Shooting, Tenda dan Kursi, Soundsystem, Organ Tunggal.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Item paket-->
                        <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden" style="margin-right: 25px;">
                                <div class="position-relative overflow-hidden">
                                    <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img/Package/pengantin 6.jpg" alt=""></a>
                                    <div class="btn-rank position-absolute start-0 top-0 m-0 py-2 px-3">2</div>
                                    <div class="text-primary position-absolute start-0 bottom-0 fadeInLeft-0">
                                        <div class="text-item mx-auto wow slideInLeft">
                                            <a id="nama_paket" class="d-block">Paket Hemat 3</a>
                                            <a id="harga">Rp 5.000.000</a>
                                        </div>
                                        <div class="text-primary text-lg-end wow slideInRight">
                                            <ul class="nav nav-pills d-inline-flex justify-content-end">
                                                <li class="nav-item me-2">
                                                    <a class="icon-paket" href="<?= base_url('auth/pesanan'); ?>"><i style='font-size:14' class='fas'>&#xf218;</i></a>
                                                </li>
                                                <li class="nav-item me-2">
                                                    <div class="item-down" id="headingTwo">
                                                        <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                        </div>
                                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                Detail: Makeup, 3 X Ganti Gaun Pengantin, Henna, Panggih Pengantin, Dekorasi, Foto dan Shooting, Tenda dan Kursi, Soundsystem, Organ Tunggal.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Item paket-->
                        <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden" style="margin-right: 25px;">
                                <div class="position-relative overflow-hidden">
                                    <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img\Package\pengantin 4.JPG" alt=""></a>
                                    <div class="btn-rank position-absolute start-0 top-0 m-0 py-2 px-3">3</div>
                                    <div class="text-primary position-absolute start-0 bottom-0 fadeInLeft-0">
                                        <div class="text-item mx-auto wow slideInLeft">
                                            <a id="nama_paket" class="d-block">Paket Premium 1</a>
                                            <a id="harga">Rp 5.000.000</a>
                                        </div>
                                        <div class="text-primary text-lg-end wow slideInRight">
                                            <ul class="nav nav-pills d-inline-flex justify-content-end">
                                                <li class="nav-item me-2">
                                                    <a class="icon-paket" href="<?= base_url('auth/pesanan'); ?>"><i style='font-size:14' class='fas'>&#xf218;</i></a>
                                                </li>
                                                <li class="nav-item me-2">
                                                    <div class="item-down" id="headingThree">
                                                        <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                        </div>
                                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                Detail: Makeup, 3 X Ganti Gaun Pengantin, Henna, Panggih Pengantin, Dekorasi, Foto dan Shooting, Tenda dan Kursi, Soundsystem, Organ Tunggal.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--item paket end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Top paket end-->

    <!--Testimoni Page-->
    <div class="container-page py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="testimoni-title text-center position-relative pb-3 mb-4 mx-auto">
                <h3>Testimoni</h3>
            </div>

            <div class="owl-carousel testimoni-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimoni-item bg-FBE2EC my-4">
                    <div class="d-flex align-items-center border-bottom pt-4 pb-4 px-5">
                        <img class="pp rounded-5" src="<?= base_url('assets/user/'); ?>img\pp-1.jpg" alt="" style="width: 60px;">
                        <div class="ps-4">
                            <h6 class="username mb-1">username</h6>
                            <small class="ket-uppercase">Harga Terjangkau</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-2 px-5">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elidolor mattis sit phasellus mollis sit aliquam sit nullam neques.</p>
                    </div>
                    <div class="rating pb-4">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>

                <div class="testimoni-item bg-FBE2EC my-4">
                    <div class="d-flex align-items-center border-bottom pt-4 pb-4 px-5">
                        <img class="pp rounded-5" src="<?= base_url('assets/user/'); ?>img\pp-1.jpg" alt="" style="width: 60px;">
                        <div class="ps-4">
                            <h6 class="username mb-1">username</h6>
                            <small class="ket-uppercase">Harga Terjangkau</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-2 px-5">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elidolor mattis sit phasellus mollis sit aliquam sit nullam neques.</p>
                    </div>
                    <div class="rating pb-4">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>

                <div class="testimoni-item bg-FBE2EC my-4">
                    <div class="d-flex align-items-center border-bottom pt-4 pb-4 px-5">
                        <img class="pp rounded-5" src="<?= base_url('assets/user/'); ?>img\pp-1.jpg" alt="" style="width: 60px;">
                        <div class="ps-4">
                            <h6 class="username mb-1">username</h6>
                            <small class="ket-uppercase">Harga Terjangkau</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-2 px-5">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elidolor mattis sit phasellus mollis sit aliquam sit nullam neques.</p>
                    </div>
                    <div class="rating pb-4">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>

                <div class="testimoni-item bg-FBE2EC my-4">
                    <div class="d-flex align-items-center border-bottom pt-4 pb-4 px-5">
                        <img class="pp rounded-5" src="<?= base_url('assets/user/'); ?>img\pp-1.jpg" alt="" style="width: 60px;">
                        <div class="ps-4">
                            <h6 class="username mb-1">username</h6>
                            <small class="ket-uppercase">Harga Terjangkau</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-2 px-5">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elidolor mattis sit phasellus mollis sit aliquam sit nullam neques.</p>
                    </div>
                    <div class="rating pb-4">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>

                <div class="testimoni-item bg-FBE2EC my-4">
                    <div class="d-flex align-items-center border-bottom pt-4 pb-4 px-5">
                        <img class="pp rounded-5" src="<?= base_url('assets/user/'); ?>img\pp-1.jpg" alt="" style="width: 60px;">
                        <div class="ps-4">
                            <h6 class="username mb-1">username</h6>
                            <small class="ket-uppercase">Harga Terjangkau</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-2 px-5">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elidolor mattis sit phasellus mollis sit aliquam sit nullam neques.</p>
                    </div>
                    <div class="rating pb-4">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Testimoni Page END-->

    <!--Peta maps-->
    <div class="peta text-center position-relative pb-3 mb-4 mx-auto">
        <h3>Alamat</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.305578347831!2d110.2464228!3d-6.9732289!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e705fdbbf3a5fcf%3A0x8511c67556ca0b9d!2sRias%20Pengantin%20Suci!5e0!3m2!1sid!2sid!4v1710835172213!5m2!1sid!2sid" width="80%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    <!--Peta maps END-->

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
                                <a href="<?= base_url('auth/index2'); ?>">Home</a>
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