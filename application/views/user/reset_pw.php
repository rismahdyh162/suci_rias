<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User - Reset PW</title>
    <link rel="stylesheet" href="<?= base_url('assets/user/'); ?>css\profil.css">

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
                <a href="profil.html"><i class="bi bi-arrow-left" style="color: #1A1618;"></i></a>
            </div>

            <div class="nav-text text-center position-relative pb-3 mb-4 mx-auto mt-5">
                <h3>PROFILE USER</h3>
            </div>

            <div class="nav-logo">
                <img src="<?= base_url('assets/user/'); ?>img\logo\logo black.svg" alt="Logo">
            </div>

        </nav>
    </div>
    <!-- Navbar End-->

    <!-- Profil User Content -->
    <div class="container user-container-full my-5 mx-5">
        <div class="row m-l-0 m-r-0 d-flex">
            <div class="col-sm-4 user-profile overflow-hidden">
                <div class="container-block overflow-hidden">
                    <img src="<?= base_url('assets/user/'); ?>img\pp-img.jpg" class="img-radius" alt="pp-img">
                    <div class="btn-rank d-inline-flex mx-auto wow slideInRight m-lg-n4">
                        <a href=""><i class="fas fa-camera" style="color: #4f474b;"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 py-4">
                <div class="container-form">
                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600" style="color: #1A1618;">Tentang</h6>
                    <div class="col-sm-6" style="margin-right: 5px;">
                        <p class="m-b-10 f-w-600">Username</p>
                        <h6 class="text-muted f-w-400">rismahdyh16</h6>
                    </div>

                    <div class="col-sm-6" style="margin-right: 5px;">
                        <p class="m-b-10 f-w-600">Email</p>
                        <h6 class="text-muted f-w-400">risma@gmail.com</h6>
                    </div>

                    <div class="form-group d-grid">
                        <label for="pw">Password</label><br>
                        <input type="password" placeholder="Password baru" class="pw" required>
                    </div>
                    <div class="form-group d-grid" style="padding-top: 20px;">
                        <input type="password" placeholder="Ulangi password" name="psw-repeat" id="psw-repeat" required>
                    </div>
                    <button class="btn-save">Save</button>
                </div>
            </div>
        </div>

        <!-- Profil User END -->




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

</body>

</html>