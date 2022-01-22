<!DOCTYPE html>
<html>
<head>
	<title>Data Guru</title>
</head>
<body>
	<h2>DATA GURU</h2>
	<br/>
	<a href="tambahguru.php">TAMBAH</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
		<th>Kode Guru</th>
		<th>NIP</th>
		<th>Nama Guru</th>
		<th>Kelamin</th>
		<th>Alamat</th>
		<th>No Telepon</th>
		<th>Status</th>
		</tr>
<?php
include 'koneksi.php';
$data = mysqli_query($koneksi,"select * from guru");

while ($row = mysqli_fetch_array($data))
{
?>
    <tr>
	<td><?php echo $row['kode_guru'] ?></td>
	<td><?php echo $row['nip'] ?></td>
	<td><?php echo $row['nama_guru'] ?></td>
    <td><?php echo $row['kelamin'] ?></td>
    <td><?php echo $row['alamat'] ?></td>
	<td><?php echo $row['no_telepon'] ?></td>
	<td><?php echo $row['status_aktif'] ?></td>
	<td><a href="edituser.php">EDIT</a>
	<a href="hapususer.php">HAPUS</a></td>
    </tr>
	<?php
}
?>
</table>
</body>
</html>