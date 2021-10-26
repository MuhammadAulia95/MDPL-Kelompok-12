<?php 
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0 ) {
        ?>
            <script type="text/javascript">
                alert("Data Berhasil Ditambahkan!");
            </script>

        <?php
    } else {
        echo mysqli_error($koneksi);
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
                <p>Nama :</p>
                <label for="nama"></label>   
                <input class="text" type="text" name="nama" id="nama" placeholder="Enter your name"><br>
                <p>Email:</p>
                <label for="email"></label>   
                <input class="text" type="text" name="email" id="email" placeholder="Enter your email"><br>     
                <p>NIK:</p>
                <label for="nik"></label>   
                <input class="text" type="text" name="nik" id="nik" placeholder="Enter your NIK"> <br>
                <p>Telepon:</p>
                <label for="telepon"></label>   
                <input class="text" type="text" name="telepon" id="telepon" placeholder="Enter your telp"> <br>
                <p>Password:</p>
                <label for="password"></label>   
                <input class="text" type="password" name="password" id="password"> <br>
                <p>Konfirmasi Password:</p>
                <label for="password2"></label>   
                <input class="text" type="password" name="password2" id="password2"> <br>
                <button type="submit" name="register">Sign up</button>
            </form>
            <p style="text-align: center;">Sudah Punya akun? <a href="login.php">Sign In</a></p>
        </div>
    </div>
</body>
</html> 