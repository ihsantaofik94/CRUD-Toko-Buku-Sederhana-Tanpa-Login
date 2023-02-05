<?php
//include(config.php);
include('config.php');

$id = $_GET['id'];

//query hapus
$query = "DELETE FROM buku WHERE id_buku = '$id' ";

if (mysqli_query($koneksi, $query)) {
    # redirect ke index.php
    header("location:admin.php");
} else {
    echo "ERROR, data gagal dihapus" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
