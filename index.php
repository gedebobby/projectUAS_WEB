<?php session_start(); 

if (isset($_SESSION['login'])) { ?>
    
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>Dashboard Admin</title>

        <!-- Fontfaces CSS-->
        <link href="css/font-face.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="css/theme.css" rel="stylesheet" media="all">

    </head>

    <body class="animsition">
        <div class="page-wrapper">

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li>
                                <a class="js-arrow" href="index.php">
                                  <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                
                            </li>
                            <li>
                                <a href="index.php?page=data-admin">
                                    <i class="fas fa-user"></i>DATA ADMIN</a>
                            </li>
                            <li>
                                <a href="index.php?page=input-barang">
                                  <i class="fas fa-book"></i>INPUT BARANG</a>
                            </li>
                            <li>
                                <a href="index.php?page=input-suplier">
                                  <i class="fas fa-truck"></i>INPUT SUPLIER</a>
                            </li>
                            <li>
                                <a href="index.php?page=data-barang">
                                  <i class="fas fa-database"></i>DATA BARANG</a>
                            </li>
                            <li>
                                <a href="index.php?page=data-suplier">
                                  <i class="fas fa-address-book"></i>DATA SUPLIER</a>
                            </li>
                            <li>
                                <a href="index.php?page=register">
                                  <i class="fas fa-vcard"></i>REGISTER</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap">
                                <form class="form-header" action="" method="POST">
                                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                                <div class="header-button">
                                    <div class="account-wrap">
                                        <div class="account-item clearfix js-item-menu">
                                            <div class="image">
                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                            </div>
                                            <div class="content">
                                                <a class="js-acc-btn" href="#"><?= $_SESSION['login'] ?></a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="name">
                                                            <a href="#"><?= $_SESSION['login'] ?></a>
                                                        </h5>
                                                    
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__body">
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-account"></i>Account</a>
                                                    </div>
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__footer">
                                                    <a href="index.php?page=logout">
                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- HEADER DESKTOP-->

                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                                <?php

                                    if(isset($_GET['page'])) {
                                        
                                        if ($_GET['page'] == 'data-admin') {
                                            
                                            include 'data-admin.php';

                                        } elseif ($_GET['page']== 'input-barang') {
                                            
                                            include 'input-barang.php';

                                        } elseif ($_GET['page'] == 'data-barang') {
                                            
                                            include 'data-barang.php';

                                        }  elseif ($_GET['page'] == 'data-suplier') {
                                            
                                            include 'data-suplier.php';

                                        } elseif ($_GET['page'] == 'edit') {
                                            
                                            include 'edit.php';

                                        } elseif ($_GET['page'] == 'input-suplier') {
                                            
                                            include 'input-suplier.php';
                                        } 
                                        elseif ($_GET['page'] == 'register') {

                                            include 'register2.php';

                                        } elseif ($_GET['page'] == 'delete') {

                                            include 'delete.php';

                                        } elseif ($_GET['page'] == 'logout') {
                                            
                                            include 'logout.php';
                                        } elseif ($_GET['page'] == 'edit-suplier') {

                                            include 'edit-suplier.php';
                                        } elseif ($_GET['page'] == 'delete-suplier') {
                                            include 'delete-suplier.php';
                                        }

                                    } else {

                                        include 'home.php';

                                    }
                                 ?> 


                                
                            
                                
                                    <div class="copyright">
                                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                    </div>
                                
                            
                       
                    </div>
                </div>
                <!-- END MAIN CONTENT-->
                <!-- END PAGE CONTAINER-->
            </div>

        
            </div>

        <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js">
        </script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="vendor/select2/select2.min.js">
        </script>

        <!-- Main JS-->
        <script src="js/main.js"></script>

    </body>

    </html>
<!-- end document-->

<?php 
} else {

    header("location: http://localhost/projectUAS_WEB/login.php");

}



?>
