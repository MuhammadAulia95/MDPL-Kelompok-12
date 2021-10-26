<?php 
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "keteranganmdpl");
 

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM keterangan WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function registrasi($data) {
    global $conn;

    $nama = strtolower(stripslashes($data["nama"]));
    $keterangan = strtolower(stripslashes($data["keterangan"]));

    

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO keterangan VALUES(null, '$nama', '$keterangan')");

    return mysqli_affected_rows($conn);
}

?>