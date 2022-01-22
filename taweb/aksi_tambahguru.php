<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_guru = $_POST['kode_guru'];
$nip = $_POST['nip'];
$nama_guru = $_POST['nama_guru'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
$status = $_POST['status'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into guru values('kode_guru','$nip','$nama_guru','$kelamin','$alamat','$no_telepon','$status')");

header("location:dataguru.php");
 
?>