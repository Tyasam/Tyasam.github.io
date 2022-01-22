<!DOCTYPE html>
<html>
<head>
	<title>Data Pelajaran</title>
</head>
<body>
	<h2>TAMBAH DATA PELAJARAN</h2>
	<br/>
	<a href="datapelajaran.php">KEMBALI</a>
	<br/><br/>
	<form action="aksi_tambahpelajaran.php" method="POST">
	<table width="25%" border="0">
		<tr>
		<td>Kode Pelajaran</td>
		<td><input type="text" name="kode_pelajaran"></td>
		<td>Nama Pelajaran</td><td>
		<td><input type="text" name="nama_pelajaran"></td>
		<td>Keterangan</td>
		<td><input type="text" name="keterangan"></td>
		<td></td>
		<td><input type="submit" value="SIMPAN"></td>
		</tr>
	</table>
	</form>
</body>
</html>