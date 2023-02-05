<?php

$koneksi = mysqli_connect("localhost", "root", "", "data");

if (mysqli_connect_errno()) {
    echo "Koneksi Gagal: " . mysqli_error($koneksi);
}
