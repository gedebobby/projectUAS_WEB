<?php 
	require '../functions.php';

	if (isset($_POST['suplier'])) {

		$keyword = $_POST['suplier'];

		$sql = "SELECT * FROM suplier WHERE nama_suplier LIKE '%$keyword%'";

		$suplier = tampilSuplier($sql); 
	}

 ?>

 <div class="table-responsive table-data">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Suplier</td>
                            <td>Alamat</td>
                            <td>Telepon</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $i = 1;
                            foreach ($suplier as $row) { ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td>
                                <div class="table-data__info">
                                    <h6><?= $row['nama_suplier'] ?></h6>
                                </div>
                            </td>
                            <td>
                                <div class="table-data__info">
                                    </h6><?= $row['alamat'] ?></h6>
                                </div>
                            </td>
                            <td>
                                <div class="table-data__info">
                                    <h6><?= $row['telepon'] ?></h6>
                                </div>
                            </td>
                            <td>
                                <div class="table-data-feature">
                                    <a href="index.php?page=edit-suplier&id=<?= $row['id_suplier'] ?>"><button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button></a>
                                    <a href="index.php?page=delete-suplier&id=<?= $row['id_suplier'] ?>"><button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button></a>
                                    
                                </div>
                            </td>
                        </tr>                        
                        <?php $i++ ?>
                        <?php } ?>   
                    </tbody>
                </table>
            </div>