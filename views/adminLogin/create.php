<?php
    include_once '../config.php';
    include_once CON_FRONT. 'adminLoginController.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body style="background-color:#d8ead7">
    <?php include "../layout/link.php";?>
    <div>
        <div class="gap"></div>
            <div class="container">
                <br>
                <div class="col-md-12 text-center">
                    <h3 style="font-weight:700">LOGIN</h3>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form  method="post">
                            <label>Username</label><br>   
                            <input type = "text" name="username"> 
                            
                            <br/> <br/><br>

                            <label>Password</label><br> 
                            <input type = "password" name="password" value = ""> <br/> <br/><br>
                                                
                            <input type="submit" value = "login" name="submit"> <br> <br>
                            <span>Don't you have any account? <a class="btn btn-primary" href="../adminRegister/index.php">Registartion</a></span>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>