<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Daftar Pelayanan</title>
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
    <h3 align="center">List Nama  Pelayanan</h3>
    </header>
    
  <br>

    <table align="center" border="1">
    <thead>
        <tr>
            <th>Id Pelayanan</th>
            <th>Nama pelayanan</th>
            <th>Tarif pelayanan</th>
            <th>tanggal</th>
            <th>Modifikasi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM pelayanan";
        $query = mysqli_query($db, $sql);

        while($layanan = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$layanan['id_pelayanan']."</td>";
            echo "<td>".$layanan['nama_pelayanan']."</td>";
            echo "<td>".$layanan['tarif_pelayanan']."</td>";
            echo "<td>".$layanan['tanggal_pelayanan']."</td>";
            echo "<td>";
            echo "<a href='form-edit-pelayanan.php?id_pelayanan=".$layanan['id_pelayanan']."'>Edit</a> | ";
            echo "<a href='form-hapus-pelayanan.php?id_pelayanan=".$layanan['id_pelayanan']."'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
<br>
<nav align="center">
    <input type="button" value="Input Data" onclick=top.location="form-pelayanan-baru.php">
    <input type="button" value="Kembali" onclick="history.back(-1)" />  
    <p align="center">Total: <?php echo mysqli_num_rows($query) ?></p>
    </nav>
    </div>
    </body>
</html>