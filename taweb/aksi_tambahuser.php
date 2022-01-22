<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_user = $_POST['nama_user'];
$level = $_POST['level'];
$username = $_POST['username'];
$password = $_POST['password'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$nama_user','$level','$username','$password')");

header("location:datauser.php");
 
?>