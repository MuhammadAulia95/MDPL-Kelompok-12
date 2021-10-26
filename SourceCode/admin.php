<?php 

// mengambil data dari functions.php
require 'functions.php';
$users1 = query("SELECT * FROM users1");

// tombol cari di klik
if (isset($_POST["cari"])) {
    $users1 = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 	Bootstrap v2.3.2 -->
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/bootstrap-2.3.2.min.css" />
    <!-- Plugin styles -->
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/jquery.dynatable.css" />

    <!--  jQuery v3.0.0-beta1 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>

    <!-- JS Pluging -->
    <script type='text/javascript' src='https://s3.amazonaws.com/dynatable-docs-assets/js/jquery.dynatable.js'></script>
    <style>
        body {
            background-color: #607D8B;
        }
        .container {
            background: #f4f7f0;
            height: auto;
        }
        .isi {
            margin-left: 5%;
        }
        h3 {
            font-family: arial;
            background: #607D8B;
            width: 70%;
            height: 50px;
            color: white;
            padding-top: 10px;
            padding-left: 20%;
        }
        .cari {
            
        }

    </style>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="isi">

    <h3>Daftar Karyawan DEINONY COMPANY</h3>
    
    <a href="register.php">Tambah data karyawan</a>
    <br><br>
    
    <form action="" method="post">
        <div class="cari">
            <input type="text" name="keyword" size="30" autofocus="" placeholder="Cari data..." autocomplete="off">
            <button class="cari" type="submit" name="cari">Cari</button>
        </div>  
    </form>
    
    <table class="tabel" border="1" cellpadding="10" cellspacing="0">
        <h4>Tabel Karyawan</h4>
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>NIK</th>
        </tr>
        
        <?php $i = 1; ?>
        <?php foreach( $users1 as $row ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td> 
                    <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">hapus</a>
                </td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["telepon"]; ?></td>
                <td><?= $row["nik"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
    </div>
</div>
            
        </table>
        
</body>
</html>