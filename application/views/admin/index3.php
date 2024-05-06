<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suci Rias | Dashboard Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition light sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="<?= base_url('assets/admin/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-pink elevation-4">
            <!-- Brand Logo -->
            <a href="index2.html" class="brand-link">
                <img src="<?= base_url('assets/admin/'); ?>dist\img\logo\logo black.svg" alt="AdminLTE Logo" class="brand-image" style="opacity: .8; width: 200px;">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('assets/admin/'); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin Risma</a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">EXAMPLES</li>
                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Gallery
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages\examples/package.html" class="nav-link">
                                <i class="nav-icon fa fa-shopping-bag"></i>
                                <p>
                                    Package
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages\pengguna.html" class="nav-link">
                                <i class="nav-icon fas fa-id-badge"></i>
                                <p>
                                    Data Pengguna
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Data Pesanan
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/data_pesanan.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kelola Pesanan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/status_pembayaran.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Status Pembayaran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/ulasan_pelanggan.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ulasan Pelanggan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-cart"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Pesanan</span>
                                    <span class="info-box-number">
                                        10
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Ulasan</span>
                                    <span class="info-box-number">5</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fa fa-shopping-bag"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Item</span>
                                    <span class="info-box-number">16</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Pengguna</span>
                                    <span class="info-box-number">20</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-md-12">
                            <!-- ./card-body -->
                            <div class="card-footer">
                                <div class="row " style="text-align: center;">
                                    <div class="col-sm-12 col-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-success "></i></span>
                                            <h5 class="description-header">Rp 10.000.000</h5>
                                            <span class="description-text">TOTAL Pemasukan</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Main row -->
                <div class="row mt-4 mx-1">
                    <!-- Left col -->
                    <div class="col-md-8">

                        <div class="row">
                            <div class="col-md-6">

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- TABLE: LATEST ORDERS -->
                        <div class="card">
                            <div class="card-header border-transparent">
                                <h3 class="card-title">Pesanan Terbaru</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Username</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                <td>@risma</td>
                                                <td><span class="badge badge-success">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                                <td>@vikiir</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                <td>@yuniia</td>
                                                <td><span class="badge badge-danger">Process</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                <td>@maulana</td>
                                                <td><span class="badge badge-info">Process</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                                <td>@dudiyono</td>
                                                <td><span class="badge badge-warning">Completed</span></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <a href="pages/examples/project-add.html" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-4">
                        <!-- Calendar -->
                        <div class="card bg-gradient-success">
                            <div class="card-header border-0">

                                <h3 class="card-title">
                                    <i class="far fa-calendar-alt"></i>
                                    Calendar
                                </h3>
                                <!-- tools card -->
                                <div class="card-tools">
                                    <!-- button with a dropdown -->
                                    <div class="btn-group">
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pt-0">
                                <!--The calendar -->
                                <div id="calendar" style="width: 100%">
                                    <div class="bootstrap-datetimepicker-widget usetwentyfour">
                                        <ul class="list-unstyled">
                                            <li class="show">
                                                <div class="datepicker">
                                                    <div class="datepicker-days">
                                                        <table class="table table-sm">
                                                            <thead>
                                                                <tr>
                                                                    <th class="prev" data-action="previous">
                                                                        <span class="fa fa-chevron-left" title="Previous Month"></span>
                                                                    </th>
                                                                    <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">April 2024</th>
                                                                    <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th>
                                                                </tr>
                                                                <tr>
                                                                    <th class="dow">Su</th>
                                                                    <th class="dow">Mo</th>
                                                                    <th class="dow">Tu</th>
                                                                    <th class="dow">We</th>
                                                                    <th class="dow">Th</th>
                                                                    <th class="dow">Fr</th>
                                                                    <th class="dow">Sa</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td data-action="selectDay" data-day="03/31/2024" class="day old weekend">31</td>
                                                                    <td data-action="selectDay" data-day="04/01/2024" class="day">1</td>
                                                                    <td data-action="selectDay" data-day="04/02/2024" class="day">2</td>
                                                                    <td data-action="selectDay" data-day="04/03/2024" class="day">3</td>
                                                                    <td data-action="selectDay" data-day="04/04/2024" class="day">4</td>
                                                                    <td data-action="selectDay" data-day="04/05/2024" class="day">5</td>
                                                                    <td data-action="selectDay" data-day="04/06/2024" class="day weekend">6</td>
                                                                </tr>
                                                                <tr>
                                                                    <td data-action="selectDay" data-day="04/07/2024" class="day weekend">7</td>
                                                                    <td data-action="selectDay" data-day="04/08/2024" class="day">8</td>
                                                                    <td data-action="selectDay" data-day="04/09/2024" class="day">9</td>
                                                                    <td data-action="selectDay" data-day="04/10/2024" class="day">10</td>
                                                                    <td data-action="selectDay" data-day="04/11/2024" class="day">11</td>
                                                                    <td data-action="selectDay" data-day="04/12/2024" class="day">12</td>
                                                                    <td data-action="selectDay" data-day="04/13/2024" class="day weekend">13</td>
                                                                </tr>
                                                                <tr>
                                                                    <td data-action="selectDay" data-day="04/14/2024" class="day weekend">14</td>
                                                                    <td data-action="selectDay" data-day="04/15/2024" class="day active today">15</td>
                                                                    <td data-action="selectDay" data-day="04/16/2024" class="day">16</td>
                                                                    <td data-action="selectDay" data-day="04/17/2024" class="day">17</td>
                                                                    <td data-action="selectDay" data-day="04/18/2024" class="day">18</td>
                                                                    <td data-action="selectDay" data-day="04/19/2024" class="day">19</td>
                                                                    <td data-action="selectDay" data-day="04/20/2024" class="day weekend">20</td>
                                                                </tr>
                                                                <tr>
                                                                    <td data-action="selectDay" data-day="04/21/2024" class="day weekend">21</td>
                                                                    <td data-action="selectDay" data-day="04/22/2024" class="day">22</td>
                                                                    <td data-action="selectDay" data-day="04/23/2024" class="day">23</td>
                                                                    <td data-action="selectDay" data-day="04/24/2024" class="day">24</td>
                                                                    <td data-action="selectDay" data-day="04/25/2024" class="day">25</td>
                                                                    <td data-action="selectDay" data-day="04/26/2024" class="day">26</td>
                                                                    <td data-action="selectDay" data-day="04/27/2024" class="day weekend">27</td>
                                                                </tr>
                                                                <tr>
                                                                    <td data-action="selectDay" data-day="04/28/2024" class="day weekend">28</td>
                                                                    <td data-action="selectDay" data-day="04/29/2024" class="day">29</td>
                                                                    <td data-action="selectDay" data-day="04/30/2024" class="day">30</td>
                                                                    <td data-action="selectDay" data-day="05/01/2024" class="day new">1</td>
                                                                    <td data-action="selectDay" data-day="05/02/2024" class="day new">2</td>
                                                                    <td data-action="selectDay" data-day="05/03/2024" class="day new">3</td>
                                                                    <td data-action="selectDay" data-day="05/04/2024" class="day new weekend">4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td data-action="selectDay" data-day="05/05/2024" class="day new weekend">5</td>
                                                                    <td data-action="selectDay" data-day="05/06/2024" class="day new">6</td>
                                                                    <td data-action="selectDay" data-day="05/07/2024" class="day new">7</td>
                                                                    <td data-action="selectDay" data-day="05/08/2024" class="day new">8</td>
                                                                    <td data-action="selectDay" data-day="05/09/2024" class="day new">9</td>
                                                                    <td data-action="selectDay" data-day="05/10/2024" class="day new">10</td>
                                                                    <td data-action="selectDay" data-day="05/11/2024" class="day new weekend">11</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="datepicker-months" style="display: none;">
                                                        <table class="table-condensed">
                                                            <thead>
                                                                <tr>
                                                                    <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th>
                                                                    <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2024</th>
                                                                    <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month active">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="datepicker-years" style="display: none;">
                                                        <table class="table-condensed">
                                                            <thead>
                                                                <tr>
                                                                    <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th>
                                                                    <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th>
                                                                    <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year active">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="datepicker-decades" style="display: none;">
                                                        <table class="table-condensed">
                                                            <thead>
                                                                <tr>
                                                                    <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th>
                                                                    <th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th>
                                                                    <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="picker-switch accordion-toggle"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
        </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>created</b> @rismahdyh_
        </div>
        <strong>Copyright &copy; 2024 <a href="#"> - Rias Pengantin Suci</a>.</strong>
    </footer>

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?= base_url('assets/admin/'); ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/admin/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('assets/admin/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/admin/'); ?>dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="<?= base_url('assets/admin/'); ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>plugins/raphael/raphael.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url('assets/admin/'); ?>plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets/admin/'); ?>dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url('assets/admin/'); ?>dist/js/pages/dashboard2.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>dist/js/pages/dashboard.js"></script>
</body>

</html>