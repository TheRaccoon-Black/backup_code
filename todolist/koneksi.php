<?php 
$hostname = "localhost";
$username = "root";
$password = "admin";
$database = "todolist";


$konn = mysqli_connect($hostname,$username,$password,$database) or die("gagal terhubung ke database");	

?>