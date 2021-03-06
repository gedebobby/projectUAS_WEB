<?php require 'functions.php'; 

    $suplier = tampilSuplier("SELECT * FROM suplier");
?>
<div class="col-lg">
    <div class="card"> 
        <div class="card-body">
                <div class="card-title">
                    <h3 class="text-left title-2">Data Suplier</h3>
                </div><hr>
                <div class="mb-2">
                    <a href="index.php?page=input-suplier">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>Add Suplier
                    </button></a>

                    <div class="float-right">  
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" autocomplete="off" name="search-suplier" id="search-suplier" placeholder="Cari Nama Suplier" style="border: 1px solid black" />
                            <button class="au-btn--submit ml-1" type="submit" style="background-color: #101010">
                                <i class="zmdi zmdi-search"></i>
                            </button>       
                        </form>
                    </div>
                </div>

                <div id="tabel-suplier">
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
                            foreach ($suplier as $row) : ?>
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
                        <?php endforeach ?>   
                    </tbody>
                </table>
            </div>
        </div>
                
            
        </div>
    </div>
    <!-- END USER DATA-->
</div>