<?php 
    $db = mysqli_connect("localhost","root","admin");  
    mysqli_select_db($db, "barang");

    $q = strtolower($_GET['q']); 
    if(!$q) return;

    $sql = mysqli_query($db, "select namabarang from tbbarang where namabarang LIKE '%$q%'"); 
    while($r = mysqli_fetch_array($sql)){ 
        $nama_barang = $r['namabarang'];
        echo "$nama_barang \n"; 
    } 
?>