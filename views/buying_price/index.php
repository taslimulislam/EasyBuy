<?php
    include_once '../config.php';
    include_once CON_FRONT.'buyingPriceController.php';
    $buyingPrice = index();
?>
<html>

    <?php include '../layout/adminHeader.php';?>
     <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2 style="font-weight: 700;">Buying Price </h2>
                </div> 
                
                <br>
                <br>
                <table class="table table-hover" border="1px" align="center">
                    <tr class= "success">
                        <th>Id</th>
                        <th>Product Id</th>
                        <th>Buying Price Lot</th>
                        <th>Date_&_Time</th>
                        <th>Quantity</th>
                        <th>Buying Price</th>
                        <th>Employee id </th>
                        <th>Option</th>
                    </tr>
                    <?php foreach($buyingPrice as $e){ ?>
                    <tr class= "warning">
                        <td><?= $e->Id ?></td>
                        <td><?= $e->Product_Id ?></td>
                        <td><?= $e->Buying_Price_Lot ?></td>
                        <td><?= $e->Date_Time ?></td>
                        <td><?= $e->Quantity ?></td>
                        <td><?= $e->Buying_Price ?></td>
                        <td><?= $e->Employee_Id ?></td>
                        <td><a href="details.php?Id=<?= $e->Id ?>">details</a> | <a href="update.php?Id=<?= $e->Id ?>">edit</a></td>
                    </tr>
                    <?php } ?>
                </table>

                <br>
                <br>
                <br>
                <div class="bp-btn text-center">
                    <a class="btn btn-primary" href="create.php">Create</a>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
    <?php include '../layout/adminFooter.php';?>
</html>