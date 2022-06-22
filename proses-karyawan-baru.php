<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['insert'])){

    // ambil data dari formulir
    $jadwal = $_POST['id_jadwal'];
    $nama = $_POST['nama_karyawan'];
    $umur = $_POST['umur_karyawan'];
    $notelp = $_POST['notelp_karyawan'];
    $jk = $_POST['jenis_kelamin'];
    
    // buat query
    $sql = "INSERT INTO karyawan (id_jadwal, nama_karyawan, umur_karyawan, notelp_karyawan, jenis_kelamin) VALUE ('$jadwal', '$nama', '$umur', '$notelp', '$jk')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
     
        header('Location: list-karyawan.php');
    } else {
       
        header('Location: list-karyawan.php');
    }


} else {
    die("Akses dilarang...");
}

?>