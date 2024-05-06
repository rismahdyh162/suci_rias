<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SuciRias | Data Pengguna</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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
      <a href="../index2.html" class="brand-link">
        <img src="..\..\admin\dist\img\logo\logo black.svg" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-bold">Suci Rias</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="..\..\admin\dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
              <a href="../index2.html" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-header">EXAMPLES</li>
            <li class="nav-item">
              <a href="../../admin/pages/gallery.html" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Gallery
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../../admin/pages\examples\package.html" class="nav-link">
                <i class="nav-icon fa fa-shopping-bag"></i>
                <p>
                  Package
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../../admin/pages\pengguna.html" class="nav-link">
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
                  <a href="../../admin/pages\data_pesanan.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kelola Pesanan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../admin/pages\status_pembayaran.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Status Pembayaran</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../admin/pages\ulasan_pelanggan.html" class="nav-link">
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
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2 d-block">
            <div class="col-sm-6">
              <h1>Kelola Data Pengguna</h1>
            </div>
            <div class="col-sm-2 mt-2">
              <a href="" class="btn btn-primary btn-sm h-50">
                <i class="fas fa fa-plus px-2"></i><b>Tambah</b>
              </a>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Pengguna</h3>


          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects col-12">
              <thead>
                <tr>
                  <th style="width: 20%">
                    ID
                  </th>
                  <th style="width: 40%">
                    Username
                  </th>
                  <th style="width: 40%">
                    Foto
                  </th>
                  <th style="width: 40%">
                    Email
                  </th>
                  <th style="width: 10%; padding: 5px;">
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="col-12 isi-gallery">
                  <td>
                    0001
                  </td>
                  <td>
                    <a>
                      @risma
                    </a>
                    <br />
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="..\..\admin\dist\img\avatar2.png"><img alt="Avatar" class="table-avatar" src="..\..\admin\dist\img\avatar2.png"></a>
                      </li>
                    </ul>
                  </td>
                  <td>
                    <a>
                      rismahdyh@gmail.com
                    </a>
                    <br />
                  </td>
                  <td class="project-actions text-right d-flex d-flex d-flex">
                    <a class="btn btn-info btn-sm w-75" href="#">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>
                    <a class="btn btn-danger btn-sm w-75" href="#">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  </td>
                </tr>
                <tr class="col-12 isi-gallery">
                  <td>
                    0002
                  </td>
                  <td>
                    <a>
                      @vikiir
                    </a>
                    <br />
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="..\..\admin\dist\img\avatar2.png"><img alt="Avatar" class="table-avatar" src="..\..\admin\dist\img\avatar2.png"></a>
                      </li>
                    </ul>
                  </td>
                  <td>
                    <a>
                      vikii13@gmail.com
                    </a>
                    <br />
                  </td>
                  <td class="project-actions text-right d-flex d-flex">
                    <a class="btn btn-info btn-sm w-75" href="#">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>
                    <a class="btn btn-danger btn-sm w-75" href="#">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  </td>
                </tr>
                <tr class="col-12 isi-gallery">
                  <td>
                    0003
                  </td>
                  <td>
                    <a>
                      @maulana
                    </a>
                    <br />
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="..\..\admin\dist\img\avatar2.png"><img alt="Avatar" class="table-avatar" src="..\..\admin\dist\img\avatar2.png"></a>
                      </li>
                    </ul>
                  </td>
                  <td>
                    <a>
                      maulanaaaa55@gmail.com
                    </a>
                    <br />
                  </td>
                  <td class="project-actions text-right d-flex">
                    <a class="btn btn-info btn-sm w-75" href="#">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>
                    <a class="btn btn-danger btn-sm w-75" href="#">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  </td>
                </tr>


                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>created</b> @rismahdyh_
      </div>
      <strong>Copyright &copy; 2024 <a href="#"> - Rias Pengantin Suci</a>.</strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Ekko Lightbox -->
  <script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- Filterizr-->
  <script src="../plugins/filterizr/jquery.filterizr.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true
        });
      });

      $('.filter-container').filterizr({
        gutterPixels: 3
      });
      $('.btn[data-filter]').on('click', function() {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
      });
    })
  </script>
</body>

</html>