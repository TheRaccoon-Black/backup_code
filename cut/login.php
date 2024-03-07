<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin smk1rl</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bahan/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="bahan/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="bahan/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-color: #007bff;">
<div class="login-box" style="width:300px; height:500px; margin-bottom:110px;">
<img class="justify-content-center" src="https://www.smkn1rl.sch.id/school/public/assets/images/smk.png" style="width: 100px; margin-top:30px; margin-left:100px;">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary" style="margin:30px;">
    <div class="card-header text-center">
      <p class="h1"><b>Admin</b> sekolah</p>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Masuk sebagai admin</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="pw" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember" style="font-size: 20px;">
                ingat saya
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit"  name="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <?php 
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $pw = $_POST['pw'];
            session_start();
            
            $masuk = mysqli_query($conn,"select * from login where email = '".$email."' and pw = '".$pw."'");
            if($masuk){
                echo"<sript>alert('login berhasil')</sript>";
                header("Location: menu.php");
            }else{
                echo"<script>alert('email atau password salah')";
            }
        }
      ?>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="bahan/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="bahan/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="bahan/dist/js/adminlte.min.js"></script>
</body>
</html>
