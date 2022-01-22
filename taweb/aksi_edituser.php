<?php 
include 'koneksi.php';

$kode_user = $_POST['kode_user'];
$nama_user = $_POST['nama_user'];
$level = $_POST['level'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi, "UPDATE user SET nama_user='$nama_user', level='$level', username='$username',password='$password' WHERE kode_user='$kode_user'");

header("location:datauser.php");
 
?>