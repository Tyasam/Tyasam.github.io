<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<img src="logoupm.png" style="width: 200px;height: 200px;">
</head>
<body>
	<?php 
	session_start();
 
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h1>Halaman Admin</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<br/>
	<br/>
	
<a href="main_admin.php" target="_self"> Home </a><br/>
<a href="datauser.php" target="_self"> Data User</a><br/>
<a href="datapelajaran.php" target="_self"> Data Pelajaran</a><br/>
<a href="dataguru.php" target="_self"> Data Guru</a><br/>
<a href="datasiswa.php" target="_self"> Data Siswa</a><br/>
<a href="datakelas.php" target="_self"> Data Kelas</a><br/>
<a href="datanilai.php" target="_self"> Nilai Kelas</a><br/>
<a href="laporan.php" target="_self"> Laporan</a><br/>
<a href="logout.php" target="_self"> Logout</a><br/>
</body>
</html>