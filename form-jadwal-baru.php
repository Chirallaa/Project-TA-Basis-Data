<!DOCTYPE html>
<html>
<head>
    <title>Form Input Jadwal Baru</title>
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
        <h3>Form Input Jadwal Baru</h3>
    </header>

    <form action="proses-jadwal-baru.php" method="POST">

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
        <input type="submit" value="Konfirmasi" name="insert" />
        <input type="button" value="Kembali" onclick="history.back(-1)" />
        </p>

        </fieldset>

    </form>

    </body>
</html>