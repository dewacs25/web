<div class="container-md mt-5 mb-5">
<?php 
    include "db/koneksi.php";

    $tentangsql = mysqli_query($conect,"SELECT * FROM tb_tentang_kami");
    while($tentang = mysqli_fetch_assoc($tentangsql)):
    ?>

    <div class="card mb-3 border-0 mb-5">
        <div class="row g-0">
            <div class="col-md-4 ms-lg-auto ms-auto me-auto mt-lg-auto mt-md-auto mb-md-auto" style="min-width: 20%; max-width: 20%;">
                <img src="admin/public/img/tentang_kami/<?= $tentang['gambar'] ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8 col-lg-7">
                <div class="card-body ms-lg-5 mt-lg-5 mb-lg-5">
                    <h3 class="card-title">
                        <?= $tentang['judul'] ?>
                    </h3>
                    <p class="card-text"><?= $tentang['isi'] ?></p>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>


</div>