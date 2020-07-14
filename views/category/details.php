<?php
    include '../config.php';
    include CON_FRONT.'categoryController.php';
    $category = details();
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
                        <h2 style="font-weight: 700;">Product Category Details </h2>
                </div>
                <br><br>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-1">
                    <img src="<?php echo RSR.$category[0]->img_path; ?>" style="height:400px; width:400px" alt="" >
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="detail-content" style="padding-left: 25% ">
                    <br>
                    <br>
                    <label for="">ID</label><br>
                    <?php echo $category[0]->Id; ?>
                    <br>
                    <br>
                    <label for="">Name</label><br>
                    <?php echo $category[0]->Name; ?>
                    <br>
                    <br>
                    <label for="">Description</label><br>
                    <?php echo $category[0]->Description; ?>
                    <div class="gap"></div>
                    <a class="btn btn-primary" href="index.php">Index</a>
                    <a class="btn btn-primary" href="update.php?Id=<?= $category[0]->Id ?>">edit</a>
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
