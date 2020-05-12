<?php session_start();
	
	$koneksi = mysqli_connect("localhost", "root", "", "inventory");

	$username = $_POST['username'];
	$pass = $_POST['password'];

	if (!$koneksi) {
		echo "Koneksi Gagal";
	} else {
		
		$sql = "SELECT * FROM admin WHERE username = '$username'";
		$result = mysqli_query($koneksi, $sql);

		$row = mysqli_fetch_array($result);

		if ($username == $row['username'] && $pass == $row['password']) {
			$email = $row['email'];

			$_SESSION['login'] = $username;
			$_SESSION['e-mail'] = $email;
			header("location: http://localhost/projectUAS_WEB/index.php");
		} else {
			echo "<script>alert('Username Atau Password Salah')</script>";
		}

	}
	

	



 ?>