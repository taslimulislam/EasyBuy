<?php
    include '../config.php';
    include CON_FRONT.'transectionController.php';
    $price = singleBuy();
?>

<?php include "../layout/header.php"?>

<body class="transection">
    <div class="bg-holder">
        <div class="bg-blur" style="background-image:url(../bg2.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="gap gap-small"></div>
                    <div class="col-md-6 col-md-offset-3">
                        <aside class="sidebar-left">
                            <div class="box clearfix">
                                <ul class="cart-total-list text-center mb0">
                                    <li><span>Sub Total</span><span><?= $price ?>/-</span>
                                    </li>
                                    <li><span>Shipping</span><span>100.00/-</span>
                                    </li>
                                    <li><span>Taxes</span><span>20.00/-</span>
                                    </li>
                                    <li><span>Total</span><span><?= $price + 120 ?>/-</span>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <br><br>
                        <div class="row">
                            <div class="col-md-12 delivery-info">
                                <form action="#">
                                    <h3>Delivery Information</h3>
                                    <br>
                                    <div class="form-group">
                                        <input type="text" class="form-control " placeholder="Type your name">
                                    </div>
                                    <br><br>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number ">
                                    </div>
                                    <br><br>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Type your address">
                                    </div>
                                </form>
                            </div>
                            <div class="gap"></div>
                            <div class="col-md-12 transection">
                                <h4>Payment Via</h4>
                                <h4><span>bkash / Rocket / Card</span></h4>
                                <p>Important: You will be redirected to bkash/Rocket app to securely complete your payment.</p> <br>

                                <form action="" method="post">
                            
                                    <input type="hidden" name="total" value="">
                                    <!-- <input type="submit" Value="Complete Checkout" class="btn btn-primary"> -->
                                    <a class="btn btn-primary" href="orderlist.php" >Complete Checkout</a>

                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>
    </body>


<?php include "../layout/footer.php"?>