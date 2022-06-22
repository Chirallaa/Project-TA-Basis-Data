<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['set'])){

    // ambil data dari formulir
    $id     = $_POST['id_karyawan'];
    $jadwal = $_POST['id_jadwal'];
    $nama   = $_POST['nama_karyawan'];
    $umur   = $_POST['umur_karyawan'];
    $notelp = $_POST['notelp_karyawan'];
    $jk     = $_POST['jenis_kelamin'];

    // buat query update
    $sql = "UPDATE karyawan SET id_jadwal='$jadwal', nama_karyawan='$nama', umur_karyawan='$umur', jenis_kelamin='$jk' WHERE id_karyawan=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {

        header('Location: list-karyawan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}

?>