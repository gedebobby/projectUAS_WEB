<?php require 'functions.php';
    
    $id = $_GET['id'];

    $datasuplier = tampilSuplier("SELECT * FROM suplier ");
    $barang = tampilBarang("SELECT * FROM `barang` WHERE id ='". $id ."'")[0];
       
    if (isset($_POST['submit'])) {
        
        if (editBarang($_POST) > 0) {

            echo '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        <span class="badge badge-pill badge-success">Berhasil</span>
        Data Barang Berhasil Diedit
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>';

        } else {
            echo '<script>alert("Data Suplier Gagal Diinput")</script>';
        }
    }

?>


<div class="user-data">
    <div class="card-body">
        <div class="card-title">
            <h3 class="text-left title-2">INPUT DATA BARANG </h3>
        </div>
        <hr>
        <form action="" method="post" novalidate="novalidate">
            <input type="hidden" name="idlama" value="<?= $barang['id'] ?>"> 
            <div class="form-group">
                <label for="nama_barang" class="control-label mb-1">Nama Barang</label>
                <input id="nama_barang" name="nama_barang" type="text" value="<?= $barang['nama_barang'] ?>" class="form-control col-sm-6" required>
            </div>
            <div class="form-group">
                <label for="kd_barang" class="control-label mb-1">Kode Barang</label>
                <input id="kd_barang" name="kd_barang" type="text" value="<?= $barang['kd_barang'] ?>" class="form-control col-sm-6" required>
            </div>
            <div class="form-group">
                <label for="suplier" class="control-label mb-1">Suplier</label>
                <select name="suplier" id="suplier" class="form-control col-sm-4"> 
                    <?php foreach ($datasuplier as $row) { ?>

                       <option value="<?= $row['nama_suplier'] ?>"><?= $row['nama_suplier'] ?></option>
                    
                    <?php } ?>                
                </select>   
            </div>
            <div class="form-group">
                <label for="harga_beli" class="control-label mb-1">Harga Beli</label>
                <input id="harga_beli" name="harga_beli" type="text" value="<?= $barang['harga_beli'] ?>" class="form-control col-sm-2" required>
            </div>
            <div class="form-group">
                <label for="harga_jual" class="control-label mb-1">Harga Jual</label>
                <input id="harga_jual" name="harga_jual" type="text" value="<?= $barang['harga_jual'] ?>" class="form-control col-sm-2" required>
            </div>
            <div class="form-group">
                <label for="stock" class="control-label mb-1">Stock</label>
                <input id="stock" name="stock" type="text" value="<?= $barang['stock'] ?>" class="form-control col-sm-2" required>
            </div>


                
            <div>
                <button type="submit" name="submit" class="btn btn-md btn-primary">EDIT</button>
                <a href="index.php?page=data-barang">
                    <button type="submit" class="btn btn-md btn-danger">KEMBALI</button>
                </a>
            </div>
        </form>        
    </div>
</div>



