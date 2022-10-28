<?php 
include "db/koneksi.php";
$mediasql = mysqli_query($conect, "SELECT * FROM tb_sosial_media");
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
                        <a class="nav-link active " href="harga-website.php">Harga Website</a>
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
            <h2 class="fw-bold">Harga Website Terbaik Untuk Bisnis </h2>
            <h4>Biaya Desain Website dan Pembuatan Web Bisnis Terjangkau 2022 </h4>
        </div>
    </div>

    <div class="container text-center mt-5 mb-5">
        <h2 class="text-warning">Mengapa Memilih Kami?</h2>
        <p class="mb-5" style="margin-bottom: 200px;">Biaya bikin website WANTeknologi sangat terjangkau dan mempunyai banyak pilihan fasilitas yang akan Anda dapatkan. Kami melayani pembuatan website untuk menunjang kesuksesan bisnis Anda!</p>
        <?php 
        include "pages/layanan.php";
        ?>
    </div>

    <div class="container mt-5 mb-5" id="harga">
        <h2 class="text-warning text-center mb-5">Paket harga website seperti apa yang Anda butuhkan?</h2>
        <?php
        include "pages/harga-web.php";
        ?>
    </div>

    <div class="container-fluid w-100 d-flex black text-light" style="background-image: url('public/img/bg.png');">
        <div class=" float-start p-3 w-50 kiri ms-lg-5 mt-3">
            <h4>Ingin tahu bagaimana Kami membantu Anda?</h4>
            <h1 class="fw-bold mt-3 z-index">Konsultasikan harga pembuatan website dengan kami, Gratis!</h1>
            <br>
            <a class="btn btn-success rounded-5 p-3" href="whatsapp://send?text=Hallo WANTeknologi&phone=+62<?= substr($media['no_whatsapp'], 1, 15); ?>"><i class="fa-brands fa-whatsapp"></i>&nbsp;Konsultasi Geratis</a>
        </div>
        <div class=" float-end p-3 kanan " style="min-width: 100px; margin-left: 130px;">
            <img src="public/img/ccs.png" alt="" width="400px">
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6 col-12 mb-md-5 mb-sm-5 mt-lg-5 mb-5">
                <h1>FAQ: Seputar Biaya Pembuatan Website</h1>
                <p>Punya Pertanyaan Lainnya ? </p>
                <a class="btn btn-success rounded-5 p-3" href="whatsapp://send?text=Hallo WANTeknologi&phone=+62<?= substr($media['no_whatsapp'], 1, 15); ?>"><i class="fa-brands fa-whatsapp"></i>&nbsp;Hubungi Kami</a>
            </div>
            <div class="col-lg-6 col-12 mb-md-5 mb-sm-5">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Apakah Paket Website Termasuk dengan Hosting?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Sudah, Paket website sudah termasuk Shared Hosting dari Niagahoster</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Saya sudah punya hosting dan domain selain dari WANTeknologi. Apakah WANTeknologi tetap bisa membuatkan website untuk saya ?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Bisa! Kami bisa bantu membuatkan website meskipun Anda sudah memiliki hosting dan domain di layanan selain WANTeknologi. Hanya saja, jika Anda ingin kami bantu kelola website Anda pada tahun berikutnya, maka Anda harus tetap melakukan request pengelolaan website secara terpisah di layanan kami.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Berapa Biaya Jasa Layanan Website Toko Online yang Harus Saya Bayarkan?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Untuk Biaya Jasa Pembuatan Website Toko Online mulai dari Rp. 2,5 juta</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="h4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c4" aria-expanded="false" aria-controls="c4">
                            Berapa Biaya Jasa Layanan Website Company Profile yang Harus Saya Bayarkan?
                            </button>
                        </h2>
                        <div id="c4" class="accordion-collapse collapse" aria-labelledby="h4" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Untuk Biaya Jasa Pembuat Website Company Profile mulai dari Rp. 1,5 juta</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="h5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c5" aria-expanded="false" aria-controls="c5">
                            Apakah saya bisa mengedit website saya nantinya ? Kalau saya kesulitan, apakah saya akan dibantu?
                            </button>
                        </h2>
                        <div id="c5" class="accordion-collapse collapse" aria-labelledby="h5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Setelah website Anda jadi, kami akan berikan akses websitenya secara penuh kepada Anda! Jika Anda sudah mempunyai akses namun masih bingung cara mengelolaanya, kami akan senantiasa membantu Anda dalam mengelola website Anda.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="h6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c6" aria-expanded="false" aria-controls="c6">
                            Apakah website saya bisa diakses di mana saja, kapan saja, dan tidak hanya terbatas lewat komputer saja?
                            </button>
                        </h2>
                        <div id="c6" class="accordion-collapse collapse" aria-labelledby="h6" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Tentu saja bisa! Kami memilki tim yang profesional dan berpengalaman dalam membuat website yang responsif, sehingga jika Anda ingin membuat website yang bisa diakses melalui Smartphone, Tablet, dan Komputer, kami adalah ahlinya!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php


    include "pages/footer.php";
    ?>



    <script src="plugins/bootstrap-5/js/bootstrap.bundle.min.js"></script>
</body>

</html>