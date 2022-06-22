<!DOCTYPE html>
<html>
<head>
    <title>Form Input Cuti Baru</title>
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
        <h3>Form Input Cuti Baru</h3>
    </header>

    <form action="proses-cuti-baru.php" method="POST">

        <fieldset>

        <input type="hidden" name="id_cuti" value="<?php echo $jadwal_cuti['id_cuti'] ?>" />
        <p>
            <label for="tgl_cuti">Tanggal Cuti : </label>
            <input type="date" id="tgl_cuti" name="tgl_cuti">
        </p>
        <p>
        <input type="submit" value="Konfirmasi" name="insert" />
        <input type="button" value="Kembali" onclick="history.back(-1)" />
        </p>

        </fieldset>

    </form>

    </body>
</html>