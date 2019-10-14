<?php
	include 'koneksi.php';

	$nama = $_POST['nama'];
	$id_kategori = $_POST['id_kategori'];
	$query = "UPDATE kategori SET nama='$nama' WHERE id_kategori='$id_kategori'";

	if($mysqli->query($query) === TRUE){
	    echo "Berhasil mengubah data";
	    header('Location: read.php');
	}else{
	    echo "Error: $mysqli->error";
	}