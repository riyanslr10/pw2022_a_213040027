<?php 
require '../php/functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM produk
            WHERE
            nama_produk LIKE '%$keyword%'
            ";
$produk = query($query);
 ?>
 <table border="1" cellpadding="13" cellspacing="0">
        <tr class="color1">
            <th>No</th>
            <th>Option</th>
            <th>Image</th>
            <th>Name product</th>
            <th>description product</th>
            <th>Price</th>
            <th>Stock</th>
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
                <td>
                    <a href="ubah.php?id=<?= $p['id'] ?>"><button class="color2">Edit</button></a>
                    <a href="hapus.php?id=<?= $p['id'] ?>" onclick="return confirm('Hapus Data??')"><button class="color3">Delete</button></a>
                </td>
                <td><img style="width: 500px;" src ='../assets/img/<?= $p['img']; ?>'></td>
                <td><?= $p['nama_produk']; ?></td>
                <td><?= $p['deskripsi_produk']; ?></td>
                <td><?= $p['Harga']; ?></td>
                <td><?= $p['stok']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </table>