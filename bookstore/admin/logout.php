<?php 
	session_start();
	session_destroy();
	echo "<script type='text/javascript'>alert('anda berhasil logout!');document.location='../index.html';</script>";

 ?>