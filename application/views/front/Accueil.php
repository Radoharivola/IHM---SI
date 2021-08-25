<!-- Product List Start -->
<div class="product-view">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Choisir caisse: </h1>
                <div class="row">
                    <?php for($i = 0; $i < count($caisse); $i=$i+1) { ?>
                        <div class="col-md-4">
                            <a href="<?php echo site_url("accueil/choix/".$caisse[$i]->getNumero()) ?>">
                                <div class="product-item">
                                    <div class="product-title">
                                    </div>
                                    <div class="product-image">
                                        <!-- <a href="product-detail.html"> -->
                                            <!-- <img src="<?php echo base_url();?>/assets/frontAssets/img/<?php echo $row['imagePath'];?>" alt="Product Image"> -->
                                        <!-- </a> -->
                                    </div>
                                    <div class="product-price">
                                        <h3><?php echo $caisse[$i]->getNumero(); ?></h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
               
            </div>           
            
            <!-- Side Bar Start -->
            <!-- <div class="col-lg-4 sidebar">
                <div class="sidebar-widget category">
                    <h2 class="title">Category</h2>
                    <nav class="navbar bg-light">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-female"></i>Fashion & Beauty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-child"></i>Kids & Babies Clothes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Men & Women Clothes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Electronics & Accessories</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                
                
                
                
                
                
            </div> -->
            <!-- Side Bar End -->
        </div>
    </div>
</div>
<!-- Product List End -->  