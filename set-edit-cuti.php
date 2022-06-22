<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['set'])){

    // ambil data dari formulir
    $cuti = $_POST['id_cuti'];
    $tgl = $_POST['tgl_cuti'];

    // buat query update
    $sql = "UPDATE cuti SET tgl_cuti='$tgl' WHERE id_cuti=$cuti";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-cuti.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>