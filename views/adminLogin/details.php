<?php
    include '../config.php';
    include CON_FRONT.'adminLoginController.php';
    $logd = details();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

    <?php include "../layout/adminHeader.php";?>
    <br>

    <div class="section-title text-center">
        <h2 style="font-weight: 700;">Login Details</h2>
    </div>

    

    <div class="detail-content" style="padding-left: 25% ">
    <br>
    <br>
    <br>
    <br>
    Id: <?php echo $logd[0]->Id; ?>
    <br>
    <br>
    User Name: <?php echo $logd[0]->User_Name; ?>
    <br>
    <br>
    Password: <?php echo $logd[0]->Password; ?>
    <br>
    <br>
    Type: <?php echo $logd[0]->Type; ?>
    <br>
    <br>
    Status: <?php echo $logd[0]->Status; ?>

    <br>
    <br>
    <br>
    <a class="btn btn-primary" href="index.php">Back to List</a>
    <br>
    <br>
    <br>
    </div>
    <?php include "../layout/adminFooter.php";?>

    
</body>
</html>
