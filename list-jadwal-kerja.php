<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Jadwal kerja</title>

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

</style></head>

<body>
    <div class="halaman">
    <header>
    <header>
        <h3 align="center">List Jadwal Kerja</h3>
    </header>
    
    <br>
    <table align="center" border="1">
    <thead>
        <tr>
            <th>Id Jadwal</th>
            <th>Waktu Kerja</th>
            <th>tanggal Kerja</th>
            <th>Modifikasi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM jadwal_kerja";
        $query = mysqli_query($db, $sql);

        while($jadwal = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$jadwal['id_jadwal']."</td>";
            echo "<td>".$jadwal['waktu_kerja']."</td>";
            echo "<td>".$jadwal['tanggal_kerja']."</td>";
            echo "<td>";
            echo "<a href='form-edit-jadwal.php?id_jadwal=".$jadwal['id_jadwal']."'>Edit</a> | ";
            echo "<a href='form-hapus-jadwal.php?id_jadwal=".$jadwal['id_jadwal']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";

        }
        ?>

    </tbody>
    </table>
    <br>
    <nav align="center">
    <input type="button" value="Input Data" onclick=top.location="form-jadwal-baru.php">
    <input type="button" value="Kembali" onclick="history.back(-1)" />  
    <p align="center">Total: <?php echo mysqli_num_rows($query) ?></p>
    </nav>
    </div>
    </body>
</html>