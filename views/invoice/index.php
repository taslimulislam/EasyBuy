<?php
    include_once '../config.php';
    include_once CON_FRONT.'invoiceControlle.php';
    $in = index();
?>


<html>
    <?php include "../layout/adminHeader.php";?>
        <br>
        <br>
        <div class="section-title text-center">
            <h2 style="font-weight: 700;">Invoice</h2>
        </div>
        <br>
        <br>

        <div class="container">

            
            <table class="table table-hover" border="1px" align="center">
                <tr class= "danger">
                    <th>Id</th>
                    <th>Employee id</th>
                    <th>Customer id</th>
                    <th>Date-time</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Option</th>
                </tr>
                    <?php foreach($in as $e){ ?>
                <tr class="success">
                    <td><?= $e->Id ?></td>
                    <td><?= $e->Employee_Id ?></td>
                    <td><?= $e->Customer_Id ?></td>
                    <td><?= $e->Date_Time ?></td>
                    <td><?= $e->Total_Price ?></td>
                    <td><?= $e->Status ?></td>
                    <td><a href="details.php?Id=<?= $e->Id ?>">details</a> | 
                    <a href="update.php?Id=<?= $e->Id ?>">edit</a></td>
                </tr>
                
                <?php } ?>
            </table>
            <br>
            <br>
            <!-- <a class="btn btn-primary" href="create.php">Create</a> -->
            <br>
            <br>
            <br>
        </div>
     <?php include "../layout/adminFOoter.php";?>
</html>