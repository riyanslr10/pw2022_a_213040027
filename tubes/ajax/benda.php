<?php 
require '../php/functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM produk
            WHERE
            nama_produk LIKE '%$keyword%'
            ";
$produk = query($query);
 ?>

<?php foreach ($produk as $p) : ?>
                    <div class="col-md-4">
                        <p class="nama">
                            <div class="card mt-3  mb-4 ml-5" style="width: 18rem;">
                                <img class="card img-fluid max-foto" src="assets/img/<?= $p['img']; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $p['nama_produk']; ?></h5>
                                    <a href="php/detail.php?id=<?= $p['id']; ?>" class="btn btn-primary">Detail</a>
                                </div>
                            </div>

                        </p>
                    </div>
                <?php endforeach; ?>