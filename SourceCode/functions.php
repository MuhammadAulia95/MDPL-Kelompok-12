<?php 

$conn = mysqli_connect("localhost", "root", "", "mdpl");
 

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// =========== FUNCTION TAMBAH DATA =============
//function tambah($data) {
  //  global $conn;

    //$nama = htmlspecialchars($data["nama"]);
    //$email = htmlspecialchars($data["email"]);
    //$jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    //$telepon = htmlspecialchars($data["telepon"]);
    //$nik = htmlspecialchars($data["nik"]);

    //$query = "INSERT INTO karyawan1
      //          VALUES
        //        (null, '$nama', '$email', '$jenis_kelamin', '$telepon', '$nik' )
          //  ";
    //mysqli_query($conn, $query);

    //return mysqli_affected_rows($conn);
//}
// =============================================

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM users1 WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $nik = htmlspecialchars($data["nik"]);
    $telepon = htmlspecialchars($data["telepon"]);

    $query = "UPDATE users1 SET
                nama = '$nama',
                email = '$email',
                nik = '$nik',
                telepon = '$telepon'
                WHERE id =  $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM users1
                WHERE
                nama LIKE '%$keyword%'
            ";
    return query($query);
}


function registrasi($data) {
    global $conn;

    $nama = strtolower(stripslashes($data["nama"]));
    $email = $data["email"];
    $nik = $data["nik"];
    $telepon = $data["telepon"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum?
    $result = mysqli_query($conn, "SELECT nama FROM users1 WHERE nama = '$nama'");
    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('nama sudah terdaftar!');
            </script>";
        return false;
    }

    // cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }
    
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO users1 VALUES(null, '$nama', '$email', '$nik', '$telepon', '$password')");

    return mysqli_affected_rows($conn);
}

?>