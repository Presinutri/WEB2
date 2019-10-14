<?php
	include 'koneksi.php';

	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$id_kategori = $_POST['id_kategori'];
	$id_produk = $_POST['id_produk'];
	$query = "UPDATE produk SET nama='$nama', harga='$harga', id_kategori='$id_kategori' WHERE id_produk='$id_produk'";

	if($mysqli->query($query) === TRUE){
		echo "Berhasil mengubah data";
		header('Location: read.php');
	}else{
		echo "Error: $mysqli->error";
	}

