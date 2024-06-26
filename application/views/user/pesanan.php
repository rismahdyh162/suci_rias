<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pesanan</title>
    <link rel="stylesheet" href="<?= base_url('assets/user/'); ?>css\pesanan.css">

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
    <link rel="stylesheet" href="https://unpkg.com/nice-forms.css/nice-forms.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/user/'); ?>css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid position-relative p-0" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <nav class="navbar navbar-expand-lg bg-white px-4 px-lg-5 py-3 py-lg-0 d-flex justify-content-center align-content-center">
            <div class="icon-back">
                <button onclick="goBack()"><i class="bi bi-arrow-left" style="color: #1A1618;"></i></button>
            </div>

            <div class="nav-text text-center position-relative pb-3 mb-4 mx-auto mt-5">
                <h3>FORM PESANAN</h3>
            </div>

            <div class="nav-logo">
                <img src="<?= base_url('assets/user/'); ?>img\logo\logo black.svg" alt="Logo">
            </div>

        </nav>
    </div>
    <!-- Navbar End-->

    <!-- Pesanan Content -->
    <div class="container d-flex w-100 gap-5">
        <div class="form-row d-block bg-white my-5">
            <div class="form-content p-lg-4">
                <h5 class="judul pt-4" style="font-weight: bold;">Formulir Pesanan</h5>
                <p>Isi data diri dan pesanan Anda dengan benar!</p>
                <h5 style="font-weight: 600;">Data Diri Client </h5>
            </div>
            <!-- Formulir -->
            <div class="form-label pt-0">
                <div class="form-group">
                    <label for="nama"></label>
                    <input type="text" placeholder="Nama Lengkap" name="nama" required>
                </div>

                <div class="form-group">
                    <label for="telepon"></label>
                    <input type="tel" placeholder="Nomer WhatsApp" name="telepon" required>
                </div>

                <div class="form-group">
                    <label for="alamat"></label>
                    <input type="text" placeholder="Alamat Lengkap" name="alamat" style="height: 80px;" required>
                </div>

                <div class="form-group">
                    <label for="date">Tanggal Acara</label><br>
                    <input type="date" value="2024-03-22" name="tgl-acara" required>
                </div>

                <div class="form-group mt-4">
                    <label for="date">Jadwal Janji Temu</label><br>
                    <input class="jadwaltemu" type="date" value="2024-03-22" name="tgl-temu" required>
                    <input class="waktutemu" type="time" value="15:00" name="jam-temu" required>
                </div>

                <div class="form-group mt-4">
                    <label for="catatan">Catatan Tambahan</label>
                    <textarea rows="4" name="catatan"></textarea>
                    <p>* Jika ada tambahan maupun request, bisa ditulis disini atau bisa disampaikan saat <br> <em>janji temu...</em></p>
                </div>

            </div>
        </div>

        <!-- Rincian Pesanan -->
        <div class="pesanan-row w-100 my-5">
            <div class="table-content p-lg-4 bg-white w-100 ">
                <div class="table-text pt-4">
                    <h5 style="font-weight: 600; color: #1A1618;">Rincian Pesanan</h5>
                </div>

                <table id="item-pesanan" class="item-pesan mx-2">
                    <tr class="tabletitle">
                        <td class="item">
                            <h6>Item</h6>
                        </td>
                        <td class="rate">
                            <h6>Subtotal</h6>
                        </td>
                    </tr>

                    <tr class="tableitem">
                        <td>
                            <p class="item-text">Paket Premium 1</p>
                        </td>
                        <td>
                            <p class="item-harga">17.500.000</p>
                        </td>
                    </tr>

                    <tr class="tableitem">
                        <td>
                            <p class="item-text">Henna</p>
                        </td>
                        <td>
                            <p class="item-harga">300.000</p>
                        </td>
                    </tr>
                </table>

                <table class="item-total mx-2">
                    <tr class="tableitem">
                        <td>
                            <p class="item-text">Subtotal <em>(2 Item)</em></p>
                        </td>
                        <td>
                            <p class="item-harga text-end">Rp 17.800.000</p>
                        </td>
                    </tr>

                    <tr class="tableitem">
                        <td>
                            <p class="item-text">DP <em>(20%)</em></p>
                        </td>
                        <td>
                            <p class="item-harga text-end">Rp 3.560.000</p>
                        </td>
                    </tr>

                    <tr class="tableitem">
                        <td>
                            <p class="item-text">Total Pelunasan</p>
                        </td>
                        <td>
                            <p class="item-harga text-end">Rp 14.240.000</p>
                        </td>
                    </tr>
                </table>
            </div>
            <p class="catatan mt-3" style="font-size: 14px;">* Pembayaran pemesanan bisa melakukan DP terlebih dahulu, untuk total pelunasan dibayar setelah h+ acara.</p>

            <!-- Rekomendasi Item -->
            <div class="rekomendasi-row mt-4 w-100">
                <div class="title">
                    <h5>Rekomendasi tampil cantik</h5>
                </div>
                <div class="rekomen-items  d-flex gap-3">
                    <div class="rekomendasi-item bg-white mt-3">
                        <div class="rekomen-text d-grid px-3 pb-4">
                            <p>Henna</p>
                            <div class="content d-flex">
                                <img src="<?= base_url('assets/user/'); ?>img\Package\henna.JPG" alt="">
                                <div class="item-tambah d-block">
                                    <p>Rp 300.000</p>
                                    <a href="#item-pesanan"><button>Tambah</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rekomendasi-item bg-white mt-3">
                        <div class="rekomen-text d-grid px-3 pb-4">
                            <p>Softlens</p>
                            <div class="content d-flex">
                                <img src="<?= base_url('assets/user/'); ?>img\Package\softlens.jpg" alt="">
                                <div class="item-tambah d-block">
                                    <p>Rp 100.000</p>
                                    <a href="#item-pesanan"><button>Tambah</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="<?= base_url('auth/verif_pesan'); ?>"><button class="btn-pesan mt-5">Pesan</button></a>

        </div>
    </div>

    <!--Footer start bottom Area-->
    <div class="footer-area d-flex align-content-center">
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
                                        <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></a>
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
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</body>

</html>