<?php 
	require 'functions.php';

	if (isset($_POST['keyword'])) {

		$keyword = $_POST['keyword'];

		$sql = "SELECT * FROM barang WHERE nama_barang LIKE '%$keyword%'";

		$databarang = tampilBarang($sql);
	}

	

 ?>

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