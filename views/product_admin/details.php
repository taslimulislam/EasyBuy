<?php
    include '../config.php';
    include CON_FRONT.'productController.php';
    $subCat = adminProductdetails();
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
    <br><br><br>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2 style="font-weight: 700;">Admin </h2>
                </div>
                <div class="gap gap-small"></div>
                <div class="col-md-6">
                    <img src="<?php echo RSR.$subCat[0]->img_path; ?>" style="height:500px;width:500px" alt="" >
                </div>

                <div class="col-md-6">
                    <a class="btn btn-primary" href="">Details of Product</a>
                    <div class="gap gap-small"></div>
                    <h4>Id: <?php echo $subCat[0]->Id; ?></h4>
                    <br>
                    <h4>Name: <?php echo $subCat[0]->Name; ?></h4>
                    <br>
                    <h4>Buying Price: <?php echo $subCat[0]->Buying_Price; ?></h4>
                    <br>
                    <h4>Selling Price: <?php echo $subCat[0]->Selling_Price; ?></h4>
                    <br>
                    <h4>Quantity: <?php echo $subCat[0]->Quantity; ?></h4>
                    <br>
                    <h4>Status: <?php echo $subCat[0]->Status; ?></h4>
                    <br>
                    <h4>Sub Category Id: <?php echo $subCat[0]->Sub_Category_Id; ?></h4>
                    <br>
                    <h4>Description: <?php echo $subCat[0]->Description; ?></h4>
                </div>

                <div class="gap gap-small"></div>

                <div class="text-center">
                    <a class="btn btn-primary" href="index.php">Back to list</a>   
                    <a class="btn btn-primary" href="update.php?Id=<?= $subCat[0]->Id ?>">Edit</a>
                </div>
                <div class="gap gap-small"></div>
            </div>
        </div>
    </div>
    
    <?php include "../layout/adminFooter.php";?>

</body>
</html>
