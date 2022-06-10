<?php


require_once __DIR__ . '/vendor/autoload.php';
require 'php/functions.php';

    // melakukan query
    $produk = query("SELECT * FROM produk");

$mpdf = new \Mpdf\Mpdf();
$html ='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data product</title>
</head>
<body>
    <h1>Data Product</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
        <td>Img</td>
        <div class="keterangan">
            <td>Name Product</td>
            <td>Description Product</td>
            <td>price</td>
            <td>stock</td>
            </tr>';
            
            
            foreach ( $produk as $p) {
                $html .= '<tr>
                    <td><img width="100" src="assets/img/'. $p["img"] .'"></td>
                    <td>'. $p["nama_produk"] .'</td>
                    <td>'. $p["deskripsi_produk"] .'</td>
                    <td>'. $p["Harga"] .'</td>
                    <td>'. $p["stok"] .'</td>
                </tr>';
            }
            
            $html .= '</table>
</body>
</html>
';

$mpdf->WriteHTML($html);


$mpdf->Output();


?>