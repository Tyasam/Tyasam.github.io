<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Main Menu</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<img src="logo smkn2.jpg" style="width: 150px; height: 200px;">
</head>
<body>
	<h2>Menu Utama<br></h2>
		<form>
		<ul>
		<li><a href="?open" target="_self"> Home </a></li>
		<li><a href="?open=User-Data" target="_self"> Data User</a></li>
		<li><a href="?open=Pelajaran-Data" target="_self"> Data Pelajaran</a></li>
		<li><a href="?open=Guru-Data" target="_self"> Data Guru</a></li>
		<li><a href="http://localhost/sisfo/siswadata.php" target="_self"> Data Siswa</a></li>
		<li><a href="?open=Kelas-Data" target="_self"> Data Kelas</a></li>
		<li><a href="?open=Nilai-Data" target="_self"> Nilai Kelas</a></li>
		<li><a href="?open=Laporan" target="_self"> Laporan</a></li>
		<li><a href="?open=Logout" target="_self"> Logout</a></li>
		</ul>
		</form>