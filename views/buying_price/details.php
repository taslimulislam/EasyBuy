<?php
    include '../config.php';
    include CON_FRONT.'buyingPriceController.php';
    $buyingPrice = details();
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

    <?php include "../layout/adminHeader.php"?>
<br><br>
    <div class="section-title text-center">
        <h2 style="font-weight: 700;">Buying Price Details</h2>
    </div> 

    <div class="detail-content" style="padding-left: 25% ">
    <br>
    <br>
    <br>

    Id: <?php echo $buyingPrice[0]->Id; ?>
    <br>
    <br>
    Product Id: <?php echo $buyingPrice[0]->Product_Id; ?>
    <br>
    <br>
    Buying Price Lot: <?php echo $buyingPrice[0]->Buying_Price_Lot; ?>
    <br>
    <br>
    Date & Time: <?php echo $buyingPrice[0]->Date_Time; ?>
    <br>
    <br>
    Quantity: <?php echo $buyingPrice[0]->Quantity; ?>
    <br>
    <br>
    Buying Price: <?php echo $buyingPrice[0]->Buying_Price; ?>
    <br>
    <br>
    Employee Id: <?php echo $buyingPrice[0]->Employee_Id; ?>
    <br>
    <br>
    <a class="btn btn-primary" href="index.php">Back to List</a>
    <a class="btn btn-primary" href="update.php?Id=<?= $buyingPrice[0]->Id ?>">edit</a>
    <br>
    <br>
    
    </div>

    <?php include "../layout/adminFooter.php";?>

</body>
</html>
