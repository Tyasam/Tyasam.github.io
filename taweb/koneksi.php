<?php
$host="localhost";
$username="root";
$password="";
$database="sisfo";
$koneksi=mysqli_connect($host, $username, $password, $database);
if($koneksi){
	echo "";
}
else{
	echo "Koneksi ke Database Gagal";
}
?>