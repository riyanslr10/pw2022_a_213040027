<?php 
session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
?>

<?php  
require 'functions.php';

if(isset($_POST['tambah'])) {
    if(tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil ditambahkan!');
                documment.location.href = 'admin.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'admin.php';
              </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../assets/img/stikps5.jpg">
    <title>Slayer CONSOLE</title>
    <style>
        .container{
            background-image: url(../assets/img/login.jpg);
            background-size: cover;
            padding-bottom: 200px;
        }
        h3 {
            text-align: center;
            padding-top: 100px;
            font-size: 30px;
            color: white;
        }
        form{
            text-align: center;
            font-size: 20px;
            border: 3px solid;
            margin: 0 300px;
            padding: 20px 0;
            background-color: white;
        }
        input {
            padding: 10px 40px;
        }
        button {
            padding: 10px;
            border-radius: 5px;
            color: white;
            background-color: blue;
            border-color: blue;
        }
    </style>
</head>
<body>
    <div class="container">

    <h3>Form Add Data Product</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="img">Image :</label><br>
                <input type="file" name="img" id="img" class="Foto" onchange="previewImage()" ><br><br>
            </li>
            <li>
                <label for="nama">Name Product :</label><br>
                <input type="text" name="nama_produk" id="nama" required><br><br>
            </li>
            <li>
                <label for="rasa">Description Product :</label><br>
                <input type="text" name="deskripsi_produk" id="deskripsi" style="padding: 50px 70px;" required><br><br>
            </li>
            <li>
                <label for="exp">Price :</label><br>
                <input type="text" name="harga" id="harga" required><br><br>
            </li>
            <li>
                <label for="stok">Stock :</label><br>
                <input type="text" name="stok" id="stok" required><br><br>
            </li>
            <br>
            <button type="submit" name="tambah">Add Data</button>
            <button type="submit" style="background-color: red; border-color: red;">
                <a href="admin.php" style="color: white;">Back</a>
            </button>
        </ul>
    </form>
    
    </div>
    
</body>
</html>