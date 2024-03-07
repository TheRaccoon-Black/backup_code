<?php 
include "db.php";

$kontak = mysqli_query($conn, "select * from tb_admin where admin_id = 1");
$a = mysqli_fetch_object($kontak);

$produk = mysqli_query($conn,"select  * from tb_produk where produk_id = '".$_GET['id']."'");
$p = mysqli_fetch_object($produk);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>dashboard | macha </title>
</head>
<body>
  <header>
    <div class="container">
    <h1><a href="index.php">MachaKu</a></h1>
    <ul>
        <li><a href="produk.php">Produk</a></li>
    </ul>
    </div>
  </header>
  <div class="search">
    <div class="container">
        <form action="produk.php">
            <input type="text" name="search" placeholder="Cari produk" value="<?php echo $_GET['search'] ?>">
            <input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
            <input type="submit" name="cari" value="Cari produk">
        </form>
    </div>
  </div>
  <div class="section">
    <div class="container">
        Detail produk
        <div class="box">
            <div class="col-2">
                <img src="produk/<?php echo $p->produk_gambar?>" width="100%">
            </div>
            <div class="col-2">
                <h3><?php echo $p->produk_nama ?></h3>
                <h4>Rp. <?php echo number_format($p->produk_harga) ?></h4>
                <p>Deskripsi :<br>
                    <?php echo $p->produk_desk ?>
                     </p>
                <p><a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp?>&text=Hai, saya tertarik dengan produk Anda." target="_blank">Hubungi via Whatsapp <img src="gambar/wa.png" width="50px"></a></p>
            </div>
        </div>
    </div>
  </div>
  <div class="footer">
    <div class="container">
      <h4>Alamat</h4>
      <p><?php echo $a->admin_alamat?></p>
      <h4>Email</h4>
      <p><?php echo $a->admin_email?></p>
      <h4>Telepon</h4>
      <p><?php echo $a->admin_telp?></p>
      <small>Copyright &copy; 2023 - MachaKu.com</small>
    </div>
  </div>
</body>
</html>?>