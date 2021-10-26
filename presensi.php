<?php 
require 'functions1.php';

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

if (isset($_POST["presensi"])) {

    if (registrasi($_POST) > 0 ) {
        ?>
            <script type="text/javascript">
                alert("Kamu Berhasil Presensi");
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
    <title>Halaman Presensi</title>
    <link rel="stylesheet" href="style-presensi.css">
</head>

<body>
    <div class="countainer">
        <!-- Logo Tulisan -->
        <div class="logo">
            <h1>Denony <br> 
                &ensp;&ensp;Company</h1>
            <div class="vl"></div>
            <div class="vl"></div>
        </div>
        <hr style="color: white">

        <!-- Side Bar -->
        <div class="side-bar">            
            <a href="profil.php"><img src="Profile.png" width="40px;"> <h3>PROFIL</h3></a>           
            <a href="presensi.php"><img src="Presensi.png"  width="40px;" style="margin-top: 18px;"><h3>PRESENSI</h3></a>
        </div>

        <!-- Tombol Log Out -->
        <div class="logout">        
            <a href="logout.php"><img src="Logout.png" style="width:40px;"><h1>Log Out</h1></a>
        </div>

        <!-- Bagian Presensi-->
        <div class="content">
            <div class="profil">
                <form action="" method="post" name="form">

                     <h1 style="margin-left: 58px; margin-top: 40px;">PRESENSI</h1>
                     <hr width="85%;">

                     <h3 style="margin-top: 40px;">Nama</h3>
                     <input type="text" name="nama" id="nama" style="margin-left: 58px;">
                     <label for="nama"></label>

                     <h3 style="margin-top: 20px;">Keterangan</h3>
                     <input type="text" name="keterangan" id="keterangan" style="margin-left: 58px;">
                     <label for="keterangan"></label>
                     <br><br><br>

                    <button type="submit" name="presensi">Presensi</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>