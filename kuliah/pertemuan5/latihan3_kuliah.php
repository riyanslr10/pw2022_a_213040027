<?php
// studi kasus

$mahasiswa = [["riyan", "213040017", "mochriyanps@gmail.com", "Teknik Informatika"],
["Fadhil", "213040030", "fadhilafauzan@gmail.com", "Teknik informatika"],
["Haris", "213040020", "harissetiawan@gmail.com", "Teknik informatika"]];



?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama : <?php echo $mhs[0] ?></li>
    <li>NPM : <?php echo $mhs[1] ?></li>
    <li>Email : <?php echo $mhs[2] ?></li>
    <li>Jurusan : <?php echo $mhs[3] ?></li>
</ul>

<?php } ?>