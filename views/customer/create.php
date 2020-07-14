<?php
include_once '../config.php';
include_once CON_FRONT. 'customerController.php';
$customer = index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../../resources/script/frontendValidate.js"></script>
</head>
<body>


<?php include "../layout/header.php";?>
<br>
<div class="container">
 <?php 
        if(isset($_REQUEST['err']))
        {
            echo "<h4 style='color:red'><b>Errors:</b></h4>";
            $err = $_REQUEST['err'];
            foreach($err as $e)
            {
                echo "<p style='color:red'>".$e."</p>";
            }
        }
        $oldValue = [
            "name" => "",
            "email" => "",
            "phone" => "",
            "address" => "",
            "joinDate" => "",
            "userName" => "",
            "password" => "",
        
        ];
        if(isset($_REQUEST['oldValue']))
        {
            $oldValue = $_REQUEST['oldValue'];
        }
        ?>
        
    <div class="registration-dialog">
        
            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-md-offset-3 ">
                <br>
                    <h3>Registration</h3>
                    <h5>Ready to get best offers? Let's get started!</h5>
                    <form action="" method ="post">
                        
                        <input type="text" name = "name" id="name" placeholder="Username" onkeyup="validateName();" value="<?= $oldValue['name'] ?>">
                        <span id="msgName" style="display:none; color:red;margin-left: 11%">Name cannot be empty</span>
                        <br><br><br>

                        <input type="text" name ="email" id="email" placeholder="Email" onkeyup="validateEmail();customerEmail(this.value);" value="<?= $oldValue['email'] ?>" >
                        <span id="msgEmail" style="display:none; color:red;margin-left: 11%">Email cannot be empty</span>
                         <span id="msgEmail2" style="display:none; color:red;margin-left: 11%">Email already exists</span>
                        <br><br><br>

                        <input type="text" name ="phone" id="phone" placeholder="Phone Number" onkeyup="validatePhone();customerPhone(this.value);" value="<?= $oldValue['phone'] ?>" >
                        <span id="msgPhone" style="display:none; color:red;margin-left: 11%">Phone cannot be empty</span>
                        <span id="msgPhone2" style="display:none; color:red;margin-left: 11%">Phone number already exists</span>
                        <br><br><br>

                        <input type="text" name ="address" id="address" placeholder="Address" onkeyup="validateAddress();" value="<?= $oldValue['address'] ?>">
                        <span id="msgAddress" style="display:none; color:red;margin-left: 11%">Address cannot be empty</span>
                        <br><br><br>

                        <input type="date" name ="joinDate" id="joinDate" placeholder="Join Date" onkeyup="validateJoinDate();" value="<?= $oldValue['joinDate'] ?>">
                        <span id="msgJoinDate" style="display:none; color:red;margin-left: 11%">Join date cannot be empty</span>
                        <br><br><br>

                        <!-- <input type="password" name ="password" id="password" placeholder="Type secrectly your password" onkeyup="validatePassword();" value="<?= $oldValue['password'] ?>">
                        <span id="msgPassword" style="display:none; color:red;margin-left: 11%">Password cannot be empty</span>
                        <br><br><br> -->

                        <input type="password" name ="password" id="password" placeholder="Password" onkeyup="validatePassword();" value="<?= $oldValue['password'] ?>">
                        <span id="msgPassword" style="display:none; color:red;margin-left: 11%">Password cannot be empty</span>
                        <br><br><br>

                        <input type="submit" name="submit">
                        <div class="gap gap-small"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<br>
<br>



<?php include "../layout/footer.php";?>
</body>
</html>