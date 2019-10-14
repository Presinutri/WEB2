<?php
	include 'koneksi.php';

	$id = $_GET['id_produk'];
	$queryKategori = "SELECT * FROM kategori";
	$queryProduk = "SELECT * FROM produk WHERE id_produk=$id";
	$query = "SELECT id_kategori FROM produk JOIN kategori USING(id_kategori) WHERE id_produk=$id;";
	$id_kategori;
	if ($result = $mysqli->query($query)) {
	    while ($row = $result->fetch_assoc()){
	        $id_kategori = $row['id_kategori'];
	    }
	    $result->free();
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Edit</title>

</head>
<body>
	<div class="container">
		<h1>Edit</h1>
		<form action="update.php" method="POST">
			
			<div>
				<label>Kategori</label>
				<select class="form-control" name="id_kategori">
	                <?php
		                if ($result = $mysqli->query($queryKategori)) {
		                    while ($row = $result->fetch_assoc()){
		                        if ($row['id_kategori'] == $id_kategori) {
		                    
		            ?>
		                       		<option selected="" value="<?= $row['id_kategori']; ?>"><?= $row['nama']; ?></option>
		                            <?php
		                        } else {
		                            ?>
		                            <option value="<?= $row['id_kategori']; ?>"><?= $row['nama']; ?></option>
		                <?php
		                        }
		                    }
		                    $result->free();
		                } 
		                ?>
          		</select>

          		<?php
					if ($result = $mysqli->query($queryProduk)){
            			while ($row = $result->fetch_assoc()){
				?>

				<label>Produk</label>
				<input type="text" name="nama" class="form-control" placeholder="Enter produk" value="<?=$row['nama']?>">

				<label>Harga</label>
				<input type="number" name="harga" class="form-control" placeholder="Enter harga" value="<?=$row['harga']?>">
				<input type="hidden" name="id_produk" value="<?=$row['id_produk']?>">
			</div>

				<?php
						}
		        		$result->free();
		        	}
		        	$mysqli->close();
		        ?>
			<input type="submit" class="btn btn-primary" name="submit" value="Simpan">
			
		</form>
	</div>
</body>
</html>