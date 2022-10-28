<?php

include "../../../../db/koneksi.php";
session_start();
if ($_SESSION['admin'] == "") {
    header("location:../../../login/login.php?login_dulu");
} else {
    if (isset($_GET['id'])) {


        $id = $_GET['id'];

        $ceknama = mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM tb_carousel WHERE id_carousel='$id'"));
        $namagambar = $ceknama['gambar'];

        unlink('../../../public/img/gambar_carousel/' . $namagambar);
        $sql = mysqli_query($conect, "DELETE FROM tb_carousel WHERE id_carousel='$id'");

        if ($sql) {
            echo "<script>alert('hapus berhasil');document.location='../carousel.php'</script>";
        } else {
            echo "<script>alert('hapus gagal silahkan coba lagi');document.location='../carousel.php'</script>";
        }
    }
}
