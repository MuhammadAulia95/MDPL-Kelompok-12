<?php 

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
// query data karyawan berdasarkan id
$kwn = query("SELECT * FROM users1 WHERE id = $id")[0];


// cek apakah tombol sumbit sudah di klik apa belum?
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil diubah apa tidak?
    if( ubah($_POST) > 0 ){
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'admin.php';
            </script>

        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'admin.php';
            </script>";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style-register.css">
</head>
<body>
    <div class="card">
        <h1>REGISTER</h1>
        <div class="card-form">
            <form action="" method="post">    
                <input type="hidden" name="id" value="<?= $kwn["id"]; ?>">
                <p>Nama :</p>
                <label for="nama"></label>   
                <input class="text" type="text" name="nama" id="nama" required value="<?= $kwn["nama"]; ?>"><br>
                <p>Email:</p>
                <label for="email"></label>   
                <input class="text" type="text" name="email" id="email" required value="<?= $kwn["email"]; ?>"><br>     
                <p>NIK:</p>
                <label for="nik"></label>   
                <input class="text" type="text" name="nik" id="nik" required value="<?= $kwn["nik"]; ?>"><br>
                <p>Telepon:</p>
                <label for="telepon"></label>   
                <input class="text" type="text" name="telepon" id="telepon" required value="<?= $kwn["telepon"]; ?>"> <br>
                <!-- <p>Password:</p>
                <label for="password"></label>   
                <input class="text" type="password" name="password" id="password"> <br> -->

                <!-- <p>Konfirmasi Password:</p>
                <label for="password2"></label>   
                <input class="text" type="password" name="password2" id="password2" placeholder="Enter your password"> <br> -->

                <button type="submit" name="submit">Ubah data</button>
            </form>
            <p style="text-align: center;">Sudah Punya akun? <a href="login.php">Sign In</a></p>
        </div>
    </div>
</body>
</html> 