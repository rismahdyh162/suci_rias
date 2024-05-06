<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register- Suci Rias</title>

    <!-- template css -->
    <link rel="stylesheet" href="<?= base_url('assets/user/'); ?>css\register.css">

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
    <div class="container-fluid bg-white px-0">

        <div class="col-7">
            <div class="form-row">
                <div class="text text-center">
                    <img src="<?= base_url('assets/user/'); ?>img\logo\logo black.svg" alt="">
                </div>

                <form method="post" action="<?= base_url(('auth/registrasi')); ?>">
                    <div class="form-label">
                        <div class="form-group">
                            <label for="email">Email</label><br>
                            <input type="text" placeholder="Masukan email Anda" name="email">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label><br>
                            <input type="text" placeholder="Buat nama pengguna Anda" name="username">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group d-grid">
                            <label for="pw">Password</label><br>
                            <input type="password" placeholder="Masukan password" id="password1" name="password1">
                        </div>
                        <div class="form-group d-grid">
                            <label for="pw-repeat">Ulangi Password</label><br>
                            <input type="password" placeholder="Masukan ulang password" id="password2" name="password2">
                        </div>
                        <a type="submit" class="btn" href="<?= base_url('auth/login'); ?>">Daftar</a>
                        <p>Sudah punya akun? <a href="<?= base_url('auth/login'); ?>">Login sekarang</a></p>
                    </div>
                </form>
            </div>
        </div>
        <!--Form End-->

        <!--img start-->
        <div class=" col-5">
            <div class="img-bg">
                <img class="foto" src="<?= base_url('assets/user/'); ?>img\Group 48.png" alt="">
            </div>
        </div>
    </div>


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