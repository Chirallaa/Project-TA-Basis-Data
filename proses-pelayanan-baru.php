<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['insert'])){

    // ambil data dari formulir
    $layanan = $_POST['id_pelayanan'];
    $jenis = $_POST['nama_pelayanan'];
    $tarif = $_POST['tarif_pelayanan'];
    $tanggal_pelayanan = $_POST['tanggal_pelayanan'];

    // buat query
    $sql = "INSERT INTO pelayanan (id_pelayanan, nama_pelayanan, tarif_pelayanan, tanggal_pelayanan) VALUE ('$layanan', '$jenis', '$tarif', '$tanggal_pelayanan')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list-pelayanan.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: list-pelayanan.php');
    }


} else {
    die("Akses dilarang...");
}

?>