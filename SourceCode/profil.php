<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

// mengambil data dari functions.php
require 'functions.php';
$users1 = query("SELECT * FROM users1");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    <link rel="stylesheet" href="style-profil.css">
</head>

<body>
    <div class="countainer">
        <!-- Logo Tulisan -->
        <div class="logo">
            <h1>Denony <br> 
                &ensp;&ensp;Company</h1>
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

        <!-- Bagian Content-Profil-->   
        <div class="content">
            <div class="profil">
                <form action="" method="post">
                    <div class="profil">
                        <form action="">
                            <h1 style="margin-left: 58px; margin-top: 30px;">PROFIL:</h1>
                            <hr width="85%;">
                            <table style="padding-left: 50px; font-size: 25px; border-spacing: 20px;">
                                <tr>
                                    <td>Nama</td><td>:</td>
                                    <td><?= $_SESSION["nama"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td><td>:</td>
                                    <td><?= $_SESSION["email"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Telepon</td><td>:</td>
                                    <td><?= $_SESSION["telepon"]; ?></td>
                                </tr>
                                <tr>
                                    <td>NIK</td><td>:</td>
                                    <td><?= $_SESSION["nik"]; ?></td>
                                </tr>                               
                            </table>  
                        </form>                  
                </form>
            </div>
        </div>

    </div>
</body>

</html>