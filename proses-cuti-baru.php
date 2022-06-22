<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['insert'])){

    // ambil data dari formulir
    $cuti = $_POST['id_cuti'];
    $tgl = $_POST['tgl_cuti'];
 
    // buat query
    $sql = "INSERT INTO cuti (id_cuti, tgl_cuti) VALUE ('$cuti', '$tgl')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list-cuti.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: list-cuti.php');
    }


} else {
    die("Akses dilarang...");
}

?>