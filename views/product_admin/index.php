<?php
    include_once '../config.php';
    include_once CON_FRONT.'productController.php';
    $product = index();
?>
<html>

<?php include "../layout/adminHeader.php";?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="section-title text-center">
                <h2 style="font-weight: 700;">Product Admin </h2>
        </div>
        <br>

        <a class="btn btn-primary" href="create.php">Create</a> 
        <br><br>
                <table class="table table-hover" border="1px" align="center">
                    <tr class="success">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Buying Price</th>
                        <th>Selling Price</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Description</th>
                        <th>Sub Category Id</th>
                        <th>Date Time</th>
                        <th>Option</th>
                    </tr>
                    <?php foreach($product as $e){ ?>
                        <tr class="danger">
                            <td><?= $e->Id ?></td>
                            <td><?= $e->Name ?></td>
                            <td><?= $e->Buying_Price ?></td>
                            <td><?= $e->Selling_Price ?></td>
                            <td><?= $e->Quantity ?></td>
                            <td><?= $e->Status ?></td>
                            <td><?= $e->Description ?></td>
                            <td><?= $e->Sub_Category_Id ?></td>
                            <td><?= $e->Date_Time ?></td>

                            <td><a href="details.php?Id=<?= $e->Id ?>">details</a> | <a href="update.php?Id=<?= $e->Id ?>">edit</a></td>
                        </tr>
                    <?php } ?>
                    

                </table>
                <br>
                <br>
                <br>
                </div>
            </div>
        </div>
    <?php include "../layout/adminFooter.php";?>


</html>