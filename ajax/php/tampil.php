<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>tampil data</title>
</head>
<body>
    <h1>Menampilkan data</h1>
    <?php
    $data =mysqli_query($koneksi,"select * from provinsi");
    if($data){
        while($p =  mysqli_fetch_array($data)){?>
            <p> <?php echo $p['provinsi_nama'] ?></p>
      <?php }
    }
?>
</body>
</html>