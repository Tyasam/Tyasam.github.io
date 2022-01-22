<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
</head>
<body>
	<h2>TAMBAH DATA USER</h2>
	<br/>
	<a href="datauser.php">KEMBALI</a>
	<br/><br/>
	<form action="aksi_tambahuser.php" method="POST">
	<table width="25%" border="0">
		<tr>
		<td>Nama User</td><td>
		<td><input type="text" name="nama_user"></td>
		<td>Level</td>
		<td><input type="text" name="level"></td>
		<td>Username</td>
		<td><input type="text" name="username"></td>
		<td>Password</td>
		<td><input type="text" name="password"></td>
		<td></td>
		<td><input type="submit" value="SIMPAN"></td>
		</tr>
	</table>
	</form>
</body>
</html>