<?php
//koneksi ke server
$con = mysqli_connect('localhost','root','admin','db_web');
//deklarasi database yang dipakai dan nama database harus sesuai
$nip = $_GET['q'];
if($nip){
$s = mysqli_query($con,"select Alamat from tabelDataKaryawan where
nip=$nip");
while($d = mysqli_fetch_array($s)){
echo $d['Alamat'];
}
}
?>