<?php
//add dbconnect

include('config.php');


$Id_Buku = $_POST['id_bk'];
$Kategori = $_POST['kategori_bk'];
$Nama_Buku = $_POST['nama_bk'];
$Harga = $_POST['harga_bk'];
$Stok = $_POST['stok_bk'];
$Id_Penerbit = $_POST['id_penerbit_bk'];

//query

$query =  "INSERT INTO buku(id_buku , kategori , nama_buku , harga, stok, id_penerbit) VALUES('$Id_Buku' , '$Kategori' , '$Nama_Buku' , '$Harga', '$Stok', '$Id_Penerbit')";

// $query = mysqli_query($koneksi, $sql);

if (mysqli_query($koneksi, $query)) {
    # code redicet setelah insert ke index
    header("location:admin.php");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
