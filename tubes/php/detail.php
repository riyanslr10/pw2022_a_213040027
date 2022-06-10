<?php 
// Mengecek apakah ada id yang di kirimkan
// Jika tidak maka akan di kembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location:../index.php");
    exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yangdi ambil dari url
$produk = query("SELECT * FROM produk WHERE id = $id") [0];
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/stikps5.jpg">
    <title>Detail</title>
    <style>
        body {
            background-image: url(../assets/img/beranda.png);
            background-size: cover;
        }
        table {
            text-align: center;
            margin: 80px 100px;
            background-color: white;
        }
        button.tombol-kembali {
            position: relative;
            margin: auto;
            background-color: red;
        }
        
        td {
            background-color: white;
            color: black;
        }


    </style>
</head>
<body>
<div class="container">
    <table border="1px solid black">
        <tr>
        <td><div class="gambar">
            <img src ='../assets/img/<?= $produk['img']; ?>' width="400">
        </div></td>
        </tr>
        <div class="keterangan">
            <tr>
            <td><p><?= $produk["nama_produk"]; ?></p></td>
            </tr>
            <tr>
            <td><p><?= $produk["deskripsi_produk"]; ?></p></td>
            </tr>
            <tr>
            <td><p><?= $produk["Harga"]; ?></p></td>
            </tr>
            <tr>
            <td><p>stock <?= $produk["stok"]; ?></p></td>
            </tr>
            
            </table>
            <button class="tombol-kembali" style="padding: 10px 20px; border-color: red;"><a href="../index.php" style="color: white;">Back</a></button>|
            <button style="padding: 10px 20px; border-color: green; background-color: green;"><a href="../cetak.php" target="_blank" style="color: white;">  cetak</a></button>
        </div>

        
    </div>


</body>
</html>
 