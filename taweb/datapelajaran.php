<!DOCTYPE html>
<html>
<head>
	<title>Data Pelajaran</title>
</head>
<body>
	<h2>DATA PELAJARAN</h2>
	<br/>
	<a href="tambahpelajaran.php">TAMBAH</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
		<th>Kode Pelajaran</th>
		<th>Nama Pelajaran</th>
		<th>Keterangan</th>
		<th>Opsi</th>
		</tr>
<?php
include 'koneksi.php';
$data = mysqli_query($koneksi,"select * from pelajaran");

while ($row = mysqli_fetch_array($data))
{
?>
    <tr>
	<td><?php echo $row['kode_pelajaran'] ?></td>
	<td><?php echo $row['nama_pelajaran'] ?></td>
	<td><?php echo $row['keterangan'] ?></td>
	<td><a href="editpelajaran.php">EDIT</a>
	<a href="hapuspelajaran.php">HAPUS</a></td>
    </tr>
	<?php
}
?>
</table>
</body>
</html>