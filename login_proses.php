<?php session_start();

require 'functions.php';

$username = $_POST['username'];
$pass = $_POST['password'];

$row = tampilAdmin("SELECT * FROM admin WHERE username = '$username'")[0];




	if ($username == $row['username'] && $pass == $row['password']) {
		$email = $row['email'];

		$_SESSION['login'] = $row['username'];
		$_SESSION['e-mail'] = $row['email'];
		header("location: http://localhost/projectUAS_WEB/index.php");

	} else {
		echo "<script>alert('Username Atau Password Salah')</script>";
		header("location: http://localhost/projectUAS_WEB/login.php");
		
	}


	

	



 ?>