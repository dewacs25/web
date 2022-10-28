<?php
include "../../../db/koneksi.php";
session_start();

if ($_SESSION['admin'] == "") {
  header("location:../../login/login.php?login_dulu");
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Fixed Footer Layout</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../../plugins/bootstrap-5/css/bootstrap.min.css">
</head>

<body class="hold-transition sidebar-mini layout-footer-fixed">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../index3.html" class="nav-link">Home</a>
        </li>

      </ul>



      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

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
      <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <?php
        $idAd = $_SESSION['idadmin'];
        // var_dump($idAd);
        $ad = mysqli_query($conect, "SELECT * FROM tb_admin WHERE id_admin='$idAd'");
        $admin = mysqli_fetch_assoc($ad);
        ?>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../public/img/profile_admin/profile/<?php if (empty($admin['gambar_ad'])) {
                                                                echo "../no.jpg";
                                                              } else {
                                                                echo $admin['gambar_ad'];
                                                              } ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $admin['nama_lengkap'] ?></a>
          </div>
        </div>

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

            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Layout Options
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right"></span>
                </p>
              </a>
              <ul class="nav nav-treeview">


                <li class="nav-item">
                  <a href="carousel.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Carousel</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="partner.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Partner</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="crud_footer/index.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Footer</p>
                  </a>
                </li>


              </ul>
            </li>

            <li class="nav-item has-treeview ">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Tables
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="../tables/news.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Berita</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../tables/jurusan.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jurusan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../tables/crud_ekskul/index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ekskul</p>
                  </a>
                </li>

                <li class="nav-item has-treeview">
                  <a href="../tables/guru/guru.php" class="nav-link">
                    <i class="fas fa-users"></i>
                    <p>
                      Guru
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../tables/guru/jabatan.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Jabatan</p>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a href="../guru/guru.php" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Guru</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-header">EXAMPLES</li>

            <li class="nav-item">
              <a href="gallery.php" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Gallery
                </p>
              </a>
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
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Partner</h1>
            </div>
            <div class="col-sm-6">

            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->

              <!-- /.card -->

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">data</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>

                  </div>
                </div>

                <div class="card-body">
                  <a href="crud_partner/tambah.php" class="btn btn-primary mb-2 btn-sm w-100">Tambah</a>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>

                        <th>Gambar</th>
                        <th>action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $carousel = mysqli_query($conect, "SELECT * FROM tb_partner ORDER BY id_partner DESC");
                      while ($car = mysqli_fetch_assoc($carousel)) {
                      ?>
                        <tr>

                          <td><img src="../../public/img/logo_partner/<?= $car['gambar'] ?>" style="max-width: 60px;" alt=""></td>
                          <td>
                            <a href="crud_partner/edit.php?id=<?= $car['id_partner']; ?>" class="btn btn-warning badge">Edit</a>
                            <a href="crud_partner/hapus.php?id=<?= $car['id_partner']; ?>"" onclick=" return confirm('yakin ingin menghapus')" class="btn btn-danger badge">Hapus</a>
                            <!-- <button type="button" class="btn btn-danger badge" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              Hapus
                            </button>

                            
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Yakin Ingin Menghapus</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    ...
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <a href="crud_partner/hapus.php?id=<?= $car['id_partner']; ?>" class="btn btn-primary">Yakin</a>
                                  </div>
                                </div>
                              </div>
                            </div> -->
                          </td>
                        </tr>
                      <?php } ?>

                    </tbody>

                  </table>
                </div>
                <!-- /.card-body -->


                <div class="card-footer">
                  Footer
                </div>
                <!-- /.card-footer-->
              </div>
            </div>
          </div>
        </div>
        
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

  
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap-5/js/bootstrap.bundle.min.js"></script>

  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>

  <script src="../../plugins/datatables/jquery.dataTables.js"></script>
  <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
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