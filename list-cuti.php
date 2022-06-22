<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Jadwal Cuti</title>
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
        <h3 align="center">List Jadwal Cuti</h3>
</header>
    <br>
    <table align="center" border="1">
    <thead>
        <tr>
            <th>Id Cuti</th>
            <th>Tanggal Cuti</th>
            <th>Modifikasi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM cuti";
        $query = mysqli_query($db, $sql);

        while($cuti = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$cuti['id_cuti']."</td>";
            echo "<td>".$cuti['tgl_cuti']."</td>";
            echo "<td>";
            echo "<a href='form-edit-cuti.php?id_cuti=".$cuti['id_cuti']."'>Edit</a> | ";
            echo "<a href='form-hapus-cuti.php?id_cuti=".$cuti['id_cuti']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
<br>
    <nav align="center">
    <input type="button" value="Input Data" onclick=top.location="form-cuti-baru.php">
    <input type="button" value="Kembali" onclick="history.back(-1)" />  
    </nav>
    <p align="center">Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
    </body>
</html>