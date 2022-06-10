<?php
session_start();
require 'functions.php';

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      //cek role admin
      if ($row['role']=="admin") {
        $_SESSION['id_admin'] = $row['id'];
        $_SESSION['role'] = "admin";
        header("location:admin.php");
    } else if ($row['role']=="user") {
        $_SESSION['id_user'] = $row['id'];
        $_SESSION['role'] = "user";
        header("location:user.php");
    }

      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
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
  <title>Login Page</title>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark">
      <div class="container">
      <button style="background-color: red; border-color: red; border-radius: 5px; padding-left: 10px;"><a class="navbar-brand " href="../index.php" style="color: white;">Back Home</a></button>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        
      </button>
      </div>
    </nav>
  <style>
    h2{
      text-align: center;
      color: white;
    }
  </style>
  <div id="bg-login" style="padding-bottom: 400px;">
  <div class="container-sm">
    <h2>Slayer CONSOLE</h2>
    <form action="" method="post">
      <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;"> Username or Password wrong!</p>
      <?php endif; ?>

      <div class="form-group mt-1" style="color: white;">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your Username with anyone else.</small>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="remember">
          <input type="checkbox" name="remember">
          <label for="remember">Remember Me</label>
        </div>
        <div class="registrasi">
          <p>don't have an account? Register <a href="registrasi.php">In here</a></p>
        </div>
        <button class="btn btn-primary text-light" type="submit" name="submit">Login</button>

    </form>
  </div>

  </div>
  


      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>