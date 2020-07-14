<?php
    include '../config.php';
    include CON_FRONT.'invoiceControlle.php';
    $ind = details();
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
   
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                        <h2 style="font-weight: 700;">Invoice Details </h2>
                </div>
                <br><br>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-1">
                    <div class="detail-content" style="padding-left: 25% ">
                    <br>
                    <br>
                    <label for="">Id :</label>
                    <?php echo $ind[0]->Id; ?>
                    <br>
                    <br>
                    <label for="">Employee Id :</label>
                    <?php echo $ind[0]->Employee_Id; ?>
                    <br>
                    <br>
                    <label for="">Customer Id :</label>
                    <?php echo $ind[0]->Customer_Id; ?>
                    <br>
                    <br>
                    <label for="">Date & Time :</label>
                    <?php echo $ind[0]->Date_Time; ?>
                    <br>
                    <br>
                    <label for="">Total Price :</label>
                    <?php echo $ind[0]->Total_Price; ?>
                    <br>
                    <br>
                    <label for="">Status :</label>
                    <?php echo $ind[0]->Status; ?>
                    <div class="gap"></div>
                    <a class="btn btn-primary" href="index.php">Index</a>
                    <a class="btn btn-primary" href="update.php?Id=<?= $ind[0]->Id ?>">edit</a>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <div class="gap"></div>
    </div>
</div>
    <?php include "../layout/adminFooter.php";?>
    
</body>
</html>
