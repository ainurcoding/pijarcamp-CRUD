<?php 


// memanggil file function
require 'functions.php';

// gunakan fungsi yang sudah dibuat
$produk = query("SELECT * FROM produk order by id_produk ASC");

// var_dump($produk);
// die;




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pijarcamp CRUD</title>
</head>
<body>
    <h1>PijarCamp CRUD : by Ainur Ridwan</h1>
    <a href="tambah.php">tambah data produk</a>
    <br> <br>

    <div class="container">
        <table border="1" cellpadding="10" cellspacin="0">
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
            </tr>
            <?php foreach($produk as $row) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><button><a href="ubah.php?id=<?= $row['id_produk'] ?>">Ubah</a></button>| |<button><a href="hapus.php?id=<?= $row['id_produk'] ?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini ?');">Hapus</a></button></td>
                <td><?= $row['nama_produk'] ?></td>
                <td><?= $row['keterangan'] ?></td>
                <td><?= $row['harga'] ?></td>
                <td><?= $row['jumlah'] ?></td>
            </tr>
            <?php $i++; endforeach; ?>
        </table>
    </div>

</body>
</html>