<?php 
session_start();
include 'connect.php';
$username = $_POST['username'];
$password= $_POST['password'];

$sql = mysqli_query($conn,"SELECT * FROM login WHERE password='$password' AND username='$username' ");

$cek = mysqli_num_rows($sql);

if ($cek>0) {
	$data =mysqli_fetch_assoc($sql);
	if ($data['level']=="admin") {
		$_SESSION['admin'] = $username;
		echo "<script type='text/javascript'>alert('anda berhasil login admin!');document.location='admin/index.php';</script>";
	}elseif ($data['level']=="user") {
		$_SESSION['user'] = "user";
		echo "<script type='text/javascript'>alert('anda berhasil login');document.location='user/index.php';</script>";
	}
}else {echo "<script type='text/javascript'>alert('anda tidak dikenal!');document.location='login.php';</script>";}

 ?>