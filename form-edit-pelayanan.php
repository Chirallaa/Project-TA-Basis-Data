<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_pelayanan']) ){
    header('Location: list-pelayanan.php');
}

//ambil id dari query string
$layanan = $_GET['id_pelayanan'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pelayanan WHERE id_pelayanan=$layanan";
$query = mysqli_query($db, $sql);
$layanan = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Data Pelayanan</title>
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
        <h3>Form Edit Data Pelayanan</h3>
    </header>

    <form action="set-edit-pelayanan.php" method="POST">

        <fieldset>

        <input type="hidden" name="id_pelayanan" value="<?php echo $layanan['id_pelayanan'] ?>" />

        <p>
            <label for="jenis">Nama Pelayanan </label>
            <input type="text" name="nama_pelayanan" placeholder="" />
        </p>
        <p>
            <label for="tarif">Tarif Pelayanan </label>
            <input type="text" id="tarif_pelayanan" name="tarif_pelayanan">
        </p>
        <p>
            <label for="tanggal">Tanggal Pelayanan </label>
            <input type="date" id='tanggal_pelayan' name="tanggal_pelayanan" />
        </p>
        <p>
        <input type="submit" value="Konfirmasi" name="set" />
        <input type="button" value="Kembali" onclick="history.back(-1)" />
        </p>

        </fieldset>


    </form>

    </body>
</html>