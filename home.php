<?php require 'functions.php'; 

    if (@$_SESSION['login-admin']) {
        
        $user = $_SESSION['login-admin'];

    } elseif(@$_SESSION['login-op']) {

        $user = $_SESSION['login-op'];

    }

    $admin = tampilAdmin("SELECT * FROM admin WHERE username = '$user'");

    $pass = $admin[0]['password'];

?>

    <?php if ( $pass == '123'): ?>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading mb-2">WELCOME, <?= $user ?></h4>
            <p>Selamat, Anda Sudah berhasil Login. <br> Anda menggunakan kata sandi default, mohon untuk mengganti password default anda untuk alasan keamanan dan privasi, Terima Kasih</p>
            <hr>
            <p class="mb-0">Jika lupa dengan password anda, silahkan kontak Admin untuk melakukan perubahan/reset password.</p>
        </div>
      
    <?php endif ?>

    

   


<section class="statistic statistic2">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--green">
                    <h2 class="number"><?= jumlah("SELECT * FROM admin") ?></h2>
                    <span class="desc">Jumlah Admin</span>
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--orange">
                    <h2 class="number"><?= jumlah("SELECT * FROM barang") ?></h2>
                    <span class="desc">Jumlah Produk</span>
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--blue">
                    <h2 class="number"><?= jumlah("SELECT * FROM suplier") ?></h2>
                    <span class="desc">Jumlah Suplier</span>
                    <div class="icon">
                        <i class="zmdi zmdi-truck"></i>
                    </div>
                </div>
            </div>
        
    </div>
</section>

<section>
    
</section>