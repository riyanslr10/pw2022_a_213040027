<?php
$mahasiswa = [
    [
    "nama" => "riyan", 
    "npm" => "213040017", 
    "email" => "mochriyanps@gmail.com", 
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/mentahan.jpg",
    "no" => "1"
    ],
    [
    "nama" => "Fadhil", 
    "npm" => "213040030", 
    "email" => "fadhilafauzan@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/ryn.jpg",
    "no" => "2"
    ],
    [
    "nama" => "Haris", 
    "npm" => "213040020", 
    "email" => "harissetiawan@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/1.jfif",
    "no" => "3"
    ],
    [
    "nama" => "Gilang", 
    "npm" => "21304003", 
    "email" => "gilang@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/2.jfif",
    "no" => "4"
    ],
    [
    "nama" => "Asep", 
    "npm" => "21304003", 
    "email" => "gilang@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/2.jfif",
    "no" => "5"
    ],
    [
    "nama" => "Wahyu", 
    "npm" => "21304003", 
    "email" => "gilang@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/2.jfif",
    "no" => "6"
    ],
    [
    "nama" => "haikal", 
    "npm" => "21304003", 
    "email" => "gilang@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/2.jfif",
    "no" => "7"
    ],
    [
    "nama" => "deral", 
    "npm" => "21304003", 
    "email" => "gilang@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/2.jfif",
    "no" => "8"
    ],
    [
    "nama" => "babang", 
    "npm" => "21304003", 
    "email" => "gilang@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/2.jfif",
    "no" => "9"
    ],
    [
    "nama" => "nizar", 
    "npm" => "21304003", 
    "email" => "gilang@gmail.com", 
    "jurusan" => "Teknik informatika",
    "gambar" => "img/2.jfif",
    "no" => "10"
    ]];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail Mahasiswa</title>
  </head>
  <body>
    
  <div class="container">
      <h1>Detail Mahasiswa</h1>
      <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= $_GET["gambar"]; ?>" class="img-fluid rounded-start" >
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $_GET["nama"]; ?></h5>
        <p class="card-text"><?= $_GET["npm"]; ?></p>
        <p class="card-text"><?= $_GET["email"]; ?></p>
        <p class="card-text"><?= $_GET["jurusan"]; ?></p>

        <a href="kuliah_latihan3.php">kembali</a>

      </div>
    </div>
  </div>
</div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>