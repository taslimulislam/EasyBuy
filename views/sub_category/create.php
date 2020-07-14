<?php
    include_once '../config.php';
    include_once CON_FRONT.'subCategoryController.php';
    $cat = category();
    
?>
<html>
<head>
<script src="../../resources/script/jQuery.js"></script>
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
    <script src="../../resources/script/images.js"></script>

    <script src="../../resources/script/script.js"></script>
    <style>
        .uploadedImage{
            height: 200px;
            width: 200px
        }
    </style>
</head>
<body>
    

<?php include "../layout/adminHeader.php";?>


        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                
                <br>
                <br>    
                <form id="uploadForm" method="post" enctype="multipart/form-data">
                    <div id="targetLayer">
                        <img src="../../resources/img/default.png" alt="" style="height:100px;width:100px" id="img">
                    </div>
                       <br>
                    <div id="uploadFormLayer">
                        <input id="imgUpload" name="userImage" type="file" /><br/>
                        <input type="submit" value="Upload" />
                        <div id="msgSuccess" style="color:red"></div>
                    </div>
                </form>

                    <div class="admin-sub-form">
                        <form action="" method="POST">
                        <!-- <input type="hidden" name="proPic" id="proPic" value=""> -->
                        <label for="">Name of subcategory </label><br>
                           <input type="text" name="name">
                            <br>
                            <br>
                            <br>
                            <label for="">Category ID</label><br>
                            <select name="categoryId" id="">
                                <option value="" disabled selected>--select one--</option>
                                <?php foreach($cat as $d)
                                { ?>
                                    <option value="<?= $d->Id ?>"><?= $d->Id ." : "  ?><?= $d->Name ?></option>
                                <?php } ?>
                            </select>
                            <br>
                            <br>
                            <label for="">Description</label><br>
                            <input type="text" name="description">
                            <br>
                            <br>
                            <br>
                            <input type="submit" name="submit">
                            <br><br>
                            <h3>Go to <a class="btn btn-primary" href="index.php">Sub Category </a></h3>
                        </form>
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>


    <?php include "../layout/adminFooter.php";?>

    </body>
</html>
