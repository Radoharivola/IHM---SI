<!-- Cart Start -->
<div class="cart-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-page-inner">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                <?php for($i = 0; $i < count($achat); $i=$i+1) { ?>
                                    <tr>
                                        <td>
                                            <div class="img">
                                                <p><?php echo $achat[$i]->getNom(); ?></p>
                                            </div>
                                        </td>
                                        <td><?php echo $achat[$i]->getPrix(); ?></td>
                                        <td>
                                            <div class="qty">
                                                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="text" value="<?php echo $achat[$i]->getQuantite(); ?>">
                                                <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </td>
                                        <td><?php echo $achat[$i]->getMontant(); ?></td>
                                        <td><button><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart-page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div class="coupon">
                                <input type="text" placeholder="Coupon Code">
                                <button>Apply Code</button>
                            </div> -->
                        </div>
                        <div class="col-md-12">
                            <div class="cart-summary">
                                <div class="cart-content">
                                    <h1>Cart Summary</h1>
                                    <h2>Grand Total<span>Ar <?php echo $total; ?></span></h2>
                                </div>
                                <div class="cart-btn">
                                    <button>Update Cart</button>
                                    <button>Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->
        
        