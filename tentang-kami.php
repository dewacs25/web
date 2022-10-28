<?php 
include "db/koneksi.php";
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
                        <a class="nav-link active" href="tentang-kami.php">Tentang Kami</a>
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
    <div class="container-fluid p-5 text-center text-white" style="background-image: url('public/img/bg.png');">
        <div class="container">
            <h2 class="fw-bold">Tentang Kami</h2>
            <h4>WAN Teknologi merupakan IT Consultan Profesional yang memfocuskan pada pelayanan Jasa pembuatan website, Aplikasi webbased, Aplikasi mobile apps android dan ios, Search Engine Optimization (SEO), Digital Marketing, Maintenance, Training, Desain dan Multimedia.</h4>
        </div>
    </div>

    <?php 
    include "pages/tentang.php";
    ?>

    <div class="container-fluid p-5 text-center mt-5 mb-5">
        <div class="container">
            <h2 class="fw-bold">Optimalkan Seluruh Potensi Online Pada Bisnis Anda Sekarang!</h2>
            <p>Jika Anda ingin bisa bersaing dengan bisnis-bisnis besar diluar sana, Anda harus memaksimalkan semua sumber daya yang ada. Kami hadir di sini untuk membantu Anda memaksimalkannya!</p>
            <a href="harga-website.php#harga" class="btn btn-warning rounded-4">Cari Paket Terbaik Anda di sini!</a>
        </div>
    </div>


    <?php


    include "pages/footer.php";
    ?>



    <script src="plugins/bootstrap-5/js/bootstrap.bundle.min.js"></script>
</body>

</html>