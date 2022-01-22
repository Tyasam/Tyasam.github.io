<!DOCTYPE html>
<html>
<head>
	<title>Data Guru</title>
</head>
<body>
	<h2>TAMBAH DATA GURU</h2>
	<br/>
	<a href="dataguru.php">KEMBALI</a>
	<br/><br/>
	<form action="aksi_tambahguru.php" method="POST">
	<table width="25%" border="0">
		<tr>
		<td>Kode Guru</td><td>
		<td><input type="text" name="kode_guru"></td>
		<td>NIP</td>
		<td><input type="text" name="nip"></td>
		<td>Nama Guru</td>
		<td><input type="text" name="nama_guru"></td>
		<td>Kelamin</td>
		<td><input type="text" name="kelamin"></td>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
		<td>No Telepon</td>
		<td><input type="text" name="no_telepon"></td>
		<td>Status</td>
		<td><input type="text" name="status_aktif"></td>
		<td></td>
		<td><input type="submit" value="SIMPAN"></td>
		</tr>
	</table>
	</form>
</body>
</html>