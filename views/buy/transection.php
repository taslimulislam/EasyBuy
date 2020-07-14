<?php
    include '../config.php';
    include CON_FRONT.'transectionController.php';
    $total = totalPrice();
?>

<?php include "../layout/header.php"?>

<body class="transection">
    <div class="bg-holder">
        <div class="bg-blur" style="background-image:url(../bg2.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="gap"></div>
                <div class="col-md-6 col-md-offset-3">
                    <aside class="sidebar-left">
                        <div class="box clearfix">
                            <ul class="cart-total-list text-center mb0">
                                <li><span>Sub Total</span><span><?= $total ?>/-</span>
                                </li>
                                <li><span>Shipping</span><span>100.00/-</span>
                                </li>
                                <li><span>Taxes</span><span>20.00/-</span>
                                </li>
                                <li><span>Total</span><span><?= $total + 120 ?>/-</span>
                                </li>
                            </ul>
                        </div>
                    </aside>
                  <div class="row">
                        <div class="col-md-12 delivery-info">
                            <form>
                                <div class="gap gap-small"></div>
                                <h3>Delivery Information</h3>
                                <br>
                                <div class="form-group">
                                    <input type="text" class="form-control " placeholder="Virat Kohli">
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="+88013XXXXXXXX ">
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="pubali chattar,cumilla">
                                </div>
                            </form>
                        </div>
                        <div class="gap"></div>
                        <div class="col-md-12 bkash">
                            <h4>Payment Via <br><br>
                                <span class="bkash">bkash</span> / <span class="rocket">Rocket</span> / <span
                                    class="citibank">Card</span></h4>
                            <p>Important: You will be redirected to bkash/Rocket app to securely complete your payment.
                            </p> <br>


                            <!-- <button class="btn btn-primary" onclick=invoice();>Complete Checkout</button> -->
                            <a class="btn btn-primary" href="orderlist.php" >Complete Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap"></div>
    </div>
</body>


<?php include "../layout/footer.php"?>