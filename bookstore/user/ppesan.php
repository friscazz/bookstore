<?php 
include '../connect.php';
$email = $_POST["email"];
$nama  = $_POST["nama"];
$pesan = $_POST["pesan"];
mysqli_query($conn,"INSERT INTO pesan(id,email,nama,pesan) VALUES ('','$email','$nama','$pesan')");
echo "<script type='text/javascript'>alert('Pesan Anda Telah Dikirim Terimakasih');document.location='about.php';</script>";




 ?>