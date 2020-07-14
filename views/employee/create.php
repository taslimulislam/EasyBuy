<?php
    include_once '../config.php';
    include_once CON_FRONT. 'employeeController.php';

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

    <?php include "../layout/adminHeader.php";?>

     <?php 
        if(isset($_REQUEST['err']))
        {
            echo "<h4 style='color:red'>Error</h4>";
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
            "salary" => "",
            "userName" => "",
            "password" => "",
            "type" => "",
        
        ];
        if(isset($_REQUEST['oldValue']))
        {
            $oldValue = $_REQUEST['oldValue'];
        }
        ?>


    <br>
    <br>
    <br>

    <form action="" method ="post" style="padding-left: 40%">
        <b>Name:</b> <input style="margin-left: 5%" type="text"name = "name" id="name" onkeyup="validateName();" value="<?= $oldValue['name'] ?>">
        <span id="msgName" style="display:none; color:red;margin-left: 11%">Name cannot be empty</span>
        <br>
        <br>
        <b>Email:</b> <input style="margin-left: 5%" type="text" name ="email" id="email" onkeyup="validateEmail();employeeEmail(this.value)" value="<?= $oldValue['email'] ?>">
        <span id="msgEmail" style="display:none; color:red;margin-left: 11%">Email cannot be empty</span>
        <span id="msgEmail2" style="display:none; color:red;margin-left: 11%">Email already exists</span>
        <br>
        <br>
        <b>Phone:</b> <input style="margin-left: 4.3%" type="number" name ="phone" id="phone" onkeyup="validatePhone();employeePhone(this.value)" value="<?= $oldValue['phone'] ?>">
        <span id="msgPhone" style="display:none; color:red;margin-left: 11%">Phone cannot be empty</span>
        <span id="msgPhone2" style="display:none; color:red;margin-left: 11%">Phone number already exists</span>
        <br>
        <br>
        <b>Address:</b> <input style="margin-left: 3%" type="text" name ="address" id="address" onkeyup="validateAddress();" value="<?= $oldValue['address'] ?>">
        <span id="msgAddress" style="display:none; color:red;margin-left: 11%">Address cannot be empty</span>
        <span id="msgAddress2" style="display:none; color:red;margin-left: 11%">Address already exists</span>
        <br>
        <br>
        <b>Join date:</b> <input style="margin-left: 2.4%" type="date" name ="joinDate" id="joinDate" onkeyup="validateJoinDate();" value="<?= $oldValue['joinDate'] ?>">
        <span id="msgJoinDate" style="display:none; color:red;margin-left: 11%">Join date cannot be empty</span>
        <br>
        <br>
        <b>Salary:</b> <input style="margin-left: 4.6%" type="number" name ="salary" id="salary" onkeyup="validateSalary();" value="<?= $oldValue['salary'] ?>">
        <span id="msgSalary" style="display:none; color:red;margin-left: 11%">Salary cannot be empty</span>
        <br>
        <br>
        <b>User Name:</b> <input style="margin-left: 1%" type="text" name ="userName" id="userName" onkeyup="validateUserName();employeeUserName(this.value);" value="<?= $oldValue['userName'] ?>">
        <span id="msgUserName" style="display:none; color:red;margin-left: 11%">User Name cannot be empty</span>
        <span id="msgUserName2" style="display:none; color:red;margin-left: 11%">User Name already exists</span>
        <br>
        <br>
        <b>Password:</b> <input style="margin-left: 2%" type="text" name ="password" id="password" onkeyup="validatePassword();" value="<?= $oldValue['password'] ?>">
        <span id="msgPassword" style="display:none; color:red;margin-left: 11%">Password cannot be empty</span>
        <br>
        <br>
        <b>Type:</b> <select style="margin-left: 6%" name="type" id="type" onchange="validateType();" value="<?= $oldValue['type'] ?>">
           <option value="" disabled selected>--select one--</option>
            <?php if($oldValue['type'] == 'admin')
            { ?>
                <option value="admin" selected>Admin</option>
                <option value="user">User</option>
            <?php }
            else if($oldValue['type'] == 'user'){ ?>
            <option value="admin">Admin</option>
            <option value="user" selected>User</option>

            <?php } else{ ?>
                <option value="admin">Admin</option>
                <option value="user">User</option>
           <?php } ?>
        </select>
        <br>
        <br>
        <input type="submit" name="submit">
        
    </form>
    <br>
    <br>
    <br>
<?php include "../layout/adminFooter.php";?>

<br>
<br>
<br>
<br>
<br>

</body>
</html>