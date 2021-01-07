<?php 
    require_once '../Controller/cartC.php';
    $cartC=new cartC();
    $list=$cartC->retrieveAllProducts();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/cartStyle.css">
    <title>Cart</title>
</head>
<body>
<!------ Include the above in your HEAD tag ---------->

<script src="https://use.fontawesome.com/c560c025cf.js"></script>
<div class="container">
   <div class="card shopping-cart">
        <div class="card-header bg-dark text-light">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Shipping cart
            <a href="Products.php" class="btn btn-outline-info btn-sm pull-right">Continu shopping</a>
            <div class="clearfix"></div>
        </div>
        <div class="card-body">
                <!-- PRODUCT -->
                <?php 
                    $list=$cartC->retrieveAllProducts();
                    $totalPrice=$cartC->countPrice();
                    $count=$totalPrice['count'];
                    // $totalPrices=0;
					foreach($list as $u) {
                        // $totalPrices=$u['price'] * $u['quantity']; 
                        
				?>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-2 text-center">
                            <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                    </div>
                    <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                        <h4 class="product-name"><strong><?php echo $u['name'] ?></strong></h4>
                        <h4>
                            <small><?php echo $u['descr'] ?></small>
                        </h4>
                    </div>
                    <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                        <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                            <h6><strong><?php echo $u['price'] ?> DT <span class="text-muted">x</span></strong></h6>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4">
                            <div class="quantity">
                                <input type="button" value="+" class="plus">
                            <form method="POST">
                                <input type="number" step="1" max="99" min="1" name="quantitys" value=<?php echo $u['quantity'] ?> title="Qty" class="qty"
                                        size="4">
                                <input type="button" value="-" class="minus">
                            </div>
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 text-right">
                                <input type="hidden" value=<?PHP echo $u["id_product"]; ?> name="id_product">
                                <button type="submit" class="btn btn-outline-danger btn-xs" formaction="deleteCart.php">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                                <div class="pull-right">
                                    <button type="submit" style="margin: 10px;" class="btn btn-outline-secondary pull-right" formaction="updateCart.php">Update shopping cart</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
                <?php 
                    }
                ?>
                <!-- END PRODUCT -->
                <div class="card-footer">
                    <div class="pull-right" style="margin: 10px">
                        <a href="Recu.php"><button class="btn btn-success pull-right">Checkout</button></a>
                        <div class="pull-right" style="margin: 5px">
                            Total price: <b><?php echo $count ?> DT</b>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</html>