<?php 

// mengambil data dari functions.php
require 'functions1.php';
$keterangan = query("SELECT * FROM keterangan");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Presensi</title>
</head>
<body>
    <h3>" Data Presensi Karyawan "</h3>
    
    <table class="tabel" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Keterangan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $keterangan as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="hapuss.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">hapus</a>
            </td>
            <td><?= $row["nama"];  ?></td>
            <td><?= $row["keterangan"];  ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>


</body>
</html>