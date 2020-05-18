<?php  

        $koneksi = mysqli_connect("localhost", "root", "", "inventory");

        if(!$koneksi){
            echo "Koneksi Gagal";

        } else {
            // echo "Koneksi Berhasil";

            $sql = "SELECT * FROM `admin`";
            $result = mysqli_query($koneksi, $sql); 
    
?>

<div class="col-lg">
    <div class="card">
        <div class="card-body">
                <div class="card-title">
                    <h3 class="text-left title-2">Data Admin</h3>
                </div><hr>
                <a href="index.php?page=register">
                <button class="au-btn au-btn-icon au-btn--green au-btn--small" >
                    <i class="zmdi zmdi-plus"></i>Tambah Admin</button></a>
                    
         
    
    <div class="table-data">
        <table class="table">
            <thead>
                <tr>
                    <td>name</td>
                    <td>role</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) {
                # code...
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
                        <span class="role admin">admin</span>
                    </td>
                    <td>
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

<?php } ?>