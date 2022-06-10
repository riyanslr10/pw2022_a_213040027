<?php
// Array associative
// Array yang indexnya berupa string yang ber-asosiasi dengan nilai nya

$mahasiswa = [
[
"nama" => "riyan", 
"npm" => "213040017", 
"email" => "mochriyanps@gmail.com", 
"jurusan" => "Teknik Informatika"
],
[
"nama" => "Fadhil", 
"npm" => "213040030", 
"email" => "fadhilafauzan@gmail.com", 
"jurusan" => "Teknik informatika"
],
[
"nama" => "Haris", 
"npm" => "213040020", 
"email" => "harissetiawan@gmail.com", 
"jurusan" => "Teknik informatika"
],
[
"nama" => "Gilang", 
"npm" => "21304003", 
"email" => "gilang@gmail.com", 
"jurusan" => "Teknik informatika"]];

// var_dump(($mahasiswa[3]["nilai_tugas"]["tugas_2"]));

?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama : <?php echo $mhs["nama"] ?></li>
    <li>NPM : <?php echo $mhs['npm'] ?></li>
    <li>Email : <?php echo $mhs["email"] ?></li>
    <li>Jurusan : <?php echo $mhs["jurusan"] ?></li>
</ul>

<?php } ?>