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

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    
  <div class="container">
      <h1>Daftar Mahasiswa</h1>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 1; foreach($mahasiswa as $mhs) { ?>
    <tr class="align-middle">
      <th scope="row"><?= $no++; ?></th>
      <td><img src="<?php echo $mhs["gambar"] ?>" alt="" width="50" class="rounded-circle"></td>
      <td><?php echo $mhs["nama"] ?></td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
          <a href="kuliah_latihan4.php?gambar=<?= $mhs["gambar"];?>&nama=<?= $mhs["nama"];?>&email=<?= $mhs["email"];?>&npm=<?= $mhs["npm"];?>&jurusan=<?= $mhs["jurusan"];?>" class="btn badge bg-info">detail</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
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