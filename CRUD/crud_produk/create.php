<?php
	include 'koneksi.php';

	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$kategori = $_POST['id_kategori'];
	$query = "INSERT INTO produk(id_kategori, nama, harga) VALUES('$kategori', '$nama', $harga)";

	if ($mysqli->query($query) === TRUE) {
		echo "Berhasil menambahkan data";
		header('Location: read.php');
	}else{
		echo "Error: $mysqli->error";
	}
