<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
	$nama = $_POST['nama'];
	$kategori = $_POST['kategori'];
	$harga_jual = $_POST['harga_jual'];
	$harga_beli = $_POST['harga_beli'];
	$stok = $_POST['stok'];
	$file_gambar = $_FILES['file_gambar'];
	$gambar = null;
	if ($file_gambar['error'] == 0)
	{
		$filename = str_replace(' ', '_',$file_gambar['name']);
		$destination = dirname(_FILE_) .'/gambar/' . $filename;
		if(move_uploaded_file($file_gambar['tmp_name'], $destination))
		{
		$gambar = 'gambar/' . $filename;;
		}
	}
	$sql = 'INSERT INTO data_barang (nama, kategori,harga_jual, harga_beli, stok, gambar) ';
	$sql .= "VALUE ('{$nama}', '{$kategori}','{$harga_jual}', '{$harga_beli}', '{$stok}', '{$gambar}')";
	$result = mysqli_query($conn, $sql);
	header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
	<title>Tambah Barang</title>
	<style>
	form div > label {
			display: inline-block;
			width: 100px;
			height: 30px;
	}
	form div > label {
			display: inline-block;
			width: 100px;
			height: 50px;
	}
	form input[type="text"], form textarea {
			border: 1px solid;
	}
	form input[type="submit"] {
		border: 1px solid #2E8B57;
		background-color: #2E8B57;
		color: #ffffff;
		font-weight: bold;
		padding: 5px 15px;
	}
	</style>
</head>
	<div class="container">
	<h1 align="center">Tambah Barang</h1>