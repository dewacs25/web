<?php
// error_reporting(0);
session_start();

if ($_SESSION['admin'] == "") {
  header("location:../../login/login.php?login_dulu");
}

include "../../../db/koneksi.php";

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../index.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->

        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
       

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v1</p>
                  </a>
                </li>

              </ul>
            </li>

            <!-- <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Layout Options
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right"></span>
                </p>
              </a>
              <ul class="nav nav-treeview">


                <li class="nav-item">
                  <a href="../layout/carousel.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Carousel</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../layout/partner.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Partner</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../layout/footer.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Footer</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../layout/crud_profile_sekolah/index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sejarah Singkat Sekolah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="..//layout/crud_profile_sekolah/index2.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Visi Misi Sekolah</p>
                  </a>
                </li>

              </ul>
            </li> -->

            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Tables
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="layanan.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Layanan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="crud_sosial_media/index.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sosial Media</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="web_hasil.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Web Hasil</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="bantuan.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bantuan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="tentang_kami.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tentang Kami</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="paket.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Paket</p>
                  </a>
                </li>
                
              </ul>
            </li>
           
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
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Paket</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Paket</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="crud_paket/tambah.php" class="btn btn-primary mb-2 btn-sm w-100">Tambah</a>
                <div class="table-responsive" style="min-height: 400px;">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Judul</th>
                      <th>Harga</th>
                      <th>deskripsi</th>
                      <th>action</th>

                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $sql = mysqli_query($conect, "SELECT * FROM `tb_paket`");

                    while ($row = mysqli_fetch_array($sql)) { ?>

                      <tr>
                        <td><?= $row['judul']; ?></td>
                        <td><?= $row['harga']; ?></td>
                        <td><?= $row['deskripsi'] ?><td>
                          <a href="crud_paket/edit.php?id=<?= $row['id_paket']; ?>" class="btn btn-warning badge">Edit</a>
                          <a href="crud_paket/hapus.php?id=<?= $row['id_paket']; ?>" onclick="return confirm('yakin ingin menghapus')" class="btn btn-danger badge">Hapus</a>
                        </td>
                      </tr>
                    <?php } ?>


                  </tbody>

                </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.0
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="../../plugins/datatables/jquery.dataTables.js"></script>
  <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- page script -->
  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
</body>

</html>
