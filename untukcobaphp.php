<?php 

require 'functions.php'; 

$id = $_GET['id'];

$data = tampilSuplier("SELECT * FROM suplier WHERE id_suplier = $id");



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	print_r($data);

 ?>



	

</body>
</html>