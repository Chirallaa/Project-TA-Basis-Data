<?php

include("config.php");

if( isset($_GET['id_jadwal']) ){

    // ambil id dari query string
    $jadwal = $_GET['id_jadwal'];

    // buat query hapus
    $sql = "DELETE FROM jadwal_kerja WHERE id_jadwal=$jadwal";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-jadwal-kerja.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>