
<div class="row d-flex">
    <?php 
    include "db/koneksi.php";

    $layanansql = mysqli_query($conect,"SELECT * FROM tb_layanan");
    while($layanan = mysqli_fetch_assoc($layanansql)):
    ?>
    <div class="col-lg-4 col-12 col-md-6 col-sm-5 justify-content-center " style="margin-bottom: 100px;">
        <div class="card bg-transparent border-0 ms-lg-4  ful" style="width: 18rem; max-height: 200px; min-height: 200px;">
            <div class="w-100 ">
                <img src="admin/public/img/layanan/<?= $layanan['gambar']; ?>" class="w-25" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $layanan['judul'] ?></h5>
                <p class="card-text"><?= $layanan['isi'] ?></p>
            </div>
        </div>
    </div>
    <?php endwhile; ?>

</div>