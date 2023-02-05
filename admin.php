<?php

include('config.php');

$sql = "SELECT * FROM buku INNER JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit";
$query = mysqli_query($koneksi, $sql);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

</head>

<body>
    <?php

    include 'menu.php';

    ?>

    <!-- Menu Navbar -->
    <div class="page-header">
        <h2>
            <center>ADMIN</center>
        </h2>
    </div>

    <!-- bagian tambah data -->
    <div class="container" style="padding-top: 10px; padding-bottom: 10px;">
        <div class="row">
            <div class="col-sm-3">
                <h3 style="padding-top: 40px">Form Tambah Buku</h3>
                <form role="form" action="insert.php" method="post">
                    <div class="form-group">
                        <input type="text" name="id_bk" class="form-control" placeholder="Id Buku">
                    </div>
                    <div class="form-group">
                        <input type="text" name="kategori_bk" class="form-control" placeholder="Kategori">
                    </div>
                    <div class="form-group">
                        <input type="text" name="nama_bk" class="form-control" placeholder="Nama Buku">
                    </div>
                    <div class="form-group">
                        <input type="text" name="harga_bk" class="form-control" placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <input type="text" name="stok_bk" class="form-control" placeholder="Stok">
                    </div>
                    <div class="form-group">
                        <input type="text" name="id_penerbit_bk" class="form-control" placeholder="Id Penerbit">
                    </div>
                    <button type="submit" name="tambah_buku" class="btn btn-info">Tambah Buku</button>
                </form>
            </div>


            <!-- Views Data -->
            <div class="col-sm-9">
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
                            <th>Aksi</th>
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
                                <td>
                                    <a href="editform.php?id=<?php echo $data['id_buku']; ?>" class="btn btn-success" role="button">Edit</a>
                                    <a href="delete.php?id=<?php echo $data['id_buku'] ?>" class="btn btn-danger" role="button">Delete</a>
                                </td>
                            </tr>

                        <?php
                        }
                        mysqli_close($koneksi);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>