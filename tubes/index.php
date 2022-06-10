<?php 
    // Melakukan Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");

    // Memilih databse
    mysqli_select_db($conn, "tubes_213040017") or die("database salah");

    // query mengambil objek dari tabel di dalam database
    $result = mysqli_query($conn, "SELECT * FROM produk");

    // menghubungkandengan file php lainnya
    require 'php/functions.php';

    // melakukan query
    $produk = query("SELECT * FROM produk");

    if (isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $produk = query("SELECT * FROM produk WHERE
                    nama_produk LIKE '%$keyword%' OR
                    deskripsi_produk LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%' OR
                    stok LIKE '%$keyword%' ");
    } else {
        $produk = query("SELECT * FROM produk");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../Tubes/css/style.css">
    <link rel="icon" href="assets/img/stikps5.jpg">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />


    <title>slayer CONSOLE</title>
    <style>
      html {
        scroll-behavior: smooth;
      }
      .navbar {
        position: fixed;
        width: 100%;
        height: 70px;
        z-index: 999;
      }

      .banner {
        background-image: url(../Tubes/assets/img/banner.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        padding: 250px 0;
        color: #007bff;
        text-align: center;
        background-attachment: fixed;
      }
      .banner h1{
        color: white;
        font-size: 70px;
      }
      .banner button {
        padding: 10px 20px;
        border-radius: 5px;
        background-color: #007bff;
        border-color: #007bff;
        color: white;
      }
      .banner button a {
        color: white;
      }

      .product h2{
        text-align: center;
        color: white;
        padding-top: 20px;
      }

      
      .address {
        color: white;
        padding-bottom: 50px;
      }

      .contact {
        background-color: #0575e6;
      }

      .contact .container {
        padding: 170px 0;
      }

.contact form {
  background-color: black;
  padding: 30px;
  padding-bottom: 100px;
  border-radius: 10px;
}
    </style>
  </head>
  <body style="background-color: black;">
  <nav class="navbar navbar-expand-lg bg-dark navbar-fixed-top">
      <div class="container">
      <a class="navbar-brand" href="#Home">Slayer CONSOLE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="#Home"><h4>Home</h4></a>
          <a class="nav-item nav-link" href="#product"><h4>Product</h4></a>
          <a class="nav-item nav-link" href="#address"><h4>Address</h4></a>
          <a class="nav-item nav-link" href="#contact"><h4>Contact</h4></a>
          <a class="nav-item nav-link" href="php/login.php"><h4>Login</h4></a>
        </div>
      </div>
      </div>
    </nav>

    <!-- Home -->
    <section class="Home" id="Home">
    <div class="banner">
      <h2>Welcome To My Website</h2>
      <h1 class="auto-type">Slayer CONSOLE</h1>
      <button> <a class="nav-link fw-bold" href="#product">Product</a></button>
    </div>
    </section>






    <!-- product -->
    <section class="product" id="product">
    <div class="container" id="bg-index" >
      <h2 data-aos="fade-left">Product</h2>
            <div class="row" id="container" style="padding-top: 20px;" data-aos="fade-right">
                <?php foreach ($produk as $p) : ?>
                    <div class="col-md-4 ">
                        <p class="nama ">
                            <div class="card mt-3 mb-4 ml-5" style="width: 18rem;">
                                <img class="card img-fluid max-foto" src="assets/img/<?= $p['img']; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $p['nama_produk']; ?></h5>
                                    <a href="php/detail.php?id=<?= $p['id']; ?>" class="btn btn-primary">Detail</a>
                                </div>
                            </div>

                        </p>
                    </div>
                    
                <?php endforeach; ?>
            </div>
        </div>
        </section>
   <br>

   <!--address-->
   <section class="address" id="address">
      <div class="container-fluid">
        <div class="container" style="background-color: darkblue; padding-left: 70px; padding-bottom: 50px; border-radius: 20px;">
          <h2 class="display-3 text-center fw-bold" data-aos="fade-in">Address</h2>
          <p class="text-center fw-bold" style="color: #007bff" data-aos="fade-in">Slayer CONSOLE</p>
          <div class="clearfix pt-5">
            <div class="box aos-animate" data-aos="fade-left" >
              <iframe class="maps"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5965.2574607223805!2d107.59530831387261!3d-6.859364049051173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x77b3fded0da810ee!2zNsKwNTEnMzIuOCJTIDEwN8KwMzUnNDcuOCJF!5e0!3m2!1sen!2sid!4v1640762241739!5m2!1sen!2sid"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
              ></iframe>
            </div>
            <h1 class="fs-5 fw-bold aos-animate" data-aos="fade-right">
            <i class="fas fa-map-marker-alt"></i>
              Bandung, Ledeng, Cidadap, <br />Bandung City, West Java 40143
            </h1>
          </div>
        </div>
      </div>
    </section>
    <!--ahir address-->

     <!--contact-->
     <section class="contact" id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2 style="color: white" data-aos="fade-right">Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form style="text-align: center;" data-aos="fade-left">
              <div class="mb-3">
                <label class="form-label" style="color: #007bff" 
                  >Name : MOCH RIYAN PUTRA SURYADI</label
                >
              </div>
              <div class="mb-3">
                <label class="form-label" style="color: #007bff"
                  >Email : mochriyanps@gmail.com</label
                >
              </div>
              <div class="mb-3">
                <label class="form-label" style="color: #007bff"
                  >No HP : 0812xxxxxxxx</label
                >
              </div>
              <div class="mb-3">
                <label class="form-label" style="color: #007bff"
                  >Instagram : riyan_slr10</label
                >
              </div>
              <div class="mb-3">
                <label class="form-label" style="color: #007bff"
                  >Address : Bandung, Ledeng, Cidadap, <br />Bandung City, West Java 40143</label
                >
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--ahir contact-->
    

   <footer class="text-white fw-bold text-center pb-1" style="background-color: darkblue;">
      <p>Created By Slayer | <span class="far fa-copyright"></span> 2022 All
        rights reserved.</a></p>
    </footer>
     

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="js/script2.js"></script>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>