<?php 
//Hapus data
include '../connect.php';
$id = $_GET['id'];
if (mysqli_query($conn,"DELETE FROM buku WHERE id='$id'")) {
	header("Location:index.php");
} else {echo "gagal";}


 ?>