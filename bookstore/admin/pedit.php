<?php
include '../connect.php';
$id=$_POST['id']; 
$kategori = $_POST['kategori'];
$nama_buku = $_POST['nama_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
mysqli_query($conn,"UPDATE buku SET id = '$id',Kategori = '$kategori',nama_buku ='$nama_buku',penulis = '$penulis', penerbit='$penerbit',harga='$harga' WHERE id='$id'");
header("Location:index.php");


 ?>