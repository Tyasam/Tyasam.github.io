<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
</head>
<body>
	<h2>EDIT DATA USER</h2>
	<br/>
	<a href="datauser.php">Lihat Data User</a>
	<br/><br/>
	
	<?php
	include 'koneksi.php';
	$kode_user = $_GET['kode_user'];
	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE kode_user='$kode_user'") or die(mysqli_error());
	$no = 1;
	while ($data = mysqli_fetch_array($query)){
	?>
	
	<form action="aksi_edituser.php" method="POST">
	<table width="25%" border="0">
		<tr>
		<td>Nama User</td><td>
		<td><input type="hidden" name="kode_user" value="<?php echo $data['kode_user'] ?>">
		<input type="text" name="nama_user" value="<?php echo $data['nama_user'] ?>">
		</td>
		<td>Level</td>
		<td><input type="text" name="level" value="<?php echo $data['level'] ?>"></td>
		<td>Username</td>
		<td><input type="text" name="username" value="<?php echo $data['username'] ?>"></td>
		<td>Password</td>
		<td><input type="text" name="password" value="<?php echo $data['password'] ?>"></td>
		<td></td>
		<td><input type="submit" value="SIMPAN"></td>
		</tr>
	</table>
	</form>
	<?php } ?>
</body>
</html>