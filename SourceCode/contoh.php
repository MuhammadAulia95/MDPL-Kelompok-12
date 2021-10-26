<?php

//koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "db_absensi");



function registrasi($data) {
    global $koneksi;

    $nomor_pegawai = $data["nomor_pegawai"];
    $nama_pegawai = $data["nama_pegawai"];
    $alamat = $data["alamat"];
    $no_hp = $data["no_hp"];
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    //validasi username
    $validasi = mysqli_query($koneksi, "SELECT nama_pegawai FROM tb_register WHERE
                nama_pegawai = '$nama_pegawai'");
    if (mysqli_fetch_assoc($validasi)) {
        echo "<script>
                alert('Username sudah terdaftar!')
                </script>";
        return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('Password tidak sesuai!');
                </script>";
        return false;
    }

    //tambah data ke database
    mysqli_query($koneksi, "INSERT INTO tb_register VALUES ('$nomor_pegawai', '$nama_pegawai', '$alamat', 
    '$no_hp', '$password')");

    return mysqli_affected_rows($koneksi);


}


?>
