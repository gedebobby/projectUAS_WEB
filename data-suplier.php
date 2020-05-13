<?php require 'functions.php'; 

    $data = tampilSuplier("SELECT * FROM suplier");
?>
<div class="col-lg">
    <div class="card">
        <div class="card-body">
                <div class="card-title">
                    <h3 class="text-left title-2">Data Suplier</h3>
                </div><hr>
                <div class="">
                    <a href="index.php?page=input-suplier">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>Add Suplier
                    </button></a>
                </div>
                
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
                            foreach ($data as $row) { ?>
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
        </div>    
    </div>
    <!-- END USER DATA-->
</div>