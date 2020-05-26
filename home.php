<?php require 'functions.php'; ?>

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