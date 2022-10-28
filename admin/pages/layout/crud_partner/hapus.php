<?php

include "../../../../db/koneksi.php";
session_start();
if ($_SESSION['admin'] == "") {
    header("location:../../../login/login.php?login_dulu");
} else {
    if (isset($_GET['id'])) {


        $id = $_GET['id'];

        $ceknama = mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM tb_partner WHERE id_partner='$id'"));
        $namagambar = $ceknama['gambar'];

        unlink('../../../public/img/logo_partner/' . $namagambar);
        $sql = mysqli_query($conect, "DELETE FROM tb_partner WHERE id_partner='$id'");

        if ($sql) {
            echo "<script>alert('hapus berhasil');document.location='../partner.php'</script>";
        } else {
            echo "<script>alert('hapus gagal silahkan coba lagi');document.location='../partner.php'</script>";
        }
    }
}
