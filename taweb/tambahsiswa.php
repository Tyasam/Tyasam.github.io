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
		<td>Kode Siswa</td><td>
		<td><input type="text" name="kode_siswa"></td>
		<td>NIS</td><td>
		<td><input type="text" name="nis"></td>
		<td>Nama Siswa</td><td>
		<td><input type="text" name="nama_siswa"></td>
		<td>Kelamin</td>
		<td><input type="text" name="kelamin"></td>
		<td>Agama</td>
		<td><input type="text" name="agama"></td>
		<td>Tempat Lahir</td>
		<td><input type="text" name="tempat_lahir"></td>
		<td>Tanggal Lahir</td><td>
		<td><input type="text" name="tanggal_lahir"></td>
		<td>Alamat</td><td>
		<td><input type="text" name="alamat"></td>
		<td>No Telepon</td><td>
		<td><input type="text" name="no_telepon"></td>
		<td>Foto</td><td>
		<td><input type="text" name="foto"></td>
		<td>Tahun Angkatan</td><td>
		<td><input type="text" name="tahun_angkatan"></td>
		<td>Status Aktif</td><td>
		<td><input type="text" name="status_aktif"></td>
		<td></td>
		<td><input type="submit" value="SIMPAN"></td>
		</tr>
	</table>
	</form>
</body>
</html>