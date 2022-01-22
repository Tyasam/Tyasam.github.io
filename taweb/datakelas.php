<!DOCTYPE html>
<html>
<head>
	<title>Data Kelas</title>
</head>
<body>
	<h2>DATA KELAS</h2>
	<br/>
	<a href="tambahkelas.php">TAMBAH</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
		<th>Kode Kelas</th>
		<th>Tahun Ajar</th>
		<th>Kelas</th>
		<th>Nama Kelas</th>
		<th>Kode Guru</th>
		<th>Status Aktif</th>
		</tr>
<?php
include 'koneksi.php';
$data = mysqli_query($koneksi,"select * from kelas");

while ($row = mysqli_fetch_array($data))
{
?>
    <tr>
	<td><?php echo $row['kode_kelas'] ?></td>
	<td><?php echo $row['tahun_ajar'] ?></td>
	<td><?php echo $row['kelas'] ?></td>
    <td><?php echo $row['nama_kelas'] ?></td>
    <td><?php echo $row['kode_guru'] ?></td>
	<td><?php echo $row['status_aktif'] ?></td>
    </tr>
	<?php
}
?>
</table>
</body>
</html>