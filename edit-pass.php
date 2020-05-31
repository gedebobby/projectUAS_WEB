<?php require 'functions.php'; 

if (@$_SESSION['login-admin']) {
        
        $user = $_SESSION['login-admin'];

    } elseif(@$_SESSION['login-op']) {

        $user = $_SESSION['login-op'];

    }
    
$admin = tampilAdmin("SELECT id_admin FROM admin WHERE username = '$user'")[0];

if (isset($_POST['ubah'])) {
    
    if (editPass($_POST) > 0) {
        echo '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                         <span class="badge badge-pill badge-success">Berhasil</span>Password Berhasil diubah
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">×</span>
                         </button>
                         </div>';
    } else {

        echo "gagal";
    }
}

?>

<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h3 class="text-left title-2">Ubah Password</h3>
        </div>
        <hr>
        <div class="row">
            <div class="col-4">
                <form action="" method="post" novalidate="novalidate">
                    <input type="hidden" name="id_lama" value="<?= $admin['id_admin'] ?>">

                    <div class="form-group">
                        <label for="password" class="control-label mb-1">Password Lama</label>
                        <input id="password" name="password" type="password" class="form-control" required>
                    </div>
                    
                        <div class="form-group">
                            <label for="password1" class="control-label mb-1">Password Baru</label>
                            <input id="password1" name="password1" type="password" class="form-control" required>
                        </div>
                    
                    
                        <div class="form-group">
                            <label for="password2" class="control-label mb-1">Verifikasi Password Baru</label>
                            <input id="password2" name="password2" type="password" class="form-control" required>
                        </div>
                   
                    
                    <div>
                        <button type="submit" name="ubah" class="btn btn-md btn-primary">Ubah Password</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
