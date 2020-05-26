<?php require 'functions.php'; 

$user = $_SESSION['login'];
$admin = tampilAdmin("SELECT * FROM admin WHERE username = '$user'")[0];

var_dump($admin);

if (isset($_POST['edit'])) {
        
    if (editAdmin($_POST) > 0) {

        echo '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        <span class="badge badge-pill badge-success">Berhasil</span>
        Berhasil Edit Profil. Silahkan Login ulang
        <button type="button" onclick="redirect("https://www.instagram.com") class="close" data-dismiss="alert" aria-label="Close">
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
                <h3 class="text-left title-2">Edit Akun</h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <form action="" method="post" novalidate="novalidate">
                        <input type="hidden" name="id_lama" value="<?= $admin['id_admin'] ?>">
                        <div class="form-group">
                            <label for="username" class="control-label mb-1">Username</label>
                            <input id="username" name="username" value="<?= $admin['username'] ?>" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label mb-1">Email</label>
                            <input id="email" name="email" value="<?= $admin['email'] ?>" type="text" class="form-control" required>
                        </div>
                        <div>
                            <button type="submit" name="edit" class="btn btn-md btn-primary col-3">Save</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>