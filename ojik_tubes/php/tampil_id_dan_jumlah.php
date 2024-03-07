<?php
#B1A022344
#juwita erlia bustami
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>tampil data</title>
</head>
<body background="gambar.jpeg" style="text-align: center;">
    <h1>Menampilkan data</h1>
            <h2>---Nama provinsi---</h2>
    <?php
    $data =mysqli_query($koneksi,"select * from provinsi");
    if($data){
        while($p =  mysqli_fetch_array($data)){?>
                <h3><?php echo $p['id_prov'] ?> | <?php echo $p['jmlh_penduduk'] ?></h3>
      <?php }
    }
?>
</table>
</body>
</html>