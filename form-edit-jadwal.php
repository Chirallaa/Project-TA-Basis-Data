<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_jadwal']) ){
    header('Location: list-jadwal-kerja.php');
}

//ambil id dari query string
$jadwal = $_GET['id_jadwal'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM jadwal_kerja WHERE id_jadwal=$jadwal";
$query = mysqli_query($db, $sql);
$jadwal = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Data Jadwal Kerja</title>
    <style>
  input[type=text] {
  width: 10%;
  padding: 1px 2px;
  margin: 8px 0;
  box-sizing: border-box;
}

input[type=button], input[type=submit] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>

<body>
    <header>
        <h3>Form Edit Data Jadwal Kerja</h3>
    </header>

    <form action="set-edit-jadwal-kerja.php" method="POST">

        <fieldset>

        <input type="hidden" name="id_jadwal" value="<?php echo $jadwal['id_jadwal'] ?>" />

        <p>
            <label for="waktu">Waktu Kerja </label>
            <input type="time" id="waktu_kerja" name="waktu_kerja">
        </p>
        <p>
            <label for="tanggal">tanggal: </label>
            <input type="date" id="tanggal_kerja" name="tanggal_kerja">
        </p>
        <p>
        <input type="submit" value="Konfirmasi" name="set" />
        <input type="button" value="Kembali" onclick="history.back(-1)" />
        </p>

        </fieldset>


    </form>

    </body>
</html>