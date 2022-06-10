<?php 
// function untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_213040017") or die("Database salah!");

    return $conn;
}

// function untuk melakukan query ke database
function query($sqL){
    $conn = koneksi();
    $result = mysqli_query($conn , "$sqL");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// fungsi untuk menambabhkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama_produk']);
    $deskripsi = htmlspecialchars($data['deskripsi_produk']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);

    // upload gambar
    $img = upload();
    if( !$img) {
        return false;
    }


    $query = "INSERT INTO produk
                    VALUES
                    ('', '$img', '$nama', '$deskripsi', '$harga', '$stok')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload() {

    $namaFile = $_FILES['img']['name'];
    $ukuranFile = $_FILES['img']['size'];
    $error = $_FILES['img']['error'];
    $tmpName = $_FILES['img']['tmp_name'];

    //cek apakah tidak ada gambar yg di upload
    if( $error === 4 ) {
        echo "<script>
        alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    //cek apakah yg diupload adalah gambar
    $imgValid = ['jpg', 'jpeg' ,'png'];
    $img = explode('.', $namaFile);
    $img = strtolower(end($img));
    if ( !in_array($img, $imgValid)) {
        echo "<script>
        alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }


    //cek jika ukuran terlalu besar
    if ( $ukuranFile > 1000000 ) {
        echo "<script>
        alert('Ukuran gambar terlalu besar!');
        </script>";
        return false;
    }

    //lolos pengecekan, gambar siap diupload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $img;



    move_uploaded_file($tmpName, '../assets/img/' . $namaFileBaru);

    return $namaFileBaru;



}



// fungsi untuk mengahapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM produk WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// fungsi untuk mengubah data
function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $imgLama = htmlspecialchars($data['imgLama']);
    $nama = htmlspecialchars($data['nama_produk']);
    $deskripsi = htmlspecialchars($data['deskripsi_produk']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);

    //cek apakah user pilih gambar baru atau tidak
    
    if ( $_FILES['img']['error'] === 4 ) {
        $img = $imgLama;
    } else {
        $img = upload();
    }



    $query = "UPDATE produk SET
    img = '$img',
    nama_produk = '$nama',
    deskripsi_produk = '$deskripsi',
    Harga = '$harga',
    stok = '$stok'
    WHERE id = '$id' ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script> 
                alert(username sudah digunakan');
                </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query_tambah = "INSERT INTO user VALUES('','$username','$password','user')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM produk
                 WHERE
                 nama_produk LIKE '%$keyword%' OR
                 deskripsi_produk LIKE '%$keyword%'
                ";
            return query($query);
}
?>