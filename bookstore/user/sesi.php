<?php 
session_start();

if (!isset($_SESSION['user'])) {
	echo "<script type='text/javascript'>alert('anda belum login!');document.location='../index.html';</script>";
}


 ?>