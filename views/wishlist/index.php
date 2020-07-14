<?php
    include_once '../config.php';
    include_once CON_FRONT.'cartController.php';
    
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
                                <th>QTY</th>
                                <th>Price</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cart-item-image">
                                    <a href="#">
                                        <img src="img/product/computer and leptop/apple - 70 x70.jpg" alt="Image Alternative text" title="Amaze" />
                                    </a>
                                </td>
                                <td><a href="#">Laptop</a>
                                </td>
                                <td class="cart-item-quantity"><i class="fa fa-minus cart-item-minus"></i>
                                    <input type="text" name="cart-quantity" class="cart-quantity" value="1" /><i class="fa fa-plus cart-item-plus"></i>
                                </td>
                                <td>$450</td>
                                <td class="cart-item-remove">
                                    <a class="fa fa-times" href="#"></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="cart-item-image">
                                    <a href="#">
                                        <img src="img/product/guiter - 70 x70.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                                    </a>
                                </td>
                                <td><a href="#">Guitar</a>
                                </td>
                                <td class="cart-item-quantity"><i class="fa fa-minus cart-item-minus"></i>
                                    <input type="text" name="cart-quantity" class="cart-quantity" value="1" /><i class="fa fa-plus cart-item-plus"></i>
                                </td>
                                <td>$100</td>
                                <td class="cart-item-remove">
                                    <a class="fa fa-times" href="#"></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="cart-item-image">
                                    <a href="#">
                                        <img src="img/product/health and beauty/perfume 70 x70.jpg" alt="Image Alternative text" title="Old No7" />
                                    </a>
                                </td>
                                <td><a href="#">Perfume</a>
                                </td>
                                <td class="cart-item-quantity"><i class="fa fa-minus cart-item-minus"></i>
                                    <input type="text" name="cart-quantity" class="cart-quantity" value="1" /><i class="fa fa-plus cart-item-plus"></i>
                                </td>
                                <td>$20</td>
                                <td class="cart-item-remove">
                                    <a class="fa fa-times" href="#"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>  
                </div>
                <div class="col-md-3">
                    <ul class="cart-total-list">
                        <li><span>Sub Total</span><span>$570.00</span>
                        </li>
                        <li><span>Shipping</span><span>$0.00</span>
                        </li>
                        <li><span>Taxes</span><span>$0.00</span>
                        </li>
                        <li><span>Total</span><span>$570.00</span>
                        </li>
                    </ul>
                    <a href="page-checkout.html" class="btn btn-primary btn-lg">Checkout</a>
                </div>
            </div>
            <div class="gap"></div>
        </div>


    </body>
   <footer> 
         <?php include '../layout/footer.php'?>
   </footer>
</html>