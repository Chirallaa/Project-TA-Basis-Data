<!DOCTYPE html>
<html>
<head>
    <title>Form Karyawan baru</title>
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
        <h3>Form karyawan Baru</h3>
    </header>

    <form action="proses-karyawan-baru.php" method="POST">

        <fieldset>

        <p>
            <label for="jadwal">Id Jadwal: </label>
            <input type="text" name="id_jadwal" placeholder="" />
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama_karyawan" placeholder="" />
        </p>
        <p>
            <label for="umur">Usia: </label>
            <input type="text" name="umur_karyawan" placeholder="" />
        </p>
        <p>
            <label for="notelp">NoTelp: </label>
            <input type="text" name="notelp_karyawan" placeholder="" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="l"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="p"> Perempuan</label>
        </p>
        <p>
        <input type="submit" value="Konfirmasi" name="insert" />
        <input type="button" value="Kembali" onclick="history.back(-1)" />
      </p>
        </fieldset>
    </form>
    </body>
</html>