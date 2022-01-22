<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
</head>
<body>
	<h2>TAMBAH DATA SISWA</h2>
	<br/>
	<a href="datasiswa.php">KEMBALI</a>
	<br/><br/>
	<form action="aksi_tambahsiswa.php" method="POST">
	<table width="25%" border="0">
		<tr>
		<td>Kode Kelas</td><td>
		<td><input type="text" name="kode_kelas"></td>
		<td>Tahun Ajar</td>
		<td><input type="text" name="tahun_ajar"></td>
		<td>Kelas</td>
		<td><input type="text" name="kelas"></td>
		<td>Nama Kelas</td>
		<td><input type="text" name="nama_kelas"></td>
		<td>Kode Guru</td><td>
		<td><input type="text" name="nama_guru"></td>
		<td>Status Aktif</td><td>
		<td><input type="text" name="status_aktif"></td>
		<td></td>
		<td><input type="submit" value="SIMPAN"></td>
		</tr>
	</table>
	</form>
</body>
</html>