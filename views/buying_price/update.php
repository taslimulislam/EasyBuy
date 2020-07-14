<?php
    include_once '../config.php';
    include_once CON_FRONT.'buyingPriceController.php';
    $buyingPrice = details();
    $product = product();
    $employee = employee();
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
<br><br>
    <div class="section-title text-center">
        <h2 style="font-weight: 700;">Buying Price Update</h2>
    </div>
    
    <br>
    <br>
    <br>
	<form method = "POST" style="padding-left: 25% ">
        <input type="hidden" name="id" value="<?php echo $buyingPrice[0]->Id; ?>">
        Id: <?php echo $buyingPrice[0]->Id; ?>
        <br><br><br>
        <label for="">Product Id</label><br>
       <select name="productId" id="">
            <?php foreach($product as $p)
            { if($buyingPrice[0]->Product_Id == $p->Id )
                { ?>
                <option value="<?= $p->Id ?>" selected ><?= $p->Name ?></option>
                    
               <?php  }
               else
               { ?>
                <option value="<?= $p->Id ?>"><?= $p->Name ?></option>
                <?php 
                }
            } ?>
        </select>
        <br>
        <br>
        <label for="">Buying Price Lot</label><br>
        <input type="number" name="buyingPriceLot" id="" value="<?php echo $buyingPrice[0]->Buying_Price_Lot ?>">
        <br>
        <br>
        <label for="">Date Time</label><br>
        <input type="datetime-local" name="dateTime" id="" value="<?php echo $buyingPrice[0]->Date_Time ?>">
        <br>
        <br>
        <label for="">Quantity</label><br>
        <input type="number" name="quantity" id="" value="<?php echo $buyingPrice[0]->Quantity ?>">
        <br>
        <br>
        <label for="">Buying Price</label>
        <input type="number" name="buyingPrice" id="" value="<?php echo $buyingPrice[0]->Buying_Price ?>">
        <br>
        <br>
        <label for="">Employee Id</label>
        <select name="employeeId" id="">
            <?php foreach($employee as $e)
            { ?>
                <option value="<?= $e->Id ?>"><?= $e->Name ?></option>
            <?php } ?>
        </select>
        <br>
        <br>
        <input type="submit" name="update" id="" value = "update">
        <a class="btn btn-primary" href="index.php">Index</a>

        <br>
        <br>
        <br>
       
    </form> 
     <?php include "../layout/adminFooter.php";?>
</body>
</html>