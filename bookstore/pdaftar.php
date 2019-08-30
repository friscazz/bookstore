<?php 
$nama = $_POST['nama'];
$username =$_POST['username'];
$password = $_POST['password'];
include 'connect.php';
mysqli_query($conn,"INSERT INTO login (id,nama,username,password,level) VALUES ('','$nama','$username','$password','user')");

echo "<script type='text/javascript'>alert('anda telah mendaftar silahkan login terlebih dahulu');document.location='login.php';</script>";






 ?>