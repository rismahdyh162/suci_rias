<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home- Suci Rias</title>
    <link rel="stylesheet" href="<?= base_url('assets/user/'); ?>css\faq.css">

    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Bonheur+Royale&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/user/'); ?>img/favicon.png" rel="icon">
    <link href="<?= base_url('assets/user/'); ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/user/'); ?>css\bootstrap.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/user/'); ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/user/'); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid position-relative p-0" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
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

    <!-- Faq area start -->
    <div class="text-judul ">
        <h2>FAQ Question</h2>
    </div>
    <div class="accordion px-5 mx-5" id="accordionExample">
        <div class="accordion-item bg-white">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Apa saja paket pernikahan yang ditawarkan oleh Rias Pengantin Suci?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Kami menawarkan beragam paket yang mencakup berbagai layanan seperti tata rias pengantin, dekorasi, fotografi, dan masih banyak lagi. Setiap paket dirancang untuk memenuhi kebutuhan dan anggaran Anda. Lebih lanjutnya bisa kunjungi menu <a href="<?= base_url('auth/package'); ?>"><b>Package</b></a> dan untuk dapatkan harga spesial hari ini juga!
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Bisakah saya memesan jasa pernikahan dengan biaya kustom atau sesuai dengan budget saya?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Tentu saja! Kami dapat merancang paket yang sesuai dengan anggaran Anda. <a href="https://wa.me/62895366876608"><b>Silakan hubungi kami</b></a> untuk informasi lebih lanjut, kami akan mencari solusi yang tepat untuk Anda.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Bagaimana prosedur pembayaran untuk memesan jasa pernikahan di Rias Pengantin Suci?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Setelah Anda memesan jasa layanan kami, Anda dapat memilih metode pembayaran secara transfer bank atau tunai.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Apakah ada kebijakan pembatalan dan pengembalian uang untuk paket pernikahan yang sudah dipesan?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Kami memahami bahwa rencana bisa berubah. Kami memiliki kebijakan pembatalan yang fleksibel, tetapi ada kemungkinan dikenakan biaya pembatalan tergantung pada waktu pemberitahuan pembatalan dan jenis layanan yang dipesan. Silakan hubungi tim kami untuk rincian lebih lanjut.
                </div>
            </div>
        </div>
    </div>


    <!-- End Faq Area -->

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