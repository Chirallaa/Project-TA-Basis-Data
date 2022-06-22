<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Nama Karyawan</title>
    <style>
table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}

input[type=button] {
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
    <div class="halaman">
    <header>
     <h3 align="center">List Nama  Karyawan</h3>
     </header>
    <br>
    <table align="center" border="1">
    <thead>
        <tr>
            <th>Id Karyawan</th>
            <th>Id Jadwal</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Notelp</th>
            <th>Jenis Kelamin</th>
            <th>Modifikasi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM karyawan";
        $query = mysqli_query($db, $sql);

        while($karyawan = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$karyawan['id_karyawan']."</td>";
            echo "<td>".$karyawan['id_jadwal']."</td>";
            echo "<td>".$karyawan['nama_karyawan']."</td>";
            echo "<td>".$karyawan['umur_karyawan']."</td>";
            echo "<td>".$karyawan['notelp_karyawan']."</td>";
            echo "<td>".$karyawan['jenis_kelamin']."</td>";
            echo "<td>";
            echo "<a href='form-edit-karyawan.php?id_karyawan=".$karyawan['id_karyawan']."'>Edit</a> | ";
            echo "<a href='form-hapus-karyawan.php?id_karyawan=".$karyawan['id_karyawan']."'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    <br>
    
    <nav align="center">
    <input type="button" value="Input Data" onclick=top.location="form-karyawan-baru.php">
    <input type="button" value="Kembali" onclick="history.back(-1)" />  
    </nav>
    <p align="center">Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
    </body>
</html>