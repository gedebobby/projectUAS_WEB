<?php require 'functions.php'; 



$data = tampilSuplier("SELECT * FROM suplier");





?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<table>
			<th>
				<tr>
					<td>Nama</td>
					<td>Alamat</td>
					<td>Telepon</td>
				</tr>
			</th>
			<?php 
				foreach ($data as $row) { ?>
			<tr>
				<td><?= $row['nama_suplier'] ?></td>
				<td><?= $row['alamat'] ?></td>
				<td><?= $row['telepon'] ?></td>
			</tr>
			<?php } ?>
		</table>
<?php 
		$result = mysqli_query($koneksi, "SELECT * FROM suplier");
		$row = mysqli_fetch_assoc($result);
		$row2 = mysqli_fetch_array($result);
?>		
		<br><br>
		<?php print_r($data) ?>
		<br><br>
		<?php print_r($row) ?>
		<br><br>
		<?php 

		$angka = [1,2,3,4];

		print_r($angka)

		 ?>
		


	

</body>
</html>