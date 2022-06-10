<?php 
require '../php/functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM produkstik
            WHERE
            nama_stik LIKE '%$keyword%'
            ";
$produk = query($query);
 ?>
 <table border="1" cellpadding="13" cellspacing="0">
        <tr class="color1">
            <th>No</th>
            <th>Image</th>
            <th>Name product</th>
            <th>description product</th>
        </tr>
        <?php if(empty($produk)) : ?>
            <tr>
                <td colspan="7">
                    <h1>Data Not Found.</h1>
                </td>
            </tr>
        <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach($produk as $p) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img style="width: 500px;" src ='../assets/img/<?= $p['img']; ?>'></td>
                <td><?= $p['nama_stik']; ?></td>
                <td><?= $p['deskripsi_stik']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </table>