<?php require 'functions.php'; ?>

<div class="col-lg">
    <?php  
        if (isset($_POST['register'])) {
    
            if ($_POST['password'] == $_POST['password2']) {
                
                tampilAdmin("SELECT * FROM admin");
                $user = $_POST['username'];
                $result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$user'");
                
                $row = mysqli_num_rows($result);
            
                if ($row == 0) {
            
                    if (register($_POST) > 0) {
            
                        echo '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                         <span class="badge badge-pill badge-success">Berhasil</span>
                         Berhasil Membuat Akun
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">×</span>
                         </button>
                         </div>';
            
                    } else {

                        echo "gagal";
                    }
            
                } else {

                    echo '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                         <span class="badge badge-pill badge-danger">Coba Lagi</span>
                         Username Sudah Terdaftar
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">×</span>
                         </button>
                         </div>';
                }
                
            } else {

                echo '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                         <span class="badge badge-pill badge-danger">Coba Lagi</span>
                         Password Tidak Sama
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
                <h3 class="text-left title-2">Register</h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <form action="" method="post" novalidate="novalidate">
                        <div class="form-group">
                            <label for="username" class="control-label mb-1">Username</label>
                            <input id="username" name="username" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label mb-1">Email</label>
                            <input id="email" name="email" type="text" class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="password" class="control-label mb-1">Password</label>
                                    <input id="password" name="password" type="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="password2" class="control-label mb-1">Ulangi Password</label>
                                    <input id="password2" name="password2" type="password" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" name="register" class="btn btn-md btn-primary col-3">Register</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>