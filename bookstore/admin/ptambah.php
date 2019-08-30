<?php 
include '../connect.php';
$kategori = $_POST['kategori'];
$nama_buku = $_POST['nama_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];

 mysqli_query($conn,"INSERT INTO buku (id,Kategori,nama_buku,penulis,penerbit,harga) VALUES ('','$kategori','$nama_buku','$penulis','$penerbit','$harga')");
 header('Location:index.php'); 


 ?>