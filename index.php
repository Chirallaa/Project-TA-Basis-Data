<!DOCTYPE html>
<html>
<head>
	<title>Manajemen karyawan</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>

</head>
<body>
    
<div class="content">
	<header>
		<h1 class="judul">Clara's Salon</h1>
	</header>

	<div class="menu">
		<ul>
			<li><a href="index.php">HOME</a></li>
            <li><a href="list-karyawan.php">List Karyawan</a></li>
            <li><a href="list-jadwal-kerja.php">List Jadwal</a></li>
            <li><a href="list-pelayanan.php">List Pelayanan</a></li>
            <li><a href="list-cuti.php">List Cuti</a></li>
		</ul>
	</div>

	<div class="badan">
<ul>
	Jenis pelayanan yang ada pada Clara's Salon :

    <li>Kesehatan kulit dan wajah</li>
    <li>Perawatan rambut (termasuk memotong rambut)</li>
    <li>Manikur (perawatan kuku dan tangan)</li>
    <li>Pedikur (perawatan kuku dan kaki)</li>
    <li>Aroma terapi</li>
    <li>Meditasi</li>
    <li>Terapi oksigen</li>
    <li>Mandi lumpur</li>
    <li>Pijat</li>
    <li>Waxing</li>
    <li>dan lain-lain. </li>
</ul>
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'karyawan':
				include "halaman/list-karyawan.php";
				break;
			case 'jadwal':
				include "halaman/list-jadwal-kerja.php";
				break;
			case 'pelayanan':
				include "halaman/list-pelayanan.php";
				break;
            case 'cuti':
                 include "halaman/list-cuti.php";
                 break;					
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
  }
	 ?>

	</div>
</div>
</body>
</html>