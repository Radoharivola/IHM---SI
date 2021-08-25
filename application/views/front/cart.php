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
                                        <td><?php echo $achat[$i]->getMontant(); ?></td>
                                        <form method="post" action="<?php echo site_url('achat/deleteAchat'); ?>">
                                            <input type="hidden" name="idAchat" value="<?php echo $achat[$i]->idAchat; ?>" />
                                            <td><button><i class="fa fa-trash"></i></button></td>
                                        </form>
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
                            <div class="cart-summary">
                                <div class="cart-content">
                                    <h1>Cart Summary</h1>
                                    <h2>Grand Total<span>Ar <?php echo $total; ?></span></h2>
                                </div>
                                <div class="cart-btn">
                                    <a href="<?php echo site_url('achat/valider') ?>"><button>Valider</button>
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
        
        