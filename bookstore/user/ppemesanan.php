<?php 
include '../connect.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nama_buku = $_POST['nama_buku'];
$jumlah = $_POST['jumlah'];
$harga    = $_POST['harga'];
$pemesanan = $_POST['pemesanan'];
mysqli_query($conn,"INSERT INTO pemesanan (id,nama,alamat,nama_buku,jumlah,harga,pemesanan) VALUES ('','$nama','$alamat','$nama_buku','$jumlah','$harga','$pemesanan')");
echo "<script type='text/javascript'>alert('Pesanan Berhasil');document.location='index.php';</script>";
 ?>