<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_karyawan']) ){
    header('Location: list-karyawan.php');
}

//ambil id dari query string
$id = $_GET['id_karyawan'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM karyawan WHERE id_karyawan=$id";
$query = mysqli_query($db, $sql);
$karyawan = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Data Karyawan</title>
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
        <h3>Form Edit Data Karyawan</h3>
    </header>

    <form action="set-edit-karyawan.php" method="POST">

        <fieldset>

        <input type="hidden" name="id_karyawan" value="<?php echo $karyawan['id_karyawan'] ?>" />

        <p>
            <label for="jadwal">Id Jadwal kerja </label>
            <input type="text" name="id_jadwal" placeholder="" />
        </p>
        <p>
            <label for="nama">Nama karyawan </label>
            <input type="text" name="nama_karyawan" placeholder="" />
        </p>
        <p>
            <label for="umur">Usia karyawan </label>
            <input type="text" name="umur_karyawan" placeholder="" />
        </p>
        <p>
            <label for="notelp">Notelp karyawan </label>
            <input type="text" name="notelp_karyawan" placeholder="" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin </label>
            <?php $jk = $karyawan['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="l" <?php echo ($jk == 'l') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="p" <?php echo ($jk == 'p') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
        <input type="submit" value="Konfirmasi" name="set" />
        <input type="button" value="Kembali" onclick="history.back(-1)" />
        </p>
        <p> </p>

        </fieldset>


    </form>

    </body>
</html>