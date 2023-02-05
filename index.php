<?php

include 'config.php';

$sql = "SELECT * FROM buku INNER JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit";
$query = mysqli_query($koneksi, $sql);

?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>

<body>
    <?php
    include('menu.php');
    ?>

    <!-- Menu Navbar -->
    <div class="page-header">
        <h2>
            <center>HOME</center>
        </h2>
    </div>

    <!-- Menampilkan data Dari Database -->
    <div>
        <div class="col-sm-1"></div>

        <div class="col-sm-10">
            <h3>Tabel Daftar Buku</h3>
            <table class="table table-striped table-hover dtabel">
                <thead>
                    <tr>
                        <th>Id Buku</th>
                        <th>Kategori</th>
                        <th>Nama Buku</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Penerbit</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $data['id_buku'] ?> </td>
                            <td><?php echo $data['kategori'] ?> </td>
                            <td><?php echo $data['nama_buku'] ?> </td>
                            <td><?php echo $data['harga'] ?> </td>
                            <td><?php echo $data['stok'] ?> </td>
                            <td><?php echo $data['nama_penerbit'] ?> </td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</body>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('.dtabel').DataTable();
    });
</script>

</html>