<?php

include 'config.php';

$sql = "SELECT * FROM buku INNER JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit ORDER BY stok ASC LIMIT 4";
$query = mysqli_query($koneksi, $sql);

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGADAAN</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

</head>

<body>
    <?php
    include('menu.php');
    ?>
    <div class="page-header">
        <h2>
            <center>PENGADAAN</center>
        </h2>
    </div>
    <div>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h3 style="padding-top: 10px; padding-bottom: 10px">Buku yang Perlu di Beli dari Stok yang Paling Sedikit</h3>
            <table class="table table-striped table-hover dtabel">
                <thead>
                    <tr>
                        <th>Nama Buku</th>
                        <th>Penerbit</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $data['nama_buku'] ?> </td>
                            <td><?php echo $data['nama_penerbit'] ?> </td>
                            <td><?php echo $data['stok'] ?> </td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>