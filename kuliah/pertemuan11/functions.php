<?php 
// koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'pw2022_213040017_a');

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;
    
    $npm = $data["npm"];
    $nama = $data["nama"];
    $email= $data["email"];
    $jurusan = $data["jurusan"];
    $gambar = $data["gambar"];

    $query = "INSERT INTO
                mahasiswa
            VALUES
            (null, '$npm', '$nama', '$email', '$jurusan', '$gambar')
            ";

    mysqli_query($conn, $query) or  die(mysqli_error($conn)) ;

    return mysqli_affected_rows($conn) ;
}


?>

