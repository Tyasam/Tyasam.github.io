<?php
include 'koneksi.php';

$kode_siswa = $_POST['kode_siswa'];
$nis = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$kelamin = $_POST['kelamin'];
$agama = $_POST['agama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
$foto = $_POST['foto'];
$tahun_angkatan = $_POST['tahun_angkatan'];
$status_aktif = $_POST['status_aktif'];

mysqli_query($koneksi,"insert into siswa values('$kode_siswa','$nis','$nama_siswa','$kelamin','$agama','$tempat_lahir','$tanggal_lahir','$alamat','$no_telepon','$foto','$tahun_angkatan','$status_aktif')");

header("location:datasiswa.php");
?>