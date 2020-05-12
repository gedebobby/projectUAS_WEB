<div class="user-data">
    <div class="card-body">
        <div class="card-title">
            <h3 class="text-left title-2">INPUT DATA BARANG </h3>
        </div>
        <hr>
        <?php 
    
            $id = $_GET['id'];

            $koneksi = mysqli_connect("localhost", "root", "", "inventory");

            if(!$koneksi){
                    echo "Koneksi Gagal";

                } else {

                    $sql = "SELECT * FROM `barang` WHERE id ='". $id ."'";
                    $result = mysqli_query($koneksi, $sql);

                    if($row = mysqli_fetch_array($result)) {

                        $barang = $row['nama_barang'];
                        $kd_barang = $row['kd_barang'];
                        $suplier = $row['suplier'];
                        $beli = $row['harga_beli'];
                        $jual = $row['harga_jual'];
                        $stock = $row['stock'];


         ?>
        <form action="edit_aksi.php" method="post" novalidate="novalidate">
            <input type="hidden" name="idlama" value="<?= $id ?>"> 
            <div class="form-group">
                <label for="nama_barang" class="control-label mb-1">Nama Barang</label>
                <input id="nama_barang" name="nama_barang" type="text" value="<?= $barang ?>" class="form-control col-sm-6" required>
            </div>
            <div class="form-group">
                <label for="kd_barang" class="control-label mb-1">Kode Barang</label>
                <input id="kd_barang" name="kd_barang" type="text" value="<?= $kd_barang ?>" class="form-control col-sm-6" required>
            </div>
            <div class="form-group">
                <label for="suplier" class="control-label mb-1">Suplier</label>
                <select name="suplier" id="suplier" class="form-control col-sm-4">
                    <option value="UD. KARTIKA ASRI">UD. KARTIKA ASRI</option>
                    <option value="UD. MAJU JAYA">UD. MAJU JAYA</option>
                    <option value="CV. INDOESKRIM">CV. INDOESKRIM</option>
                    <option value="UD. KERTHA ANUGERAH">UD. KERTHA ANUGERAH</option>
                </select>
            </div>
            <div class="form-group">
                <label for="harga_beli" class="control-label mb-1">Harga Beli</label>
                <input id="harga_beli" name="harga_beli" type="text" value="<?= $beli ?>" class="form-control col-sm-2" required>
            </div>
            <div class="form-group">
                <label for="harga_jual" class="control-label mb-1">Harga Jual</label>
                <input id="harga_jual" name="harga_jual" type="text" value="<?= $jual ?>" class="form-control col-sm-2" required>
            </div>
            <div class="form-group">
                <label for="stock" class="control-label mb-1">Stock</label>
                <input id="stock" name="stock" type="text" value="<?= $stock ?>" class="form-control col-sm-2" required>
            </div>


                
            <div>
                <button type="submit" class="btn btn-md btn-primary">EDIT</button>
                <a href="index.php?page=data-barang">
                    <button type="submit" class="btn btn-md btn-danger">BATAL</button>
                </a>
            </div>
        </form>
        <?php } ?>
<?php } ?>
    </div>
</div>



