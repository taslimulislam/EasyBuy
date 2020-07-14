<?php
    include_once '../config.php';
    include_once CON_FRONT.'subCategoryController.php';
    $subCategory = details();
    $cat = category();
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
            <div class="gap gap-smalll"></div>
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2 style="font-weight: 700;">SubCategory Update</h2>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form method = "POST">
                    <input type="hidden" name="id" value="<?php echo $subCategory[0]->Id; ?>">
                    Id: <?php echo $subCategory[0]->Id; ?>
                    <br><br>
                    <label for="">Name</label><br>                    <input type="text" name="Name" id="" value="<?php echo $subCategory[0]->Name ?>">
                    <br>
                    <br>
                    <br>
                    <label for="">CategoryId</label><br>
                    <select name="categoryId" id="">
                        <?php foreach($cat as $d)
                        { 
                            if($subCategory[0]->Category_Id == $d->Id )
                            { ?>
                            <option value="<?= $d->Id ?>" selected ><?= $d->Name ?></option>
                                
                        <?php  }
                        else
                        { ?>
                            <option value="<?= $d->Id ?>"><?= $d->Name ?></option>
                            <?php 
                            } 
                        } ?>
                    </select>
                    <br>
                    <br>
                    <label for="">Description</label><br>
                    <input type="text" name="Description" id="" value="<?php echo $subCategory[0]->Description ?>">
                    <br>
                    <br>
                    <br>
                    <input type="submit" name="update" id="" value = "update">

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

	   