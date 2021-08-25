<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="<?php echo base_url(); ?>/assets/frontAssets/img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/frontAssets/lib/slick/slick.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/frontAssets/lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo base_url(); ?>/assets/frontAssets/css/style.css" rel="stylesheet">
    </head>

    <body>
        
        <!-- Top bar Start -->
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="<?php echo site_url("welcome/index") ?>" class="nav-item nav-link">Products</a>
                            <a href="<?php echo site_url("welcome/cart") ?>" class="nav-item nav-link">Cart</a>
                            
                            <!-- <a href="<?php echo site_url("welcome/admin") ?>" class="nav-item nav-link">Admin</a> -->
                            
                            <!-- <a href="<?php echo site_url("welcome/change") ?>" class="nav-item nav-link">changer de caisse</a> -->

                            <a href="<?php echo site_url("accueil/deco") ?>" class="nav-item nav-link">changer de caisse</a>
                            <?php if (isset($idCaisse)){ ?>
                                <a href="#!" class="nav-item nav-link">Caisse actuelle: N°<?php echo $idCaisse; ?></a>
                            <?php } ?>
                            </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Admin</a>
                                <div class="dropdown-menu">
                                    <a href="#!" class="dropdown-item">se Connecter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        
        <!-- Bottom Bar End -->       
        
        <?php include($vue); ?>
        
        
        <!-- Footer Bottom Start -->
        <!-- <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/frontAssets/lib/easing/easing.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/frontAssets/lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="<?php echo base_url(); ?>/assets/frontAssets/js/main.js"></script>
    </body>
</html>
