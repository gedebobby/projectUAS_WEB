<?php require 'functions.php';

	$id = $_GET['id'];

	if(deleteSuplier($id) > 0 ) {
		
		echo "<script>alert('Data Suplier Berhasil Dihapus');
 			document.location.href='index.php?page=data-suplier';
			</script>";

	} else {
		
		echo "<script>alert('Data Suplier Gagal Dihapus');
			document.location.href = 'index.php?page=data-suplier';
			</script>";
	}



 ?> 