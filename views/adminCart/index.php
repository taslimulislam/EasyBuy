<?php
    include_once '../config.php';
    include_once CON_FRONT.'adminCartController.php';
    $cart= index();
?>


<html>
    <?php include "../layout/adminHeader.php";?>
        <br>
        <br>
        <div class="section-title text-center">
            <h2 style="font-weight: 700;">Cart List</h2>
        </div>
        <br>
        <br>

        <div class="container">
        <br>
        <br>
            <table class="table table-hover" border="1px" align="center">
                <tr class="success">
                    <th>Id</th>
                    <th>Product Id</th>
                    <th>Customer Id</th>
                    <th>Quantity</th>
                    <th>Date & Time</th>
                    <th>Option</th>
                </tr>
                    <?php foreach($cart as $e){ ?>
                <tr class="info"> 
                    <td><?= $e->Id ?></td>
                    <td><?= $e->Product_Id ?></td>
                    <td><?= $e->Customer_Id ?></td>
                    <td><?= $e->Quantity ?></td>
                    <td><?= $e->Date_Time ?></td>
                    <td><a href="details.php?Id=<?= $e->Id ?>">details</a>
                </tr>
                
                <?php } ?>
            </table>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
     <?php include "../layout/adminFOoter.php";?>
</html>