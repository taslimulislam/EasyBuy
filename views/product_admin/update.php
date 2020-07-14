<?php
    include_once '../config.php';
    include_once CON_FRONT.'productController.php';
    $product = adminProductdetails();
    $sub = subCategory();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Update</title>
	<link rel="stylesheet" href="">
</head>
<body>

    <?php include "../layout/adminHeader.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
            <br>
            <br>
            <div class="section-title text-center">
                <h2 style="font-weight: 700;">Admin </h2>
            </div>
        <br>
        <br>
                    <form method = "POST">
                        <input type="hidden" name="id" value="<?php echo $product[0]->Id; ?>">
                        Id: <?php echo $product[0]->Id; ?>
                        <br>
                        <br>
                        <label for="">Name</label><br>
                        <input type="text" name="name" id="" value="<?php echo $product[0]->Name ?>">
                        <br>
                        <br>
                        <label for="">Buying Price</label><br> 
                        <input type="number" name="buyingPrice" id="" value="<?php echo $product[0]->Buying_Price ?>">
                        <br>
                        <br>
                        <label for="">Selling Price</label><br>
                        <input type="Number" name="sellingPrice" id="" value="<?php echo $product[0]->Selling_Price ?>">
                        <br>
                        <br>
                        <label for="">Quantity</label><br>
                        <input type="number" name="quantity" id="" value="<?php echo $product[0]->Quantity ?>">
                        <br>
                        <br>
                        <label for="">Status</label><br>
                        <input type="text" name="status" id="" value="<?php echo $product[0]->Status ?>">
                        <br>
                        <br><br>
                        <label for="">Sub Category Id</label><br>
                        <select name="subCategoryId" id="">
                            <?php foreach($sub as $d)
                            { 
                                
                                if($product[0]->Sub_Category_Id == $d->Id )
                                { ?>
                                <option value="<?= $d->Id ?>" selected ><?= $d->Name ?></option>
                                    
                            <?php  }
                            else
                            { ?>
                                <option value="<?= $d->Id ?>"><?= $d->Name ?></option>
                                <?php 
                                }
                            }
                        ?>
                        </select>
                        <br>
                        <br>
                        <label for="">Description</label><br>
                        <input type="text" name="description" id="" value="<?php echo $product[0]->Description ?>">
                        <br>
                        <br><br>
                        <input type="submit" name="update" id="" value = "update">
                        <a class="btn btn-primary" href="index.php">Back to list</a>

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </form>   
                    </div>
                </div>
            </div> 

        <?php include "../layout/adminFooter.php";?>


</body>
</html>