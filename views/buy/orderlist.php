<?php
    include '../config.php';
    include CON_FRONT.'transectionController.php';
    $checkout = invoice();
    $orderlist = orderlist();
?>

<?php include "../layout/header.php"?>
<body>
    <div class="section-bg">
        <div class="gap"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <table class="table">
                        <thead>
                            <tr class="danger">
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <td><a href="" class=""></a></td>
                            </tr>
                        </thead>  
                        <tbody>
                        <?php foreach($orderlist as $ol){ ?>
                            <tr class="success">
                                <td><?= $ol->Name ?></td>
                                <td><?= $ol->Price ?>/-</td>
                                <td><?= $ol->Quantity ?></td>
                                <td><?= $ol->Total_Price ?>/-</td>
                                <td><?= $ol->Status ?></td>
                                <td><a href="" class="btn btn-info">Track</a></td>
                            </tr>
                            <?php } ?>
                            <!-- <tr class="warning">
                                <td>Mango</td>
                                <td>20/-</td>
                                <td>5kg</td>
                                <td>100</td>
                                <td>Active</td>
                                <td><a href="" class="btn btn-info">Track</a></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="gap"></div>
    </div>
</body>

<?php include "../layout/footer.php"?>