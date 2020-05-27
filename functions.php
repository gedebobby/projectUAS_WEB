<?php 

	$koneksi = mysqli_connect("localhost", "root", "", "inventory");

	function inputBarang($data)	{
		
		global $koneksi;

		$barang = $data['nama_barang'];
		$kd_barang = $data['kd_barang'];
		$suplier = $data['suplier'];
		$beli = $data['harga_beli'];
		$jual = $data['harga_jual'];
		$stock = $data['stock']; 

		$sql = "INSERT into barang VALUES('','$barang','$kd_barang','$suplier','$beli','$jual','$stock')";
		mysqli_query($koneksi, $sql);

		return mysqli_affected_rows($koneksi);

	}

	function tampilBarang($sql) {

		global $koneksi;

		$result = mysqli_query($koneksi, $sql);
		$rows = [];

		if ($result) {
			
			while ($row = mysqli_fetch_assoc($result)) {
			
			$rows[] = $row;
			}
		} 
		return $rows;
	}

	function editBarang($data) {

		global $koneksi;

		$idlama = $_POST['idlama'];
		$barang = $_POST['nama_barang'];
		$kd_barang = $_POST['kd_barang'];
		$suplier = $_POST['suplier'];
		$beli = $_POST['harga_beli'];
		$jual = $_POST['harga_jual'];
		$stock = $_POST['stock'];

		$sql = "UPDATE `barang` SET `nama_barang`='".$barang."',`kd_barang`='".$kd_barang."',
		`suplier`='".$suplier."', `harga_beli`='".$beli."', `harga_jual`='".$jual."', `stock`='".$stock."' WHERE `id`='".$idlama."';";
		
		mysqli_query($koneksi, $sql);

		return mysqli_affected_rows($koneksi);
	}

	function inputSuplier($data){

		global $koneksi;

		$nama_suplier = $data['nama_suplier'];
		$alamat = $data['alamat'];
		$telepon = $data['telepon'];

		$sql = "INSERT INTO suplier VALUES ('', '$nama_suplier', '$alamat', '$telepon')";

		mysqli_query($koneksi, $sql);
		
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

	function tampilAdmin($sql){
		global $koneksi;

		$result = mysqli_query($koneksi, $sql);
		$rows = [];

		if ($result) {
			
			while ($row = mysqli_fetch_assoc($result)) {
			
			$rows[] = $row;
			}
		} 

		return $rows;
	}

	function editAdmin($data) {

		global $koneksi;

		$idlama = $data['id_lama'];
		$username = $data['username'];
		$email = $data['email'];

		$sql = "UPDATE admin SET username = '$username', email = '$email' WHERE id_admin = $idlama";

		$result = mysqli_query($koneksi, $sql);
		
		return mysqli_affected_rows($koneksi);


	} 


	function editPass($data) { 

		global $koneksi;

		$idlama = $data['id_lama'];
		$password = $data['password'];
		$password1 = $data['password1'];
		$password2 = $data['password2'];

		// cek pass lama
		$result = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin = $idlama");
		$row = mysqli_fetch_assoc($result);

		if ($password == $row['password']) {

			if ($password1 !== $password2) {
				
				echo '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                         <span class="badge badge-pill badge-danger">Notice</span> Password tidak sama
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">×</span>
                         </button>
                         </div>';

			return false;

			}


		} else {

			echo '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                         <span class="badge badge-pill badge-danger">Notice</span> Password lama tidak sesuai
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">×</span>
                         </button>
                         </div>';

			return false;
		}

		$sql2 = "UPDATE admin SET password = '$password1' WHERE id_admin = $idlama";
		mysqli_query($koneksi, $sql2);
		
		return mysqli_affected_rows($koneksi);

	}

	function register($data){

		global $koneksi;

		$username = $data['username'];
		$email = $data['email'];
		$password = mysqli_real_escape_string($koneksi, $data['password']);
		$password2 = mysqli_real_escape_string($koneksi, $data['password2']);

		// cek username
		$result = mysqli_query($koneksi, "SELECT username FROM admin WHERE username = '$username'");

		if ( mysqli_fetch_assoc($result)) {
			
			echo '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                         <span class="badge badge-pill badge-danger">Notice</span>
                         Username Sudah Terdaftar
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">×</span>
                         </button>
                         </div>';
            return false;

        }

		// Konfirmasi pass
		if ($password !== $password2) {
			
			echo '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                         <span class="badge badge-pill badge-danger">Notice</span> Password tidak sama
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">×</span>
                         </button>
                         </div>';

			return false;
		} 


		$sql = "INSERT INTO admin VALUES ('', '$username', '$email', '$password')";
		mysqli_query($koneksi, $sql);

		return mysqli_affected_rows($koneksi);

	}

	

	function jumlah($sql){

		global $koneksi;

		$result = mysqli_query($koneksi, $sql);

		return mysqli_num_rows($result);

	}






 ?>