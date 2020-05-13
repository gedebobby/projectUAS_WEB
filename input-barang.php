<?php require 'functions.php';

    $data = tampilSuplier("SELECT * FROM suplier ");
    
 ?>

<div class="user-data">
    <div class="card-body">
        <div class="card-title">
            <h3 class="text-left title-2">INPUT DATA BARANG </h3>
        </div>
        <hr>
        <form action="input_aksi.php" method="post" novalidate="novalidate">
            <div class="form-group">
                <label for="nama_barang" class="control-label mb-1">Nama Barang</label>
                <input id="nama_barang" name="nama_barang" type="text" class="form-control col-sm-6" required>
            </div>
            <div class="form-group">
                <label for="kd_barang" class="control-label mb-1">Kode Barang</label>
                <input id="kd_barang" name="kd_barang" type="text" class="form-control col-sm-6" required>
            </div>
            <div class="form-group">
                <label for="nama-suplier" class="control-label mb-1">Suplier</label>
                <select name="nama-suplier" id="nama-suplier" class="form-control col-sm-4">
                    <?php foreach ($data as $row) { ?>

                       <option value="<?= $row['nama_suplier'] ?>"><?= $row['nama_suplier'] ?></option>
                    
                    <?php } ?>
                    
                    
                </select>
            </div>
            <div class="form-group">
                <label for="harga_beli" class="control-label mb-1">Harga Beli</label>
                <input id="harga_beli" name="harga_beli" type="text" class="form-control col-sm-2" required>
            </div>
            <div class="form-group">
                <label for="harga_jual" class="control-label mb-1">Harga Jual</label>
                <input id="harga_jual" name="harga_jual" type="text" class="form-control col-sm-2" required>
            </div>
            <div class="form-group">
                <label for="stock" class="control-label mb-1">Stock</label>
                <input id="stock" name="stock" type="text" class="form-control col-sm-2" required>
            </div>

            <div>
                <button type="submit" class="btn btn-md btn-primary">
                    INPUT BARANG
                </button>
            </div>
        </form>
    </div>
</div>


