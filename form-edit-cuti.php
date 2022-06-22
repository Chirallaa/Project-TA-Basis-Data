<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_cuti']) ){
    header('Location: list-cuti.php');
}

//ambil id dari query string
$cuti = $_GET['id_cuti'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM cuti WHERE id_cuti=$cuti";
$query = mysqli_query($db, $sql);
$cuti = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Data Cuti</title>
    <style>
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
        <h3>Form Edit Data Cuti </h3>

    <form action="set-edit-cuti.php" method="POST">

        <fieldset>

        <input type="hidden" name="id_cuti" value="<?php echo $cuti['id_cuti'] ?>" />
        <p>
            <label for="tgl">tanggal Cuti: </label>
            <input type="date" id="tgl_cuti" name="tgl_cuti">
        </p>
        <p>
        <input type="submit" value="Konfirmasi" name="set" />
        <input type="button" value="Kembali" onclick="history.back(-1)" />
        </p>

        </fieldset>

    </form>

    </body>
</html>