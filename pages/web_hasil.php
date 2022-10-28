<div class="row mt-5 mb-5">
    <?php 
    include "db/koneksi.php";
    $mediasql = mysqli_query($conect, "SELECT * FROM tb_sosial_media");
    $media = mysqli_fetch_assoc($mediasql);
    $web_hasil = mysqli_query($conect, "SELECT * FROM tb_web_hasil");
    while ($web = mysqli_fetch_assoc($web_hasil)) :
    ?>
    <div class="col-lg-3 col-md-6 col-12  mb-4 ">
        <a href="<?= $web['link']; ?>" class="nav-link">
            <div class="card hover-w">
                <img src="admin/public/img/web_hasil/<?= $web['gambar'] ?>" class="card-img" alt="...">
                <div class="card-img-overlay mas mt-5 mb-5">
                    <h5 class="card-title">Lihat Website</h5>
                </div>

            </div>
        </a>
    </div>
    <?php endwhile; ?>
</div>