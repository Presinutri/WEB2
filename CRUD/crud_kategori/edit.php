<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit</title>
  </head>
  <body>
    <div class="container">
      <h1>Edit</h1>
      <form action="update.php" method="POST">
        <?php
            include 'koneksi.php';
            $id_kategori = $_GET['id_kategori'];
            $query = "SELECT id_kategori, nama FROM kategori WHERE id_kategori = '$id_kategori'";
            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
        ?>
        <div class="form-group">
          <label>Kategori</label>
          <input type="text" name="nama" class="form-control" placeholder="Enter kategori" value="<?=$row['nama']?>">
          <input type="hidden" name="id_kategori" value="<?=$row['id_kategori']?>">
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
        <?php
              }
              //free result set (optional)
              $result->free();
          }
          $mysqli->close();
        ?>
      </form>
    </div>
  </body>
</html>