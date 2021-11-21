<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "modul3";
$port = "3307";

$koneksi = mysqli_connect($servername,$username,$password,$dbname,$port);

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}


?>