<?php 
$server = "localhost";
$username = "root";
$password = "admin";//kosongkan password kalian
$db = "indonesia";

$koneksi = mysqli_connect($server, 
$username,$password,$db) 
or die("gagal terhubung");
?>