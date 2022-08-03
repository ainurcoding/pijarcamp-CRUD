<?php 

require 'functions.php';

if ( isset($_POST["submit"])){
    
    // cek data berhasil di tambahkan atau tidak
    if ( tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah data produk</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="produk">Masukkan nama produk:</label>
                <input type="text" name="produk" placeholder="ex : sabun mandi" id="produk" required>
            </li>
            <li>
                <label for="keterangan_produk">Masukkan keterangan produk:</label>
                <input type="text" name="keterangan_produk" placeholder="ex : sabun mandi merek sanzoi terpercaya membuat anda lebih rupawan" id="keterangan_produk" required>
            </li>
            <li>
                <label for="harga_produk">Masukkan harga produk:</label>
                <input type="text" name="harga_produk" placeholder="ex : 10000" id="harga_produk" required>
            </li>
            <li>
                <label for="jumlah_produk">Masukkan harga produk:</label>
                <input type="text" name="jumlah_produk" placeholder="ex : 99" id="jumlah_produk" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
                <button type="button"><a href="index.php">Kembali</a></button>
            </li>
        </ul>
    </form>
</body>
</html>