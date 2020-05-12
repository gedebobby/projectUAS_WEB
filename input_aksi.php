<?php 

	$koneksi = mysqli_connect("localhost","root","","inventory");

	$barang = $_POST['nama_barang'];
	$kd_barang = $_POST['kd_barang'];
	$suplier = $_POST['suplier'];
	$beli = $_POST['harga_beli'];
	$jual = $_POST['harga_jual'];
	$stock = $_POST['stock']; 

	$kueri = "INSERT into barang VALUES('','$barang','$kd_barang','$suplier','$beli','$jual','$stock')";
	mysqli_query($koneksi, $kueri);
	
	

	header("location: index.php?page=input-barang");

 ?>

 