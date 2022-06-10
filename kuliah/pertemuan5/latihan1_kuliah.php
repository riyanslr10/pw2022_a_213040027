<?php
// ARRAY
// Array adalah variable yang dapat menampung lebih dari satu nilai sekaligus

$hari1 = "Senin";
$hari2 = "Selasa";

$bulan1 = "Januari";
$bulan12 = "Desember";

// Membuat ARRAY
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at"]; // cara baru
$bulan = array("Januari", "Februari", "Maret"); // cara lama
$myArray = [100, "Riyan", true];


// Mencetak ARRAY
// mencetak 1 elemen / nilai menggunakan indexnya, index di dalam php dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

// Mencetak semua elemen pada ARRAY
// var_dump() atau print_r()
// Khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// cara mencetak menggunakan looping
// for
for($i = 0; $i < count($hari); $i++){
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// foreach (Khusus untuk array)
foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}

echo "<br>";

foreach ($hari as $a => $b) {
    echo "key: $a, value: $b";
    echo "<br>";
}
echo "<hr>";

// Memanipulasi isi Array
// Menambahkan elemen baru di akhir Array
$hari[] = "Sabtu";
$hari[] = "Minggu";
var_dump($hari);

?>