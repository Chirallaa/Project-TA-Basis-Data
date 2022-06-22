<?php

include("config.php");

if( isset($_GET['id_karyawan']) ){

    // ambil id dari query string
    $id = $_GET['id_karyawan'];

    // buat query hapus
    $sql = "DELETE FROM karyawan WHERE id_karyawan=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-karyawan.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>