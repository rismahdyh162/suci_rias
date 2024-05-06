<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package - Suci Rias</title>

    <!-- template css -->
    <link rel="stylesheet" href="<?= base_url('assets/user/'); ?>css\package.css">

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
                <a href="<?= base_url('auth/login'); ?>" class="btn btn-dark text-white py-2 px-4 flex-wrap flex-sm-shrink-0" style="font-weight: bold;">Login</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Paket content start -->
    <div id="paket">
        <div class="paket-text text-center position-relative pb-3 mb-4 mx-auto mt-5">
            <h3>Paket Layanan Kami</h3>
        </div>

        <!-- Paket Eksklusif-->
        <div class="top-paket">
            <div class="container">
                <div class="card-text w-75">Paket Eksklusif</div>
                <div class="col-lg-7" data-wow-delay="0.1s">
                    <div class="paket row-pills d-inline-flex justify-content-center mb-5" style="margin-top: 40px; margin-left: 25px;">
                        <div id="paket" class="paket-pane fade show p-0 active">
                            <!--Item paket-->
                            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="padding-right: 25px;">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img\Package\pengantin 1.jpg" alt=""></a>
                                        <div class="btn-rank position-absolute start-0 top-0 m-0 py-2 px-3">-4%</div>
                                        <div class="text-primary position-absolute start-0 bottom-0 fadeInLeft-0">
                                            <div class="text-item mx-auto wow slideInLeft">
                                                <a id="nama_paket" class="d-block">Paket Eksklusif 1</a>
                                                <a id="harga" style="text-decoration: line-through; font-size: 11px;">Rp 5.500.000</a>
                                                <a id="diskon">Rp 5.280.000</a>
                                            </div>
                                            <div class="text-primary text-lg-end wow slideInRight">
                                                <ul class="nav nav-pills d-inline-flex justify-content-end">
                                                    <li class="nav-item me-2">
                                                        <a class="icon-paket" href="<?= base_url('auth/pesanan'); ?>"><i style='font-size:14' class='fas'>&#xf218;</i></a>
                                                    </li>
                                                    <li class="nav-item me-2">
                                                        <div class="item-down" id="headingFour">
                                                            <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                            </div>
                                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
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
                            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="padding-right: 25px;">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img\Package\pengantin 5.jpg" alt=""></a>
                                        <div class="btn-rank position-absolute start-0 top-0 m-0 py-2 px-3">-3%</div>
                                        <div class="text-primary position-absolute start-0 bottom-0 fadeInLeft-0">
                                            <div class="text-item mx-auto wow slideInLeft">
                                                <a id="nama_paket" class="d-block">Paket Eksklusif 2</a>
                                                <a id="harga" style="text-decoration: line-through; font-size: 11px;">Rp 12.990.000</a>
                                                <a id="diskon">Rp 12.600.000</a>
                                            </div>
                                            <div class="text-primary text-lg-end wow slideInRight">
                                                <ul class="nav nav-pills d-inline-flex justify-content-end">
                                                    <li class="nav-item me-2">
                                                        <a class="icon-paket" href="<?= base_url('auth/pesanan'); ?>"><i style='font-size:14' class='fas'>&#xf218;</i></a>
                                                    </li>
                                                    <li class="nav-item me-2">
                                                        <div class="item-down" id="headingFive">
                                                            <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                            </div>
                                                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
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
                            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="padding-right: 25px;">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img\Package\pengantin 3.JPG" alt=""></a>
                                        <div class="btn-rank position-absolute start-0 top-0 m-0 py-2 px-3">-2%</div>
                                        <div class="text-primary position-absolute start-0 bottom-0 fadeInLeft-0">
                                            <div class="text-item mx-auto wow slideInLeft">
                                                <a id="nama_paket" class="d-block">Paket Eksklusif 3</a>
                                                <a id="harga" style="text-decoration: line-through; font-size: 11px;">Rp 10.889.000</a>
                                                <a id="diskon">Rp 10.671.000</a>
                                            </div>
                                            <div class="text-primary text-lg-end wow slideInRight">
                                                <ul class="nav nav-pills d-inline-flex justify-content-end">
                                                    <li class="nav-item me-2">
                                                        <a class="icon-paket" href="<?= base_url('auth/pesanan'); ?>"><i style='font-size:14' class='fas'>&#xf218;</i></a>
                                                    </li>
                                                    <li class="nav-item me-2">
                                                        <div class="item-down" id="headingSix">
                                                            <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                            </div>
                                                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
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

        <!-- Paket Premium -->
        <div class="top-paket">
            <div class="container">
                <div class="card-text w-75">Paket Premium</div>
                <div class="col-lg-7" data-wow-delay="0.1s">
                    <div class="paket row-pills d-inline-flex justify-content-center mb-5" style="margin-top: 40px; margin-left: 25px;">
                        <div id="paket" class="paket-pane fade show p-0 active">
                            <!--Item paket-->
                            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="padding-right: 25px;">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img\Package\pengantin-11.jpg" alt=""></a>
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
                                                        <div class="item-down" id="headingSeven">
                                                            <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                            </div>
                                                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
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
                            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="padding-right: 25px;">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img\Package\pengantin-12.jpg" alt=""></a>
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
                                                        <div class="item-down" id="headingEight">
                                                            <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                            </div>
                                                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
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
                            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="padding-right: 25px;">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img\Package\pengantin-7.JPG" alt=""></a>
                                        <div class="text-primary position-absolute start-0 bottom-0 fadeInLeft-0">
                                            <div class="text-item mx-auto wow slideInLeft">
                                                <a id="nama_paket" class="d-block">Paket Premium 3</a>
                                                <a id="harga">Rp 5.000.000</a>
                                            </div>
                                            <div class="text-primary text-lg-end wow slideInRight">
                                                <ul class="nav nav-pills d-inline-flex justify-content-end">
                                                    <li class="nav-item me-2">
                                                        <a class="icon-paket" href="<?= base_url('auth/pesanan'); ?>"><i style='font-size:14' class='fas'>&#xf218;</i></a>
                                                    </li>
                                                    <li class="nav-item me-2">
                                                        <div class="item-down" id="headingNine">
                                                            <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                            </div>
                                                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
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

        <!-- Paket Hemat -->
        <div class="top-paket">
            <div class="container">
                <div class="card-text w-75">Paket Hemat</div>
                <div class="col-lg-7" data-wow-delay="0.1s">
                    <div class="paket row-pills d-inline-flex justify-content-center mb-5" style="margin-top: 40px; margin-left: 25px;">
                        <div id="paket" class="paket-pane fade show p-0 active">
                            <!--Item paket-->
                            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="padding-right: 25px;">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img\Package\pengantin-8.jpeg" alt=""></a>
                                        <div class="text-primary position-absolute start-0 bottom-0 fadeInLeft-0">
                                            <div class="text-item mx-auto wow slideInLeft">
                                                <a id="nama_paket" class="d-block">Paket Hemat 1</a>
                                                <a id="harga">Rp 5.000.000</a>
                                            </div>
                                            <div class="text-primary text-lg-end wow slideInRight">
                                                <ul class="nav nav-pills d-inline-flex justify-content-end">
                                                    <li class="nav-item me-2">
                                                        <a class="icon-paket" href="<?= base_url('auth/pesanan'); ?>"><i style='font-size:14' class='fas'>&#xf218;</i></a>
                                                    </li>
                                                    <li class="nav-item me-2">
                                                        <div class="item-down" id="headingTen">
                                                            <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                            </div>
                                                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
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
                            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="padding-right: 25px;">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img\Package\pengantin-13.jpg" alt=""></a>
                                        <div class="text-primary position-absolute start-0 bottom-0 fadeInLeft-0">
                                            <div class="text-item mx-auto wow slideInLeft">
                                                <a id="nama_paket" class="d-block">Paket Hemat 2</a>
                                                <a id="harga">Rp 5.000.000</a>
                                            </div>
                                            <div class="text-primary text-lg-end wow slideInRight">
                                                <ul class="nav nav-pills d-inline-flex justify-content-end">
                                                    <li class="nav-item me-2">
                                                        <a class="icon-paket" href="<?= base_url('auth/pesanan'); ?>"><i style='font-size:14' class='fas'>&#xf218;</i></a>
                                                    </li>
                                                    <li class="nav-item me-2">
                                                        <div class="item-down" id="headingEleven">
                                                            <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                            </div>
                                                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
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
                            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="padding-right: 25px;">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img\Package\pengantin-14.jpg" alt=""></a>
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
                                                        <div class="item-down" id="headingTwelve">
                                                            <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                            </div>
                                                            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
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

        <!-- Jasa Makeup -->
        <div class="top-paket">
            <div class="container d-grid">
                <div class="card-text w-75">Jasa Makeup</div>
                <div class="col-lg-7" data-wow-delay="0.1s">
                    <div class="paket row-pills d-inline-flex justify-content-center" style="margin-top: 40px; margin-left: 25px;">
                        <div id="paket" class="paket-pane fade show p-0 active">
                            <!--Item paket-->
                            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="padding-right: 25px;">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img\Package\Makeup-4.jpeg" alt=""></a>
                                        <div class="text-primary position-absolute start-0 bottom-0 fadeInLeft-0">
                                            <div class="text-item mx-auto wow slideInLeft">
                                                <a id="nama_paket" class="d-block">Makeup Wisuda</a>
                                                <a id="harga">Rp 200.000</a>
                                            </div>
                                            <div class="text-primary text-lg-end wow slideInRight">
                                                <ul class="nav nav-pills d-inline-flex justify-content-end">
                                                    <li class="nav-item me-2">
                                                        <a class="icon-paket" href="<?= base_url('auth/pesanan'); ?>"><i style='font-size:14' class='fas'>&#xf218;</i></a>
                                                    </li>
                                                    <li class="nav-item me-2">
                                                        <div class="item-down" id="headingThirteen">
                                                            <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                            </div>
                                                            <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
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
                            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="padding-right: 25px;">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img\Package\Makeup-2.jpg" alt=""></a>
                                        <div class="text-primary position-absolute start-0 bottom-0 fadeInLeft-0">
                                            <div class="text-item mx-auto wow slideInLeft">
                                                <a id="nama_paket" class="d-block">Makeup Acara Formal</a>
                                                <a id="harga">Rp 100.000</a>
                                            </div>
                                            <div class="text-primary text-lg-end wow slideInRight">
                                                <ul class="nav nav-pills d-inline-flex justify-content-end">
                                                    <li class="nav-item me-2">
                                                        <a class="icon-paket" href="<?= base_url('auth/pesanan'); ?>"><i style='font-size:14' class='fas'>&#xf218;</i></a>
                                                    </li>
                                                    <li class="nav-item me-2">
                                                        <div class="item-down" id="headingFourteen">
                                                            <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                            </div>
                                                            <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
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
                            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="padding-right: 25px;">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img\Package\Makeup-3.jpeg" alt=""></a>
                                        <div class="text-primary position-absolute start-0 bottom-0 fadeInLeft-0">
                                            <div class="text-item mx-auto wow slideInLeft">
                                                <a id="nama_paket" class="d-block">Makeup Lamaran</a>
                                                <a id="harga">Rp 300.000</a>
                                            </div>
                                            <div class="text-primary text-lg-end wow slideInRight">
                                                <ul class="nav nav-pills d-inline-flex justify-content-end">
                                                    <li class="nav-item me-2">
                                                        <a class="icon-paket" href="<?= base_url('auth/pesanan'); ?>"><i style='font-size:14' class='fas'>&#xf218;</i></a>
                                                    </li>
                                                    <li class="nav-item me-2">
                                                        <div class="item-down" id="headingFifteen">
                                                            <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                            </div>
                                                            <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
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

                <!-- Row makeup 2 -->
                <div class="col-lg-7" data-wow-delay="0.1s">
                    <div class="paket row-pills d-inline-flex justify-content-center mb-5" style="margin-top: 40px; margin-left: 25px;">
                        <div id="paket" class="paket-pane fade show p-0 active">
                            <!--Item paket-->
                            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="padding-right: 25px;">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img\Package\Makeup-5.png" alt=""></a>
                                        <div class="text-primary position-absolute start-0 bottom-0 fadeInLeft-0">
                                            <div class="text-item mx-auto wow slideInLeft">
                                                <a id="nama_paket" class="d-block">Makeup Hari Kartini</a>
                                                <a id="harga">Rp 100.000</a>
                                            </div>
                                            <div class="text-primary text-lg-end wow slideInRight">
                                                <ul class="nav nav-pills d-inline-flex justify-content-end">
                                                    <li class="nav-item me-2">
                                                        <a class="icon-paket" href="<?= base_url('auth/pesanan'); ?>"><i style='font-size:14' class='fas'>&#xf218;</i></a>
                                                    </li>
                                                    <li class="nav-item me-2">
                                                        <div class="item-down" id="headingSixteen">
                                                            <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                            </div>
                                                            <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#accordionExample">
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
                            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="padding-right: 25px;">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img\Package\Makeup-1.png" alt=""></a>
                                        <div class="text-primary position-absolute start-0 bottom-0 fadeInLeft-0">
                                            <div class="text-item mx-auto wow slideInLeft">
                                                <a id="nama_paket" class="d-block">Makeup + Kebaya</a>
                                                <a id="harga">Rp 150.000</a>
                                            </div>
                                            <div class="text-primary text-lg-end wow slideInRight">
                                                <ul class="nav nav-pills d-inline-flex justify-content-end">
                                                    <li class="nav-item me-2">
                                                        <a class="icon-paket" href="<?= base_url('auth/pesanan'); ?>"><i style='font-size:14' class='fas'>&#xf218;</i></a>
                                                    </li>
                                                    <li class="nav-item me-2">
                                                        <div class="item-down" id="headingSeventeen">
                                                            <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                            </div>
                                                            <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample">
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
                            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="padding-right: 25px;">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="#"><img class="img-fluid" src="<?= base_url('assets/user/'); ?>img\Package\makeup-6.JPG" alt=""></a>
                                        <div class="text-primary position-absolute start-0 bottom-0 fadeInLeft-0">
                                            <div class="text-item mx-auto wow slideInLeft">
                                                <a id="nama_paket" class="d-block">Makeup Bridesmaid</a>
                                                <a id="harga">Rp 100.000</a>
                                            </div>
                                            <div class="text-primary text-lg-end wow slideInRight">
                                                <ul class="nav nav-pills d-inline-flex justify-content-end">
                                                    <li class="nav-item me-2">
                                                        <a class="icon-paket" href="<?= base_url('auth/pesanan'); ?>"><i style='font-size:14' class='fas'>&#xf218;</i></a>
                                                    </li>
                                                    <li class="nav-item me-2">
                                                        <div class="item-down" id="headingEighteen">
                                                            <div class="down collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen"><a id="toggleButton" class="icon-paket" href="#"><i class="bi bi-caret-down-fill"></i></a>
                                                            </div>
                                                            <div id="collapseEighteen" class="accordion-collapse collapse" aria-labelledby="headingEighteen" data-bs-parent="#accordionExample">
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
    </div>
    <!-- Package END-->

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