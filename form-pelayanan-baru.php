<!DOCTYPE html>
<html>
<head>
    <title>Form Input PelayananBaru</title>
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
        <h3>Form Input Pelayanan Baru</h3>
    </header>

    <form action="proses-pelayanan-baru.php" method="POST">

        <fieldset>

        <input type="hidden" name="id_layanan" value="<?php echo $layanan['id_pelayanan'] ?>" />

        <p>
            <label for="nama">Nama Layanan </label>
            <input type="text" id="nama_pelayanan" name="nama_pelayanan">
        </p>
        <p>
            <label for="tarif">Tarif Pelayanan </label>
            <input type="text" id="tarif_pelayanan" name="tarif_pelayanan">
        </p>
        <p>
            <label for="tanggal_pelayanan">Tanggal Pelayanan: </label>
            <input type="date" id="tanggal_pelayanan" name="tanggal_pelayanan">
        </p>
        <p>
        <input type="submit" value="Konfirmasi" name="insert" />
        <input type="button" value="Kembali" onclick="history.back(-1)" />
        </p>

        </fieldset>

    </form>

    </body>
</html>