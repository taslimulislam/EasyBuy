 
<?php
    include '../config.php';
    include CON_FRONT.'productController.php';
    
?> 


<html>
<header>

    <?php include '../layout/header.php';?>
    
</header>

<body>
<!-- TOP AREA -->
        <div class="transection">   
            <div class="container">
                <div class="row">
                    <div class="payment">   
                    <div class="col-md-offset-3 col-md-6 col-md-offset-3"> 
                        <h3> Delivery Information</h3>  
                        <form  method="post">
                            <label>Name</label><br>   
                            <input type = "text" name="name"  > <br/> <br/>

                            <label>Phone Number</label><br> 
                            <input type = "number" name="number" value = ""> <br/> <br/>

                            <label>Rigion</label><br> 
                            <input type = "text" name="rigion" value = ""> <br/> <br/>

                            <label>City</label><br> 
                            <input type = "text" name="city" value = ""> <br/> <br/>

                            <label>Address</label><br> 
                            <input type = "text" name="address" value = ""> <br/> <br/>
                        </form>   
                        <h3> Order Summery</h3>
                        <ul class="total-list">
                            <li>Sub Total<span> 400.00/-</span>
                            </li>
                            <li>Shipping<span> 0.00/-</span>
                            </li>
                            <li>Taxes<span> 0.00/-</span>
                            </li>
                            <li>Total<span> 400.00/-</span>
                            </li>
                        </ul>
                        <br>
                        <h3>Payment Via</h3>
                        <img src="" alt="Bkash" height="30px" width="30px">
                        <img src="" alt="Roket"  height="30px" width="30px">
                        <br><br>
                        <button class="btn-btn-primary">place order</button>
                        <br><br>
                    </div>
                </div>
            </div>
            </div>
        </div>

                 
    </body>
    <style>
    .transection{
        background-color: #f2f2f2;

    }
    .payment{
        margin-top: 30px
    }
    .total-list{
        margin-top: 60px
    }
    .total-list ul li{
        
    }
    
    input[type="text"] 
    {
    width: 80%;
    height: 35px;
    position: absolute;
}
    input[type="number"] 
    {
    width: 80%;
    height: 35px;
    position: absolute;
}
    
</style>
   <footer> 
         <?php include '../layout/footer.php'?>
   </footer>
</html>