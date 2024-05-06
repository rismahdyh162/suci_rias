<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan page</title>
    <link rel="stylesheet" href="<?= base_url('assets/user/'); ?>css\ulasan.css">

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
                <h3>TULIS ULASAN</h3>
            </div>

            <div class="nav-logo">
                <img src="<?= base_url('assets/user/'); ?>img\logo\logo black.svg" alt="Logo">
            </div>

        </nav>
    </div>
    <!-- Navbar End-->

    <div class="container w-75">
        <div class="content">
            <div class="rating mt-5">
                <input type="radio" name="rating" id="star1" value="1">
                <label for="star1"></label>
                <input type="radio" name="rating" id="star2" value="2">
                <label for="star2"></label>
                <input type="radio" name="rating" id="star3" value="3">
                <label for="star3"></label>
                <input type="radio" name="rating" id="star4" value="4">
                <label for="star4"></label>
                <input type="radio" name="rating" id="star5" value="5">
                <label for="star5"></label>
            </div>
            <div class="btn-option mt-2">
                <input type="button" name="btn-option" id="option1" value="Harga Terjangkau" style="margin-right: 10px;">
                <label for="option1"></label>
                <input type="button" name="btn-option" id="option2" value="Pelayanan Baik" style="margin-right: 10px;">
                <label for="option2"></label>
                <input type="button" name="btn-option" id="option3" value="Pelayanan Ramah">
                <label for="option3"></label>
            </div>
            <div class="form-text mt-1">
                <label for="ulasan"></label>
                <textarea placeholder="Bagaimana pengalaman Anda setelah menggunakan jasa ini?" rows="5" name="catatan"></textarea>
                <p>* Tulis maksimal 90 karakter</p>
            </div>
            <div class="btn-kirim">
                <a href="riwayat_pesan.html"><button onclick="myFunction()">Kirim</button></a>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            alert("Terimaksih, ulasan Anda berhasil terkirim!");
        }
    </script>


    <!-- link js libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/user/'); ?>lib/wow/wow.min.js"></script>
    <script src="<?= base_url('assets/user/'); ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url('assets/user/'); ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url('assets/user/'); ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/user/'); ?>js\main.js"></script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</body>

</html>