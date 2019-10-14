<?php
	include 'koneksi.php';

	$id_produk = $_GET['id_produk'];
	$query = "DELETE FROM produk WHERE id_produk = '$id_produk'";

	if ($mysqli->query($query) === TRUE) {
		echo "Berhasil Menghapus Data";
		header('Location: read.php');
	}else{
		echo "Error: $mysqli->error";
	}

