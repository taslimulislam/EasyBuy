<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form  method="post">
    Username: <input type = "text" name="username"  > <br/> <br/>
    Password: <input type = "password" name="password" value = ""> <br/> <br/>
    <input type="submit" value = "login" name="submit"> <br> <br>
    <button><a href=""></a>Back</button>
    <button>Registration</button>
    </form>
</body>
</html> -->


<?php 
    include '../config.php';
    include CON_FRONT.'loginController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<header>

    <?php include '../layout/header.php';?>
    
</header>
<body>
    <br>    
    <div class="dialog-form">    
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 login-form">
                    <div class="gap gap-small"></div>
                    <h3>User Login</h3>
                    <h5>Welcome back, Login to get started</h5>
                    <form  method="post">
                        <label>Username/Email</label><br>   
                            <input type = "text" name="username"  > <br/> <br/>
                        <label>Password</label><br> 
                            <input type = "password" name="password" value = ""> <br/> <br/>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Remember me
                            </label>
                        </div>
                            <input type="submit" value = "login" name="submit"> <br> <br>
                        <!-- <button class="back"><a href="<?php echo VIEW_FRONT ?>index.php"></a>Back</button> or -->
                        <a class="back" href=" <?php echo VIEW_FRONT ?>index.php">Back</a> or
                        <a class="btn btn-primary" href="../customer/create.php">Registartion</a>
                        <div class="gap gap-small"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>    
    
<?php include '../layout/footer.php';?>
</html>