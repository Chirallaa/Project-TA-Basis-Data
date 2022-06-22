<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['set'])){

    // ambil data dari formulir
    $layanan = $_POST['id_pelayanan'];
    $jenis   = $_POST['nama_pelayanan'];
    $tarif = $_POST['tarif_pelayanan'];
    $tanggal_pelayanan = $_POST['tanggal_pelayanan'];

    // buat query update
    $sql = "UPDATE pelayanan SET nama_pelayanan='$jenis', tarif_pelayanan='$tarif', tanggal_pelayanan='$tanggal_pelayanan' WHERE id_pelayanan=$layanan";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-pelayanan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>