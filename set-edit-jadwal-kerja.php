<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['set'])){

    // ambil data dari formulir
    $jadwal = $_POST['id_jadwal'];
    $waktu = $_POST['waktu_kerja'];
    $tanggal = $_POST['tanggal_kerja'];

    // buat query update
    $sql = "UPDATE jadwal_kerja SET waktu_kerja='$waktu', tanggal_kerja='$tanggal' WHERE id_jadwal=$jadwal";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-jadwal-kerja.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>