<?php 
include 'koneksi.php';
$kode_user = $_GET['kode_user'];
mysqli_query($koneksi, "DELETE FROM user WHERE kode_user='$kode_user'");
 
header("location:datauser.php");
?>