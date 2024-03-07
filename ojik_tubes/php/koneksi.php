<?php 
#B1A022344
#juwita erlia bustami
$server = "localhost";
$username = "root";
$password = "";
$database= "indonesia";

$koneksi = mysqli_connect($server, $username,$password,$database);
if ($koneksi){
}else{
	echo "gagal terhubung ke database..";
}
?>