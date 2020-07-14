<?php
    include_once '../config.php';
    include_once CON_FRONT.'adminCheck.php';

    $c = chkAdmin();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>


<?php include "../layout/adminHeader.php";?>


        
        <!-- buying price -->

        <div class="admin-dashboard">
            <div class="container">
            <div class="gap gap-small"></div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="single-box">
                            <!-- product -->
                            <div class="col-md-4">
                                <a href="../product_admin/index.php">
                                    <div class="card bg-warning">
                                        <div class="card-body text-center">
                                            <h4 class="card-text">Products</h4>
                                            <div class="single-box-border"></div>
                                            <h5><a href="../product_admin/index.php">View Details > </a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- category -->
                            <div class="col-md-4">
                                <a href="../category/index.php">
                                    <div class="card bg-danger">
                                        <div class="card-body text-center">
                                            <h4 class="card-text">Category</h4>
                                            <div class="single-box-border"></div>
                                            <h5><a href="../category/index.php">View Details > </a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Sub-Category -->
                            <div class="col-md-4">
                                <a href="../sub_category/index.php">
                                    <div class="card bg-info">
                                        <div class="card-body text-center">
                                            <h4 class="card-text">Sub-Category</h4>
                                            <div class="single-box-border"></div>
                                            <h5><a href="../sub_category/index.php">View Details > </a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="single-box">
                            <!-- Customer -->
                            <div class="col-md-4">
                                <a href="../customer/index.php">
                                    <div class="card bg-info">
                                        <div class="card-body text-center">
                                            <h4 class="card-text">Customer</h4>
                                            <div class="single-box-border"></div>
                                            <h5><a href="../customer/index.php">View Details > </a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- employee -->
                            <div class="col-md-4">
                                <a href="../employee/index.php">
                                    <div class="card bg-warning">
                                        <div class="card-body text-center">
                                            <h4 class="card-text">Employee</h4>
                                            <div class="single-box-border"></div>
                                            <h5><a href="../employee/index.php">View Details > </a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Login -->
                            <div class="col-md-4">
                                <a href="../adminLogin/index.php">
                                    <div class="card bg-danger">
                                        <div class="card-body text-center">
                                            <h4 class="card-text">Login</h4>
                                            <div class="single-box-border"></div>
                                            <h5><a href="../adminLogin/index.php">View Details > </a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="single-box">
                             <!-- cart -->
                             <div class="col-md-4">
                                <a href="../adminCart/index.php">
                                    <div class="card bg-success">
                                        <div class="card-body text-center">
                                            <h4 class="card-text">Cart</h4p>
                                            <div class="single-box-border"></div>
                                            <h5><a href="../adminCart/index.php">View Details > </a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Order -->
                            <div class="col-md-4">
                                <a href="../order/index.php">
                                    <div class="card bg-success">
                                        <div class="card-body text-center">
                                            <h4 class="card-text">Order</h4p> 
                                            <div class="single-box-border"></div>
                                            <h5><a href="../order/index.php">View Details > </a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- invoice -->
                            <div class="col-md-4">
                                <a href="../invoice/index.php">
                                    <div class="card bg-primary">
                                        <div class="card-body text-center">
                                            <h4 class="card-text">Invoice</h4>
                                            <div class="single-box-border"></div>
                                            <h5><a href="../invoice/index.php">View Details > </a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="single-box">
                            <!-- Buying Price -->
                            <div class="col-md-4">
                                <a href="../buying_price/index.php">
                                    <div class="card bg-primary">
                                        <div class="card-body text-center">
                                            <h4 class="card-text">Buying Price</h4>
                                            <div class="single-box-border"></div>
                                            <h5><a href="../buying_price/index.php">View Details > </a></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gap gap-small"></div>
            </div>
        </div>

        
        
        
                            
                            
                            
                            
        
        
        
        
        

        <!-- customer -->
        
        <!-- invoice -->
        
        <!-- login -->
        
        <!-- order -->
        
        <!-- product -->
        
        <!-- sub category -->
        
        
        
        
        
        
        
    </div>
    



<?php include "../layout/adminFooter.php";?>
    
</body>
</html>