<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Read</title>
  </head>
  <body>
    <div class="container">
      <h1>Read <a href="tambah.php" class="btn btn-primary">tambah</a></h1>
      <table class="table table-bordered table-hover">
        <thead>
          <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">Kategori</th>
            <th scope="col" colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'koneksi.php';
            $query = "SELECT id_kategori, nama FROM kategori";
            // if ($result = mysqli_query($mysqli2, $query)) {
            if ($result = $mysqli->query($query)) {
                // while ($row = mysqli_fetch_assoc($result)) {
                while ($row = $result->fetch_assoc()) {
                  //loop here
          ?>
                  <tr>
                    <th scope="row"><?php echo $row['id_kategori']?></th>
                    <td><?=$row['nama']?></td>
                    <td width="1"><a href="edit.php?id_kategori=<?=$row['id_kategori']?>" class="btn btn-success">Edit</a></td>
                    <td width="1"><a href="delete.php?id_kategori=<?=$row['id_kategori']?>" class="btn btn-danger">Delete</a></td>
                  </tr>
          <?php
                }
                //free result set (optional)
                // mysqli_free_result($result);
                $result->free();
            }
            // mysqli_close($mysqli2);
            $mysqli->close();
          ?>
        </tbody>
      </table>
    </div>  
  </body>
</html>