<?php 
session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
?>

<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// Melakukan query
$stick = query("SELECT * FROM produkstik");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $stick = query("SELECT * FROM produkstik WHERE
                nama_stik LIKE '%$keyword%' OR
                deskripsi_stik LIKE '%$keyword%'
                 ");
} else {
    $stick = query("SELECT * FROM produkstik");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Slayer CONSOLE</title>
    <link rel="icon" href="../assets/img/stikps5.jpg">
    <style>
        .navbar {
            position: fixed;
            width: 100%;
            height: 70px;
            z-index: 999;
            margin-top: -10px;
        }
        body {
            background-color: #aeaeae;
        }

        table {
            background-color: black;
            color: white;
            margin: auto;
            text-align: center;
        }
        .tambah {
            padding-top: 50px;
        }

        .color1 {
            background-color: black;
        }

        .color2 {
            background-color: salmon;
        }

        .color3 {
            background-color: red;
        }

        .add {
            margin-left: 175px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-fixed-top">
      <div class="container">
      <a class="navbar-brand" href="../index.php">Slayer CONSOLE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link" href="admin.php"><h4>Product</h4></a>
          <a class="nav-item nav-link" href="stick.php"><h4>stick</h4></a>
          <a href="logout.php"><button class="btn btn-danger ml-5 mt-1">Logout</button></a>
        </div>
      </div>
      </div>
    </nav>
    <section class="tambah">
    <br>
    <form action="" method="GET" class="add">
        <input type="text" class="my-2 my-sm-0 pl-5 pr-5 pt-1 pb-1" name="keyword" autofocus placeholder="Enter search..." id="keyword">
        <button class="btn btn-primary my-2 my-sm-0" type="submit" name="cari" id="tombol-cari">Search</button>        
    </form>
    <br>
    <div id="container">
    <table border="1" cellpadding="13" cellspacing="0">
        <tr class="color1">
            <th>No</th>
            <th>Img</th>
            <th>Name stick</th>
            <th>description stick</th>
        </tr>
        <?php if(empty($stick)) : ?>
            <tr>
                <td colspan="7">
                    <h1>Data Not Found.</h1>
                </td>
            </tr>
        <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach($stick as $s) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img style="width: 500px;" src ='../assets/img/<?= $s['img']; ?>'></td>
                <td><?= $s['nama_stik']; ?></td>
                <td><?= $s['deskripsi_stik']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </table>
    </div>
    </section>
    
    <footer class="text-white fw-bold text-center pb-1" style="background-color: darkblue;">
      <p>Created By Slayer | <span class="far fa-copyright"></span> 2022 All
        rights reserved.</a></p>
    </footer>

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="../js/script2.js"></script>
</body>
</html>