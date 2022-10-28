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
  <title>Admin | Gallery</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="../../plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="../../plugins/bootstrap-5/css/bootstrap.min.css">
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
          <a href="../index3.html" class="nav-link">Home</a>
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
      <a href="../index3.html" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

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
                  <a href="../index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v1</p>
                  </a>
                </li>

              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Layout Options
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">6</span>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="layout/fixed-footer.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fixed Footer</p>
                  </a>
                </li>

              </ul>
            </li>



            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Tables
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="tables/simple.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Simple Tables</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="tables/data.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>DataTables</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>jsGrid</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">EXAMPLES</li>

            <li class="nav-item">
              <a href="gallery.html" class="nav-link active">
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
              <h1>Gallery</h1>
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
              <div class="card card-primary">
                <div class="card-header">
                  <div class="card-title">
                    Galery
                  </div>
                </div>
                <div class="card-body">
                  <div>
                    
                    <div class="mb-2">
                      <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a>
                      <div class="float-right">
                        <select class="custom-select d-none" style="width: auto;" data-sortOrder>
                          <option value="index"> Sort by Position </option>
                          <option value="sortData"> Sort by Custom Data </option>
                        </select>
                        <div class="btn-group">
                          <a class="btn btn-default d-none" href="javascript:void(0)" data-sortAsc> Ascending </a>
                          <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                          <a href="crud_gallery/tambah.php" class="btn btn-primary text-light"> Add </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="filter-container p-0 row">
                      <?php 
                      $sql = mysqli_query($conect,"SELECT * FROM tb_gallery ORDER BY tgl DESC");
                      while ($row = mysqli_fetch_assoc($sql)) :
                      ?>
                      <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                        <a href="../../public/img/gallery/<?= $row['gambar'] ?>" data-toggle="lightbox" data-title="<?= $row['judul'] ?> ">
                          <img src="../../public/img/gallery/<?= $row['gambar'] ?>" class="img-fluid mb-2" alt="Gambar error" />
                          <a href="crud_gallery/edit.php?id=<?= $row['id_gallery']; ?>" class="btn btn-warning badge">Edit</a>
                            <a href="crud_gallery/hapus.php?id=<?= $row['id_gallery']; ?>"" onclick=" return confirm('yakin ingin menghapus')" class="btn btn-danger badge">Hapus</a>
                        </a>
                      </div>
                      <?php endwhile; ?>
                      
                    </div>
                  </div>

                </div>
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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery UI -->
  <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Ekko Lightbox -->
  <script src="../../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Filterizr-->
  <script src="../../plugins/filterizr/jquery.filterizr.min.js"></script>
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