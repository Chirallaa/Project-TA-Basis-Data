<?php

include("config.php");

if( isset($_GET['id_pelayanan']) ){

    // ambil id dari query string
    $layanan = $_GET['id_pelayanan'];

    // buat query hapus
    $sql = "DELETE FROM pelayanan WHERE id_pelayanan=$layanan";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-pelayanan.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>