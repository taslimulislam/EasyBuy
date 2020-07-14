<?php
include_once '../config.php';
include_once CON_FRONT.'productController.php';
$subcat = subCategory();

?>
<html>
    <head>
        <?php include "../layout/adminHeader.php";?>

        <script src="../../resources/script/jQuery.js"></script>

        <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
        <script src="../../resources/script/images.js"></script>

        <script src="../../resources/script.js"></script>
        <style>
        .uploadedImage{
            height: 200px;
            width: 200px
        }
    </style>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                <br>
                    <div class="section-title text-center">
                        <h2 style="font-weight: 700;">Admin </h2>
                    </div>
                    <br>
                    <br>
                <div> 
                <form id="uploadForm" method="post" enctype="multipart/form-data">
                    <div id="targetLayer"><img src="../../resources/img/default.png" alt=""  style="height:100px;width:100px" id="img"></div>
                    <br>
                    <div id="uploadFormLayer">
                        <input id="imgUpload" name="userImage" type="file" /><br/>
                        <input type="submit" value="Upload" />
                        <div id="msgSuccess" style="color:red"></div>
                    </div>
                </form>
            </div>

            <div class="pa-form">
                <form action="" method="POST">
                    <input type="hidden" name="proPic" id="proPic" value="">
                    <label for="">Name</label><br>
                    <input type="text" name="name">
                    <br>
                    <br>
                    <label for="">Buying Price</label><br>
                    <input type="number" name="buyingPrice">
                    <br>
                    <br>
                    <label for="">Selling Price</label><br>
                    <input type="number" name="sellingPrice">
                    <br>
                    <br>
                    <label for="">Quantity</label><br>
                    <input type="number" name="quantity">
                    <br>
                    <br>
                    <label for="">Status</label><br>
                    <input type="text" name="status">
                    <br>
                    <br>
                    <label for="">Description</label><br>
                    <input type="text" name="description">
                    <br>
                    <br>
                    <label for="">Sub CategoryId</label><br>
                    <select name="subCategoryId" id="">
                        <option value="" disabled selected>--select one--</option>
                            <?php foreach($subcat as $d)
                            { ?>
                        <option value="<?= $d->Id ?>"><?= $d->Id ." : "  ?><?= $d->Name ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <br>
                    <label for="">Date</label><br>
                    <input type="date" name="dateTime">
                    <br>
                    <br>
                    <br>
                    <input type="submit" name="submit">
                    <a class="btn btn-primary" href="index.php">Back to list</a>
                </form>
            </div>
                <div class="gap"></div>
                </div>
            </div>
        </div>
    </body>
            
    <footer>
      <?php include "../layout/adminFooter.php";?>  
    </footer>

</html>
