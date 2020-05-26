<?php require 'functions.php';

if (isset($_POST['register'])) {
	
	if ($_POST['password'] == $_POST['password2']) {
		
		tampilAdmin("SELECT * FROM admin");
		$user = $_POST['username'];
		$result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$user'");
		$row = mysqli_num_rows($result);
	
		if ($row == 0) {
	
			if (register($_POST) > 0) {
	
				echo "Berhasil";
	
			} else {
				echo "gagal";
			}
	
		} else {
			echo 'user sudah ada';
		}
		
	} else {
		echo "password tidak sama";
	}
}

// if ($_POST['password'] == $_POST['password2']) {
	
// 	$user = $_POST['username'];
// 	$result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$user'");
// 	$row = mysqli_num_rows($result);

// 	if ($row == 0) {

// 		if (inputSuplier($_POST) > 0) {

// 			echo "Berhasil";

// 		} else {
// 			echo "gagal";
// 		}

// 	} else {
// 		echo 'user sudah ada';
// 	}
	
// } else {
// 	echo "password tidak sama";
// }



?>
<form action="" method="post" novalidate="novalidate">
	<div class="form-group">
		<label for="username" class="control-label mb-1">Username</label>
		<input id="username" name="username" type="text" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="email" class="control-label mb-1">Email</label>
		<input id="email" name="email" type="text" class="form-control" required>
	</div>
	<div class="row">
		<div class="col-6">
			<div class="form-group">
				<label for="password" class="control-label mb-1">Password</label>
				<input id="password" name="password" type="password" class="form-control" required>
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				<label for="password2" class="control-label mb-1">Ulangi Password</label>
				<input id="password2" name="password2" type="password" class="form-control" required>
			</div>
		</div>
	</div>
	<div>
		<button type="submit" name="register" class="btn btn-md btn-primary col-3">Register</button>
	</div>
</form>