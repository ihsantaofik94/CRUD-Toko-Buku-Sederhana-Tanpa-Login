<!DOCTYPE html>
<html lang="en">

<head>
    <title>EDIT DATA BUKU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

    <?php
    //koneksi database
    include('config.php');

    $id = $_GET['id'];

    //query
    $sql = "SELECT * FROM buku WHERE id_buku='$id'";
    $query = mysqli_query($koneksi, $sql);

    ?>

    <div>
        <div class="col-sm-3"></div>
        <div class="col-sm-6 container" style="padding-top: 20px; padding-bottom: 20px;">
            <h3>Edit Data Buku</h3>
            <form role="form" action="edit.php" method="get">
                <input type="hidden" name="id" value="<?php echo $id ?>">

                <?php
                while ($data = mysqli_fetch_assoc($query)) {

                ?>
                    <div class="form-group">
                        <label>Id Buku</label>
                        <input type="text" name="id_bk" class="form-control" value="<?php echo $data['id_buku']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" name="kategori_bk" class="form-control" value="<?php echo $data['kategori']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Nama Buku</label>
                        <input type="text" name="nama_bk" class="form-control" value="<?php echo $data['nama_buku']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga_bk" class="form-control" value="<?php echo $data['harga']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" name="stok_bk" class="form-control" value="<?php echo $data['stok']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" name="id_penerbit_bk" class="form-control" value="<?php echo $data['id_penerbit']; ?>">
                    </div>
                    <button type="submit" class="btn btn-success">EDIT</button>

                <?php
                }
                mysqli_close($koneksi);
                ?>
            </form>
        </div>
    </div>

</body>

</html>