<?php
	include '../connect.php';
	$nama_buku=$_GET['nama_buku'];
	$penulis = $_GET['penulis'];
	$harga = $_GET['harga'];
	mysqli_query ($conn,"INSERT INTO cart (id,nama_buku,penulis,harga) VALUES('','$nama_buku','$penulis','$harga')");

echo "<script type='text/javascript'>alert('buku sudah masuk dalam cart');document.location='index.php';</script>";

 ?>