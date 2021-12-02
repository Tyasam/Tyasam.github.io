<?php
$host="localhost";
$username="root";
$password="";
$database="sisfo";
$koneksi=mysqli_connect($host, $username, $password, $database);
if($koneksi){
	echo "Koneksi ke Database Berhasil";
}
else{
	echo "Koneksi ke Database Gagal";
}
?>