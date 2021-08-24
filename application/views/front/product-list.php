<!-- Product List Start -->
<div class="product-view">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-view-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="product-search">
                                        <input type="email" placeholder="Search">
                                        <button><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-short">
                                        <div class="dropdown">
                                            <div class="dropdown-toggle" data-toggle="dropdown">Category</div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <?php foreach($allCategory->result_array() as $row) { ?>
                                                    <a href="#" class="dropdown-item"><?php echo $row['nomCateg']; ?></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="product-price-range">
                                        <div class="dropdown">
                                            <div class="dropdown-toggle" data-toggle="dropdown">Prix</div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">$0 to $50</a>
                                                <a href="#" class="dropdown-item">$51 to $100</a>
                                                <a href="#" class="dropdown-item">$101 to $150</a>
                                                <a href="#" class="dropdown-item">$151 to $200</a>
                                                <a href="#" class="dropdown-item">$201 to $250</a>
                                                <a href="#" class="dropdown-item">$251 to $300</a>
                                                <a href="#" class="dropdown-item">$301 to $350</a>
                                                <a href="#" class="dropdown-item">$351 to $400</a>
                                                <a href="#" class="dropdown-item">$401 to $450</a>
                                                <a href="#" class="dropdown-item">$451 to $500</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <?php foreach($allProduit->result_array() as $row) { ?>
                        <div class="col-md-4">
                            <div class="product-item">
                                <div class="product-title">
                                    <a href="#"><?php echo $row['nomProduit'];?></a>
                                </div>
                                <div class="product-image">
                                    <!-- <a href="product-detail.html"> -->
                                        <img src="<?php echo base_url();?>/assets/frontAssets/img/<?php echo $row['imagePath'];?>" alt="Product Image">
                                    <!-- </a> -->
                                </div>
                                <div class="product-price">
                                    <h3><span>$</span>99</h3>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Ajouter</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    
                </div>
                
                <!-- Pagination Start -->
                <!-- <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div> -->
                <!-- Pagination Start -->
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