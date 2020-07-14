<?php
    include_once '../config.php';
    include_once CON_FRONT. 'adminRegisterController.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php include "../layout/link.php";?>
    <body style="background-color:#d8ead7">
        <div class="container">
            <br>
            <div class="col-md-12 text-center">
                <h3 style="font-weight:700">REGISTER</h3>
            </div>
            <div class="row">
                <br><br><br>
                <div class="col-md-6 col-md-offset-3">
                    <form action="" method ="post">
                        <label for="">Name</label><br> 
                        <input type = "text" name="name">
                        <br> 
                        <br>
                        <label for="">Email</label><br>
                        <input type = "text" name="email"> 
                        <br>
                        <br>
                        <label for="">Phone</label><br> 
                        <input type = "text" name="phone">
                        <br>
                        <br>
                        <label for="">Address</label><br>
                        <input type = "text" name="address">
                        <br>
                        <br>
                        <label for="">Join Date</label><br>
                        <input type = "date" name="joinDate">
                        <br>
                        <br>
                        <label for="">Salary</label><br>
                        <input type = "number" name="salary">
                        <br>
                        <br>
                        <label for="">Username</label><br> 
                        <input type = "text" name="userName">
                        <br>
                        <br>
                        <label for="">Password</label><br>
                        <input type = "text" name="password"> 
                        <br> 
                        <br>
                        <br>
                        
                        <input type="submit" name="submit"><br><br>

                        <span>Already have an account? <a class="btn btn-primary" href="../adminlogin/create.php">Login</a></span>
                        <br><br><br>
                    </form>
                </div>
            </div>
        </div>
        

    </body>
</html>