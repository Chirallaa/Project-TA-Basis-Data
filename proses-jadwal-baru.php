<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['insert'])){

    // ambil data dari formulir
    $jadwal = $_POST['id_jadwal'];
    $waktu = $_POST['waktu_kerja'];
    $tanggal = $_POST['tanggal_kerja'];
 
    // buat query
    $sql = "INSERT INTO jadwal_kerja (id_jadwal, waktu_kerja, tanggal_kerja) VALUE ('$jadwal', '$waktu', '$tanggal')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list-jadwal-kerja.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: list-jadwal-kerja.php');
    }


} else {
    die("Akses dilarang...");
}

?>