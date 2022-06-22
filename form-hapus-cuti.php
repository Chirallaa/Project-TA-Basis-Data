<?php

include("config.php");

if( isset($_GET['id_cuti']) ){

    // ambil id dari query string
    $cuti = $_GET['id_cuti'];

    // buat query hapus
    $sql = "DELETE FROM cuti WHERE id_cuti=$cuti";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-cuti.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>