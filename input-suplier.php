<?php require 'functions.php';
 ?>

<div class="col-lg">
    <?php 
        if (isset($_POST['submit'])) {
        
            if (inputSuplier($_POST) > 0) {

                echo '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            <span class="badge badge-pill badge-success">Berhasil</span>
            Data Suplier Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>';

            } else {
                echo '<script>alert("Data Suplier Gagal Diinput")</script>';
            }
        }
     ?>
    
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-left title-2">INPUT SUPLIER</h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <form action="" method="post" novalidate="novalidate">
                        <div class="form-group">
                            <label for="nama_suplier" class="control-label mb-1">Nama Suplier</label>
                            <input id="nama_suplier" name="nama_suplier" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="control-label mb-1">Alamat</label>
                            <input id="alamat" name="alamat" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="telepon" class="control-label mb-1">Telepon</label>
                            <input id="telepon" name="telepon" type="text" class="form-control" required>
                        </div>
                        <div>
                            <button type="submit" name="submit" class="btn btn-md btn-primary col-3">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>