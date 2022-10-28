<div class="row">
    <?php
    include "db/koneksi.php";

    $mediasql = mysqli_query($conect, "SELECT * FROM tb_sosial_media");
    $media = mysqli_fetch_assoc($mediasql);
    $hargasql = mysqli_query($conect, "SELECT * FROM tb_paket");
    while ($harga = mysqli_fetch_assoc($hargasql)) :
    ?>
        <div class="col-lg-4 col-12 mb-5 mb-md-5 mb-sm-5">
            <div class="card rounded-5 border border-4 border-primary" style="box-shadow: -8px -8px 8px  rgba(0,0,0,0.5);">
                <div class="card-header bg-primary rounded-bottom rounded-4 text-light text-center fs-3">
                    <?= $harga['judul'] ?>
                </div>
                <div class="card-body">
                    <h3></h3>
                    <h3 class="card-title">Mulai dari</h3>
                    <h3 class="card-title mb-4">Rp <?= $harga['harga'] ?> <span class="fs-6 opacity-50">/tahun</span></h3>
                    <a href="whatsapp://send?text=Hallo WANTeknologi Saya Ingin Memesan <?= $harga['judul']; ?>&phone=+62<?= substr($media['no_whatsapp'], 1, 15); ?>" class="btn btn-outline-primary w-100 mb-4">Order Sekarang</a>
                    <p class="card-text"><?= $harga['deskripsi'] ?></p>

                </div>

            </div>
        </div>
    <?php endwhile; ?>

</div>