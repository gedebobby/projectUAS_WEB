<?php  

        $koneksi = mysqli_connect("localhost", "root", "", "inventory");

        if(!$koneksi){
            echo "Koneksi Gagal";

        } else {
            // echo "Koneksi Berhasil";

            $sql = "SELECT * FROM `admin`";
            $result = mysqli_query($koneksi, $sql); 
    
?>

<div class="user-data m-b-30">
    <h3 class="title-3 m-b-30">
        <i class="zmdi zmdi-account-calendar"></i>Data Admin</h3>
        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
            <i class="zmdi zmdi-plus"></i>Add Admin</button>
         
    
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
                                <a href="#">johndoe@gmail.com</a>
                            </span>
                        </div>
                    </td>
                    <td>
                        <span class="role admin">admin</span>
                    </td>
                    <td>
                    <button class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="user-data__footer">
        <button class="au-btn au-btn-load">load more</button>
    </div>
</div>

<?php } ?>