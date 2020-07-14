<?php
    include_once '../config.php';
    include_once CON_FRONT.'buyingPriceController.php';
    $product = product();
    $employee = employee();
    
?>
<html>

    <?php include "../layout/adminHeader.php"?>
 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="section-title text-center">
                <h2 style="font-weight: 700;">Buying Price</h2>
            </div> <br><br><br>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="" method="POST">
                    <label for="">Product Id</label><br>
                    <select name="productId" id="">
                        <option value="" disabled selected>--select one--</option>
                        <?php foreach($product as $p)
                        { ?>
                            <option value="<?= $p->Id ?>"><?= $p->Id ." : "  ?><?= $p->Name ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <br>
                    <label for="">Buying Price Lot</label><br>
                    <input type="number" name="buyingPriceLot">
                    <br>
                    <br>
                    <label for="">Date Time</label><br>
                    <input type="datetime-local" name="dateTime">
                    <br>
                    <br>
                    <label for="">Quantity</label><br>
                    <input type="number" name="quantity">
                    <br>
                    <br>
                    <label for="">Buying Price</label><br>
                    <input type="number" name="buyingPrice">
                    <br>
                    <br>
                    <label for="">Employee Id</label><br>
                    <select name="employeeId" id="">
                        <option value="" disabled selected>--select one--</option>
                        <?php foreach($employee as $e)
                        { ?>
                            <option value="<?= $e->Id ?>"><?= $e->Id ." : "  ?><?= $e->Name ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <br>
                    <label for="">Description</label><br>
                    <input type="text" name="description">
                    <br>
                    <br><br>
                    <input type="submit" name="submit">
                    <a class="btn btn-primary" href="index.php">Back to List</a>
                </form>
            </div>
        </div>
    </div>
</div>













      
      

<br>
<br>
<br>
<br>
<br>
    <?php include "../layout/adminFooter.php"?>

</html>
