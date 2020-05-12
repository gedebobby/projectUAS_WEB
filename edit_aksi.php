<?php 
	
	$idlama = $_POST['idlama'];
	$barang = $_POST['nama_barang'];
	$kd_barang = $_POST['kd_barang'];
	$suplier = $_POST['suplier'];
	$beli = $_POST['harga_beli'];
	$jual = $_POST['harga_jual'];
	$stock = $_POST['stock']; 

	$koneksi = mysqli_connect("localhost", "root", "", "inventory");

		if(!$koneksi){
			echo "Koneksi Gagal"; 

		} else {
			// echo "Koneksi Berhasil";

			$sql = "UPDATE `barang` SET `nama_barang`='".$barang."',`kd_barang`='".$kd_barang."',`suplier`='".$suplier."', `harga_beli`='".$beli."', `harga_jual`='".$jual."', `stock`='".$stock."' WHERE `id`='".$idlama."';";
			$result = mysqli_query($koneksi, $sql);

			header("location: http://localhost/CoolAdmin-master/index.php?page=data-barang");

		}


 ?>