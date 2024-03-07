<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>todolist</title>
</head>

<body>
    <header>
      <h1>Simple Todolist</h1>

      <h4>Created For Fun </h4>
      <p>Inlclude Database and Action crud</p>
    </header>
    <div class="main">
    	<form action="" method="POST" enctype="multipart/form-data">
    	<h3>Masukkan Tugas</h3>
    	<input type="text" class="todo" width="100" name="todo" type="text">
    </input><br>
    <input type="submit" name="submit" value="Tambah">
</div>
<?php 
	if(isset($_POST['submit'])){
		$todo = $_POST['todo'];
		$query = "insert into todo values(null,'".$todo."',1)";
		$tambah = mysqli_query($konn,$query);
		if($tambah){
			echo"berhasil ditambahkan";
		}else{
			echo "gagal".mysqli_error($konn);
		}
	}
?>
<div class="hasil">
    <h2>Daftar tugas yang telah anda tambahkan adalah :</h2>
    <?php
    $hasil = mysqli_query($konn,"select * from todo");
    while($data = mysqli_fetch_array($hasil)){
        ?>
    <p><?php echo $data['do'] ?></p>
<?php }?>
</div>

    <footer>
        <div class="container">
            <small>just do somethings for fun and you will never feel disappoint</small>
        </div>
    </footer>
</body>

</html>