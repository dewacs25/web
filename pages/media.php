<?php 
    $mediasql = mysqli_query($conect, "SELECT * FROM tb_sosial_media");
    $media = mysqli_fetch_assoc($mediasql);
?>
<div class="hover-whatsapp">
    <a href="whatsapp://send?text=Hallo WANTeknologi&phone=+62<?= substr($media['no_whatsapp'], 1, 15); ?>" style="text-decoration: none; color: white;"><i class="fa-brands fa-whatsapp"></i></a>
</div>
<div class="hover-facebook">
    <a href="<?= $media['url_facebook'] ?>" style="text-decoration: none; color: white;"><i class="fa-brands fa-facebook"></i></a>
</div>
<div class="hover-instagram">
    <a href="<?= $media['url_instagram'] ?>" style="text-decoration: none; color: white;"><i class="fa-brands fa-instagram"></i></a>
</div>