<?php 
include "db/koneksi.php";
$mediasql = mysqli_query($conect,"SELECT * FROM tb_sosial_media");
$media = mysqli_fetch_assoc($mediasql);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="plugins/bootstrap-5/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
</head>

<body>
    <?php include "pages/media.php"; ?>
    <nav class="navbar navbar-expand-lg bg-light navbar-dark bg-dark">
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.php"><img src="public/img/logo-pt.png" alt="" width="240px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-lg-start text-center bgg" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item me-lg-4">
                        <a class="nav-link hover" href="tentang-kami.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link hover " href="harga-website.php">Harga Website</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link hover " href="portofolio.php">Portofolio</a>
                    </li>
                    <!-- <li class="nav-item me-lg-4">
                        <a class="nav-link hover ">Mitra</a>
                    </li> -->
                    <li class="nav-item me-lg-4 hover2">
                        <a href="whatsapp://send?text=Hallo WANTeknologi&phone=+62<?= substr($media['no_whatsapp'], 1, 15); ?>" class="b nav-link"><span class="p-3">Kirim Saya Penawaran</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class=" float-start p-3 w-50 kiri ms-lg-5" style="margin-top: 75px;">
            <h2 class="mt-3 z-index">Web & Application Mobile Apps Profesional</h2>
            <h4 class="mt-3">Wanteknologi Internasional</h4>
            <span class="mt-3">WAN Teknologi merupakan IT Consultan Profesional yang memfocuskan pada pelayanan Jasa pembuatan website, Aplikasi webbased, Aplikasi mobile apps android dan ios, Search Engine Optimization (SEO), Digital Marketing, Maintenance, Training, Desain dan Multimedia.</span>
            <br>
            <a class="btn btn-success rounded-5 mt-4" href=""><i class="fa-brands fa-whatsapp"></i>&nbsp;Pesan Website</a>
        </div>
        <div class=" float-end p-3 mt-5 me-5 kanan ">
            <img src="public/img/gambar-programmer.png" alt="" class="w-75" style="max-width: 450px;">
        </div>
    </div>

    <div class="container text-center " style="margin-top: 550px;">
        <h2>Dapatkan layanan terbaik WANTeknologi</h2>
        <p class="mb-5" style="margin-bottom: 200px;">WANTeknologi Internasional melayani semua kebutuhan jasa dibidang IT dengan disesuaikan dengan kebutuhan bisnis anda. kami siap presentasi dan berdiskusi. </p>
        <?php 
        include "pages/layanan.php";
        ?>
    </div>

    <div class="container-fluid w-100 d-flex black text-light" style="background-image: url('public/img/bg.png');">
        <div class=" float-start p-3 w-50 kiri ms-lg-5" ">
            <h2 class=" mt-3 z-index">Ingin tahu bagaimana Kami membantu Anda?</h2>
            <br>
            <a class="btn btn-success rounded-5 " href="whatsapp://send?text=&phone=+62<?= substr($media['no_whatsapp'],1,15); ?>"><i class="fa-brands fa-whatsapp"></i>&nbsp;Konsultasi Sekarang</a>
        </div>
        <div class=" float-end p-3 kanan " style="min-width: 100px; margin-left: 130px;">
            <img src="public/img/mrrobot2.png" alt="" style="max-width: 300px;"">
        </div>
    </div>


    <div class=" container mt-5">
            <h2 class="mb-5 text-center fw-bold">Harga Paket Jasa Pembuatan Web</h2>
            <?php
            include "pages/harga-web.php";
            ?>
        </div>

        <div class="container-md mt-5 mb-5">
            <h2 class="mb-2 text-center">Apa yang anda dapatkan dari WANTeknologi</h2>
            <p class="text-center mb-5">WANTeknologi menawarkan layanan jasa bikin website dengan harga murah serta desain yang profesional. Kami akan mewujudkan impian Anda untuk memiliki website terbaik serta meningkatkan bisnis Anda.</p>


            <?php include "pages/tentang.php" ?>

        </div>

        <div class="container-fluid mt-5 mb-5 p-5 text-center">
            <h2 class="text-center ">Portofolio Terbaik Untuk Website Bisnis Anda</h2>
            <?php 
            include "pages/web_hasil.php";
            ?>
            <div class="justify-content-center d-flex">
                <a href="harga-website.php#harga" class="btn btn-success mt-4">Pesan Website Sekarang</a>
            </div>
        </div>


        <div class="container-fluid p-5" style="background-image: url('public/img/bg.png');">
            <div class="container">
                <h2 class="text-center text-white">Bagaimana Kami Bisa Membantu Anda</h2>
                <div class="ms-lg-5">
                    <?php
                    include "db/koneksi.php";


                    $ir = rand();


                    if (isset($_POST['input'])) {
                        $nama = $_POST['nama'];
                        $email = $_POST['email'];
                        $telepon = $_POST['telepon'];
                        $keterangan = $_POST['keterangan'];



                        $sql = mysqli_query($conect, "INSERT INTO `tb_bantuan`(`id_bantuan`, `nama`, `email`, `telepon`, `keterangan`) VALUES ('$ir','$nama','$email','$telepon','$keterangan')");
                        if ($sql) {
                            echo "<script>alert('Berhasil Terkirim');document.location=''</script>";
                        } else {
                            echo "<script>alert('input gagal silahkan coba lagi');</script>";
                        }
                    }
                    ?>
                    <form action="" method="POST">

                        <div class="row">
                            <div class="col-lg-2 col-12 mb-md-3 mb-sm-3 mb-3 mt-lg-3">
                                <input type="text" class="form-control" placeholder="Nama" name="nama">
                            </div>
                            <div class="col-lg-2 col-12 mb-md-3 mb-sm-3 mb-3 mt-lg-3">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="col-lg-2 col-12 mb-md-3 mb-sm-3 mb-3 mt-lg-3">
                                <input type="text" class="form-control" placeholder="Telepon" name="telepon">
                            </div>
                            <div class="col-lg-3 col-12 mb-md-3 mb-sm-3 mb-3 mt-lg-3">
                                <input type="text" class="form-control" placeholder="Kebutuhan Website" name="keterangan">
                            </div>
                            <div class="col-lg-2 col-12 mb-md-3 mb-sm-3 mb-3 mt-lg-3">
                                <button type="submit" name="input" class="btn btn-success"><span style="padding-left: 75px; padding-right: 75px;">Kirim</span></button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div class="container-sm mt-5 mb-5">
            <h2 class="text-center mb-5">FAQ tentang Jasa Membuat Website di WANTeknologi</h2>
            <div class="d-flex justify-content-center">
                <div class="accordion accordion-flush w-75" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed bg-info bg-opacity-25 mb-3 border-0 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Apa itu Website?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Website merupakan himpunan halaman yang membantu Anda untuk promosi secara online. Dapat membantu Anda untuk memasarkan produk, jasa ataupun brand Anda dengan lebih mudah.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed bg-info bg-opacity-25 mb-3 border-0 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Mengapa harus memiliki website?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Anda harus memiliki website agar calon pelanggan Anda dapat mengakses informasi berupa produk dan layanan yang Anda setiap saat. Selama website anda sudah tanyang calon pelanggan Anda dapat mengakses website Anda selama 24 jam dapat di akses dari mana saja.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed bg-info bg-opacity-25 mb-3 border-0 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Jenis website apa saja yang WANTeknologi kerjakan?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Kami WANTeknologi melayani jasa pembuatan website perusahaan / company profile, jasa website toko online / online shop, dan jasa pembuatan landingpage. Bila Anda sedang membutuhkan untuk jasa pembuatan website jenis lainnya, Anda bisa konsultasi terlebih dahulu dengan Kami. Tim kami dengan senang hati akan membantu Anda.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed bg-info bg-opacity-25 mb-3 border-0 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#h" aria-expanded="false" aria-controls="h">
                                Jenis website apa saja yang WANTeknologi kerjakan?
                            </button>
                        </h2>
                        <div id="h" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Kami WANTeknologi melayani jasa pembuatan website perusahaan / company profile, jasa website toko online / online shop, dan jasa pembuatan landingpage. Bila Anda sedang membutuhkan untuk jasa pembuatan website jenis lainnya, Anda bisa konsultasi terlebih dahulu dengan Kami. Tim kami dengan senang hati akan membantu Anda.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include "pages/footer.php"; ?>


        <script src="plugins/bootstrap-5/js/bootstrap.bundle.min.js"></script>
</body>

</html>