<?php 
session_start();
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:main_admin.php");
 
	}else if($data['level']=="Kaprodi"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "kaprodi";
		header("location:main_kaprodi.php");
 
	}else if($data['level']=="Dosen"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "dosen";
		header("location:main_dosen.php");
		
	}else if($data['level']=="Mahasiswa"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "mahasiswa";
		header("location:main_mahasiswa.php");
 
	}else{
		header("location:index.php?pesan=gagal");
	}
	
}else{
	header("location:index.php?pesan=gagal");
}

?>