<?php 

	$koneksi = mysqli_connect("localhost", "root", "", "inventory");

	$id = $_GET['id'];

	if (!$koneksi) {

		echo "Koneksi Gagal";

	} else {
		
		$sql = "DELETE FROM `barang` WHERE id = '". $id."';";
		$result = mysqli_query($koneksi, $sql);

		$row = mysqli_affected_rows($koneksi);

		if ($row > 0 ) {
			
			echo "<script>alert('Data Berhasil Dihapus')</script>";
 			echo "<script>location='index.php?page=data-barang'</script>";

		} else {

			echo "<script>alert('Data Gagal Dihapus')</script>";
		}

		
	}
	



 ?> 