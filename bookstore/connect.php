<?php 
$server = "localhost";
$id     = "root";
$pass   = "";
$db     = "bookstore";
$conn = mysqli_connect($server,$id,$pass,$db);
if (!$conn) {
	echo "error database";
}

 ?>