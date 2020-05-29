<?php require 'functions.php';

    $id = $_GET['id'];
    $row = tampilSuplier("SELECT * FROM suplier WHERE id_suplier = $id")[0];
 ?>

<div class="col-lg">
    <?php 
        if (isset($_POST['edit'])) {
        
            if (editSuplier($_POST) > 0) {
                
                echo '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                <span class="badge badge-pill badge-success">Berhasil</span>
                Data Suplier Berhasil Diedit
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                </div>';

            } else {
                
                echo '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                    <span class="badge badge-pill badge-danger">Success</span>
                    Data Suplier Gagal Diedit
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>';
            }
        }
     ?>
    
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-left title-2">EDIT SUPLIER</h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <form action="" method="post" novalidate="novalidate">
                        <input type="hidden" name="id_suplier" value="<?= $row['id_suplier'] ?>">
                        <div class="form-group">
                            <label for="nama_suplier" class="control-label mb-1">Nama Suplier</label>
                            <input id="nama_suplier" name="nama_suplier" value="<?= $row['nama_suplier'] ?>" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="control-label mb-1">Alamat</label>
                            <input id="alamat" name="alamat" type="text" value="<?= $row['alamat'] ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="telepon" class="control-label mb-1">Telepon</label>
                            <input id="telepon" name="telepon" type="text" value="<?= $row['telepon'] ?>" class="form-control" required>
                        </div>
                        <div>
                            <button type="submit" name="edit" class="btn btn-md btn-primary">EDIT SUPLIER</button>
                            <a href="index.php?page=data-suplier">
                            <button type="submit" name="batal" class="btn btn-md btn-danger">BATAL</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>