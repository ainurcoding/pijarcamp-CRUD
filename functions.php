<?php 

// membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","pijarcamp");
$i = 1;

function query($query) {
    // mengambil variabel conn di luar fungsi dengan lingkup scope global
    global $conn;
    // ambil data
    $result = mysqli_query($conn, $query);

    //membuat wadah kosong untuk nanti disimpan data
    $rows = [];

    //ambil semua data berdasarkan result
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    //kembalikan nilai
    return $rows;
}

function tambah($data){
    global $conn;

    // ambil data dari tiap elemen form

    // fungsi dari htmlspecialchars berfungsi untuk mengantisipasi user memasukkan tag html
    $nama_produk = htmlspecialchars($data["produk"]);
    $keterangan = htmlspecialchars($data["keterangan_produk"]);
    $harga = htmlspecialchars($data["harga_produk"]);
    $keterangan = htmlspecialchars($data["keterangan_produk"]);

    // query insert data
    $query = "INSERT INTO produk 
            (id_produk, nama_produk, keterangan, harga, jumlah)
            VALUES
            (NULL, '$nama_produk', '$keterangan', '$harga', '$keterangan')
    ";
    // insert data
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id = $data["id_produk"];
    $nama = htmlspecialchars($data["produk"]);
    $keterangan = htmlspecialchars($data["keterangan_produk"]);
    $harga = htmlspecialchars($data["harga_produk"]);
    $jumlah = htmlspecialchars($data["jumlah_produk"]);

    // query update data
    $query =  "UPDATE produk SET 
                nama_produk = '$nama',
                keterangan = '$keterangan',
                harga = '$harga',
                jumlah = '$jumlah'
                WHERE id_produk = '$id'
    ";

    // update data
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM produk WHERE id_produk = $id");

    return mysqli_affected_rows($conn);
}
