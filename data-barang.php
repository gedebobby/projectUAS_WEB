<?php require 'functions.php';

    $databarang = tampilBarang("SELECT * FROM barang");
    
?>
<div class="mb-3">
    
    
    <a href="index.php?page=input-barang">
    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
    <i class="zmdi zmdi-plus"></i>Add Barang</button></a>
      
    <div class="float-right">  
    <form class="form-header" action="" method="POST">
        <input class="au-input au-input--xl" type="text" name="search" id="search" autocomplete="off" name="search" placeholder="Cari Nama Barang" />
        <button class="au-btn--submit ml-1" type="submit" name="search" style="background-color: #101010">
            <i class="zmdi zmdi-search"></i>
        </button>
        
    </form>
    </div>  
        
</div>

<div class="table-responsive table--no-card m-b-30">
    <table class="table table-borderless table-striped table-earning">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Kode Barang</th>
                <th>Suplier</th>
                <th>Harga Jual</th> 
                <th>Harga Beli</th>
                <th>Stok</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            <?php foreach ($databarang as $row) { ?>

            <tr>
                <td><?= $i ?></td>
                <td><?= $row['nama_barang'] ?></td>
                <td><?= $row['kd_barang'] ?></td>
                <td><?= $row['suplier'] ?></td>
                <td><?= $row['harga_beli'] ?></td>
                <td><?= $row['harga_jual'] ?></td>
                <td><?= $row['stock'] ?></td>
                <td>
                    <?php 
                        $url_edit = "index.php?page=edit&id=". $row['id'];
                        $url_hapus = "index.php?page=delete&id=". $row['id'];
                     ?>
                    <a href="<?= $url_edit ?>"><button class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></button>
                    </a>
                    <a href="<?= $url_hapus ?>">
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </a>
                </td>
            </tr>
            <?php $i++ ?>
            <?php } ?>             
        </tbody>
    </table>
</div>
