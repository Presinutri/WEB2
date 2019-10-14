<?php
  include 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tambah</title>
  </head>
  <body>
    <div class="container">
      <h1>Tambah</h1>

      <form action="create.php" method="POST">
        <div class="form-group">
          <label>Kategori</label>
          
          <select class="form-control" name="id_kategori">
                <?php
                $querylist = "SELECT * FROM kategori";
                if ($result = $mysqli->query($querylist)) {
                    while ($row = $result->fetch_assoc()){
                ?>
                      <option value="<?= $row['id_kategori']; ?>">
                        <?= $row['nama']; ?>
                      </option>
                <?php 
                    }
                    $result->free();
                }
                $mysqli->close();
                ?>
          </select>
          
        </div>

        <div class="form-group">
          <label>Produk</label>
          <input type="text" name="nama" class="form-control" placeholder="Enter Produk">
        </div>

        <div class="form-group">
          <label>Harga</label>
          <input type="number" name="harga" class="form-control" placeholder="Enter Harga">
        </div>

        <input type="submit" class="btn btn-primary" name="submit" value="Simpan">

      </form>

    </div>
  </body>
</html>