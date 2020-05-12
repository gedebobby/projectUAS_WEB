<?php 

	$koneksi = mysqli_connect("localhost", "root", "", "inventory");

	function inputSuplier($data){

		global $koneksi;

		$nama_suplier = $data['nama_suplier'];
		$alamat = $data['alamat'];
		$telepon = $data['telepon'];

		$sql = "INSERT INTO suplier VALUES ('', '$nama_suplier', '$alamat', '$telepon')";

		$result = mysqli_query($koneksi, $sql);
		
		return mysqli_affected_rows($koneksi);
		
	}

	function tampilSuplier($sql){

		global $koneksi;

		$result = mysqli_query($koneksi, $sql);
		while ($row = mysqli_fetch_assoc($result)) {
			
			$rows[] = $row;
		}

		return $rows;

	}




 ?>