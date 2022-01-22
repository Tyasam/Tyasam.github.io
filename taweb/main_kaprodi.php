<html>
<head>
	<title>Halaman Kaprodi</title>
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
	<h1>Halaman Kaprodi</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>

	<br/>
	<br/>
</body>
</html>