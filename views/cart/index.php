<?php
    include_once '../config.php';
    include_once CON_FRONT.'cartController.php';
    //$userCart = getUid();
    $id = $_SESSION['userId'];
    // echo $id;
    $cart = showCart($id);
    
    //print_r ($userCart);
    //print_r($cart);
?>
<html>
<header>

    <?php include '../layout/header.php';?>
    
</header>

    <body>

        <div class="gap"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <table class="table cart-table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Date/Time</th>
                                <th>Price</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($cart as $c)
                                 { ?>
                                   
                                
                                <td class="cart-item-image">
                                    <a href="#">
                                        <img src="<?= RSR.$c->img_path ?>" alt="Image Alternative text" title="Flower" height="70px" width="70px" />
                                    </a>
                                </td>
                                <td><a href="#"><?= $c->Name ?></a>
                                </td>
                                <td class="cart-item-quantity"><i onclick=updateCart(<?= $c->Id ?>,-1); class="fa fa-minus cart-item-minus"></i>
                                    <input id="qnty<?= $c->Id ?>" type="text" name="cart-quantity" class="cart-quantity" value="<?= $c->Cart_Quantity ?>" /><i onclick=updateCart(<?= $c->Id ?>,1); class="fa fa-plus cart-item-plus"></i>
                                </td>
                                <td><?= $c->Date_Time ?></td>
                                <td id="total<?= $c->Id ?>"><?= $c->Selling_Price * $c->Cart_Quantity ?></td>
                                <td class="cart-item-remove" onclick=deleteCart(<?= $c->Id ?>);document.location.reload(true);>
                                    <a class="fa fa-times" href="#"></a>
                                </td>
                            </tr>
                            
                        <?php } ?>
                        </tbody>
                    </table>  
                </div>
                <div class="col-md-3">



             <ul class="cart-total-list">
                        <li><span>Sub Total</span><span id="sub">0.00/-</span>
                        </li>
                        <li><span>Shipping</span><span>0.00/-</span>
                        </li>
                        <li><span>Taxes</span><span>0.00/-</span>
                        </li>
                        <li><span>Total</span><span id="total">00.00/-</span>
                        </li>
                    </ul>





             <a href="../buy/transection.php" class="btn btn-primary btn-lg">Checkout</a>
                </div>
            </div>
            <div class="gap"></div>
        </div> 

    </body>
   <footer> 
         <?php include '../layout/footer.php'?>
   </footer>
</html>
<script>
cartTotal();
</script>

