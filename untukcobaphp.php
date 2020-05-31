<?php require 'functions.php';
	
$databarang = tampilBarang("SELECT * FROM barang");

	if (isset($_POST['keyword'])) {

		$keyword = $_POST['keyword'];

		$sql = "SELECT * FROM barang WHERE nama_barang LIKE '%$keyword%'";
		$databarang = tampilBarang($sql);

	} 

	
	


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard Admin</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<body>
	<div class="container mt-5">
		<form method="post">
			<div class="form-group">
				<input id="search-barang" name="search-barang" type="text" class="form-control" placeholder="Search Barang" required>
			</div>
		</form>

		<div id="tabel">
		<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Nama Barang</th>
		      <th scope="col">Kode Barang</th>
		      <th scope="col">Suplier</th>
		      <th scope="col">Harga Beli</th>
		      <th scope="col">Harga Jual</th>
		      <th scope="stock">Stock</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $i = 1 ?>
		  	<?php foreach ($databarang as $row): ?>
		  		<tr>
			      <td><?= $i ?></td>
			      <td><?= $row['nama_barang'] ?></td>
			      <td><?= $row['kd_barang'] ?></td>
			      <td><?= $row['suplier'] ?></td>
			      <td><?= $row['harga_beli'] ?></td>
			      <td><?= $row['harga_jual'] ?></td>
			      <td><?= $row['stock'] ?></td>
			    </tr>
			<?php $i++; ?>
		  	<?php endforeach ?>
		    
		  </tbody>
		</table>
		</div>
	</div>

	<script src="vendor/jquery-3.2.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/tes.js"></script>

</body>
</html>