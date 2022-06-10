<?php
require 'functions.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
    alert('Registrasi Berhasil');
    document.location.href = 'login.php';
    </script>";
  } else {
    echo "<script>
    alert('Registrasi gagal');
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- boostrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" href="../assets/img/stikps5.jpg">
  <title>Register Page</title>
</head>

<body>
<div id="bg-login" style="padding-bottom: 500px;">
  <div class="container-sm" style="color: white;">
    <h2 style="text-align: center;">Slayer CONSOLE</h2>
    <form action="" method="POST">
      <div class="form-group mt-1">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your Username with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary" name="register">register</button>
      <button class="tombol-kembali btn btn-danger"><a href="../php/login.php">Back</a></button>
    </form>
  </div>
</div>

<footer class="text-white fw-bold text-center pb-1" style="background-color: darkblue;">
      <p>Created By Slayer | <span class="far fa-copyright"></span> 2022 All
        rights reserved.</a></p>
    </footer>

      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>