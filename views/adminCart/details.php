<?php
    include '../config.php';
    include CON_FRONT.'adminCartController.php';
    $cartd = details();
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
        <h2 style="font-weight: 700;">Cart Details</h2>
    </div>


    <div class="detail-content" style="padding-left: 25% ">
    <br>
    <br>
    <br>
    <br>
    Id: <?php echo $cartd[0]->Id; ?>
    <br>
    <br>
    Product Id: <?php echo $cartd[0]->Product_Id; ?>
    <br>
    <br>
    Customer Id: <?php echo $cartd[0]->Customer_Id; ?>
    <br>
    <br>
    Quantity: <?php echo $cartd[0]->Quantity; ?>
    <br>
    <br>
    Date & Time: <?php echo $cartd[0]->Date_Time; ?>
    <br>
    <br>
    <br>
    
    <a class="btn btn-primary" href="index.php">Back to List</a>
    <br>
    <br>
    </div>
    <?php include "../layout/adminFooter.php";?>

    
</body>
</html>
