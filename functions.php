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
		$rows = [];

		if ($result) {
			
			while ($row = mysqli_fetch_assoc($result)) {
			
			$rows[] = $row;
			}
		} 
		

		return $rows;

	} function editSuplier($data) {

		global $koneksi;

		$id_lama = $data['id_suplier'];
		$nama_suplier = $data['nama_suplier'];
		$alamat = $data['alamat'];
		$telepon = $data['telepon'];

		$sql = "UPDATE suplier SET nama_suplier = '$nama_suplier', alamat = '$alamat', telepon = '$telepon' WHERE id_suplier = $id_lama";

		mysqli_query($koneksi, $sql);
		
		return mysqli_affected_rows($koneksi);

	}

	function deleteSuplier($id) {

		global $koneksi;

		$sql = "DELETE FROM suplier WHERE id_suplier = $id";
		$result = mysqli_query($koneksi, $sql);

		return mysqli_affected_rows($koneksi);

	} 






 ?>