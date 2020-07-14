<?php
    include '../config.php';
    include CON_FRONT.'subCategoryController.php';
    $subCat = details();
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
            <div class="gap gap-small"></div>
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2 style="font-weight: 700;">SubCategory Details</h2>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <img src="<?php echo RSR.$subCat[0]->img_path; ?>" style="height:400px;width:400px" alt="" >
            </div>
            <div class="col-md-4 col-md-offset-1">
                Id: <?php echo $subCat[0]->Id; ?>
                <br>
                <br>
                Name: <?php echo $subCat[0]->Name; ?>
                <br>
                <br>
                Category: <?php echo $subCat[0]->Category_Id; ?>
                <br>
                <br>
                Description: <?php echo $subCat[0]->Description; ?>
            </div>
        </div>
        <br>
            <br>
            <div class="text-center">
                <a class="btn btn-primary" href="index.php">Back to List</a>
                <a class="btn btn-primary" href="update.php?Id=<?= $subCat[0]->Id ?>">Edit</a>
            </div>
            <br>
            <br>
            <br>
    </div>  

    <?php include "../layout/adminFooter.php";?>

</body>
</html>


