<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
</head>
<body>
	<h2>DATA USER</h2>
	<br/>
	<a href="tambahuser.php">TAMBAH</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
		<th>No</th>
		<th>Nama User</th>
		<th>Level</th>
		<th>Username</th>
		<th>Password</th>
		<th>Opsi</th>
		</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from user");

while ($row = mysqli_fetch_array($data))
{
?>
    <tr>
	<td><?php echo $no++ ?></td>
	<td><?php echo $row['nama_user'] ?></td>
	<td><?php echo $row['level'] ?></td>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['password'] ?></td>
	<td>
	<a href="edituser.php?kode_user=<?php echo $row['kode_user']; ?>">EDIT</a>
	<a href="hapususer.php?kode_user=<?php echo $row['kode_user']; ?>">HAPUS</a>
	</td>
    </tr>
	<?php
}
?>
</table>
</body>
</html>