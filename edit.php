<?php
//include('config.php');
include('config.php');

$id = $_GET['id'];

$Id_Buku = $_GET['id_bk'];
$Kategori = $_GET['kategori_bk'];
$Nama_Buku = $_GET['nama_bk'];
$Harga = $_GET['harga_bk'];
$Stok = $_GET['stok_bk'];
$Id_Penerbit = $_GET['id_penerbit_bk'];


//query update
$query = "UPDATE buku SET id_buku='$Id_Buku' , kategori='$Kategori' , nama_buku='$Nama_Buku' , harga='$Harga', stok='$Stok', id_penerbit='$Id_Penerbit' WHERE id_buku='$id' ";

if (mysqli_query($koneksi, $query)) {
    # credirect ke page index
    header("location:admin.php");
} else {
    echo "ERROR, data gagal diupdate" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
