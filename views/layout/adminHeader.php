<html>
	<div class="global-wrap">

       <?php include 'link.php';?>
       
       <body>
            <!-- <div class="top-main-area text-center">
                <div class="container">
                    <a href="index.html" class="logo mt5">
                        <img src="#" title="" /> 
                        
                    </a>
                </div>
            </div> -->
            <header class="admin-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="logo text-center">
                                <a href="../index.php"><h1>EasyBuy</h1></a>
                                <span><h3 style="color:#fff"><a href="../admin/index.php">Dashboard</a></h3></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <!--START MAIN NAVIGATION -->
                            <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                            <nav class= "admin-menu">
                                <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                                    <li class="active"><a href="../product_admin/index.php">Products</a></li>
                                    <li><a href="../category/index.php">Category</a></li>
                                    <li><a href="../sub_category/index.php">Sub Category</a></li>
                                    <li><a href="../customer/index.php">Customer</a></li>
                                    <li><a href="../employee/index.php">Employee</a></li>
                                    <li><a href="../adminLogin/index.php">Logins</a></li>
                                    <li><a href="../adminCart/index.php">Cart</a></li>
                                    <li><a href="../order/index.php">Order</a></li>
                                    <li><a href="../invoice/index.php">Invoice</a></li>
                                    <li><a href="../buying_price/index.php">Buying Price</a></li> 
                                </ul>
                                
                            </nav>
                            <!-- END MAIN NAVIGATION -->
                        </div>
                        <div class="col-md-2">
            
                        
                            <!-- LOGIN REGISTER LINKS -->
                            <ul class="login-register">

                            
                                
                                <li><a class="popup-text" href="<?= VIEW_FRONT."adminLogin/logout.php"?>" data-effect="mfp-move-from-top"><i class="fa fa-sign-out"></i>Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            <!-- LOGIN REGISTER LINKS CONTENT -->
            <div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
                <i class="fa fa-sign-in dialog-icon"></i>
                <h3>User Login</h3>
                <h5>Welcome back, Login to get started</h5>
                <form class="dialog-form">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" placeholder="user@domain.com" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Remember me
                        </label>
                    </div>
                    <input type="submit" value="Sign in" class="btn btn-primary">
                </form>
                <ul class="dialog-alt-links">
                    <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Not member yet</a>
                    </li>
                    <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Forgot password</a>
                    </li>
                </ul>
            </div>


            <div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
                <i class="fa fa-edit dialog-icon"></i>
                <h3>Member Register</h3>
                <h5>Ready to get best offers? Let's get started!</h5>
                <form class="dialog-form">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" placeholder="user@domain.com" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" placeholder="My secret password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Repeat Password</label>
                        <input type="password" placeholder="Type your password again" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Your Area</label>
                                <input type="password" placeholder="Boston" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Postal/Zip</label>
                                <input type="password" placeholder="12345" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Get hot offers via e-mail
                        </label>
                    </div>
                    <input type="submit" value="Sign up" class="btn btn-primary">
                </form>
                <ul class="dialog-alt-links">
                    <li><a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">Already member</a>
                    </li>
                </ul>
            </div>

       </body>
</html>


