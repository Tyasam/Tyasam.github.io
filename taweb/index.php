<!DOCTYPE HTML>
<html>
<head>
	<title>Login Multi User Sistem Informasi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
	
<div align="center">
<img src="logoupm.png" style="width: 200px;height: 200px;">
		<p class="login">Silahkan Login Sesuai Level</p>
 
		<table border="1" cellspacing="1">
		<form action="ceklogin.php" method="post">
			<tr><td>Username</td><td>
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">
 
			<tr><td>Password</td><td>
			<input type="password" name="password" class="form_login" placeholder="Password" required="required">
 
			<tr><td></td><td><input type="submit" class="tombol_login" value="LOGIN"></td></tr>
		</form>
		</table>
		
	</div>
</body>
</html>