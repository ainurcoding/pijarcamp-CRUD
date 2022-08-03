<?php 

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

//query data mahasiswa berdasarkan id 
$produk = query("SELECT * FROM produk WHERE id_produk = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum

if ( isset($_POST["submit"])) {
    

    

    // cek data berhasil di ubah atau tidak
    if ( ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
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
    <h1>Ubah data produk</h1>

    <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id_produk" value="<?= $produk['id_produk']; ?>">
        <ul>
            <li>
                <label for="produk">Masukkan nama produk:</label>
                <input type="text" name="produk" placeholder="ex : sabun mandi" id="produk" value="<?= $produk['nama_produk']?>">
            </li>
            <li>
                <label for="keterangan_produk">Masukkan keterangan produk:</label>
                <input type="text" name="keterangan_produk" placeholder="ex : sabun mandi merek sanzoi terpercaya membuat anda lebih rupawan" id="keterangan_produk" value="<?= $produk['keterangan'] ?>">
            </li>
            <li>
                <label for="harga_produk">Masukkan harga produk:</label>
                <input type="text" name="harga_produk" placeholder="ex : 10000" id="harga_produk" value="<?= $produk['harga'] ?>">
            </li>
            <li>
                <label for="jumlah_produk">Masukkan harga produk:</label>
                <input type="text" name="jumlah_produk" placeholder="ex : 99" id="jumlah_produk" value="<?= $produk['jumlah'] ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah data</button>
                <button type="button"><a href="index.php">Kembali</a></button>
            </li>
        </ul>
    </form>
</body>
</html>