<?php 
include 'koneksi.php';

session_start();
$username = $_POST['username'];
$password = md5($_POST['password']);


$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	if($data['level']=="admin"){

		
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";

		header("location:home_admin.php");

	
	}else if($data['level']=="karyawan"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "karyawan";

		header("location:home_karyawan.php");

	}else{

		
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>