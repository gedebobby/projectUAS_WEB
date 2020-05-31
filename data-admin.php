<?php require 'functions.php';

$dataadmin = tampilAdmin("SELECT * FROM admin"); 

        
    
?>

<div class="col-lg">
    <div class="card">
        <div class="card-body">
                <div class="card-title">
                    <h3 class="text-left title-2">Data Admin</h3>
                </div><hr>
                <div class="mb-2">
                    <a href="index.php?page=register">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" >
                    <i class="zmdi zmdi-plus"></i>Tambah Admin</button></a>

                    <div class="float-right">  
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" autocomplete="off" name="search" placeholder="Cari Username Admin" style="border: 1px solid black" />
                            <button class="au-btn--submit ml-1" type="submit" style="background-color: #101010">
                                <i class="zmdi zmdi-search"></i>
                            </button>       
                        </form>
                    </div>
                </div>
                    
    <div class="table-data mt-4">
        <table class="table">
            <thead>
                <tr>
                    <td>name</td>
                    <td>role</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataadmin as $row) {
                
             ?>
                <tr>
                    <td>
                        <div class="table-data__info">
                            <h6><?= $row['username'] ?></h6>
                            <span>
                                <a href="#"><?= $row['email'] ?></a>
                            </span>
                        </div>
                    </td>
                    <td>
                        <?php 

                            if ($row['role'] == "admin") {
                                
                                echo '<span class="role admin">admin</span>';

                            } elseif($row['role'] == "operator") {

                                echo '<span class="role member">operator</span>';

                            }

                         ?>
                        
                    </td>
                    
                    <!-- <a href="index.php?page=edit-admin"><button class="btn btn-warning">
                    <i class="fa fa-pencil-square-o"></i></button></a> -->

                    <!-- <a href="index.php?page=delete-admin">
                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button></a> -->
                </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

