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
    
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email= htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO
                mahasiswa
            VALUES
            (null, '$npm', '$nama', '$email', '$jurusan', '$gambar')
            ";

    mysqli_query($conn, $query) or  die(mysqli_error($conn)) ;

    return mysqli_affected_rows($conn) ;
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id =$id") or die
    (mysqli_error($conn));
    return mysqli_affected_rows($conn)
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email= htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET
                npm = '$npm',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHRERE id = $id
            ";

    mysqli_query($conn, $query) or  die(mysqli_error($conn)) ;

    return mysqli_affected_rows($conn) ;
}

?>

