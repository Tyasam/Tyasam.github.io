<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_pelajaran = $_POST['kode_pelajaran'];
$nama_pelajaran = $_POST['nama_pelajaran'];
$keterangan = $_POST['keterangan'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into pelajaran values('$kode_pelajaran','$nama_pelajaran','$keterangan')");

header("location:datapelajaran.php");
 
?>