<?php
    include_once '../config.php';
    include_once CON_FRONT.'categoryController.php';
    
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
    
</body>
    <?php include "../layout/adminHeader.php"?>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="section-title text-center">
                    <h2 style="font-weight: 700;">Product Catagory</h2>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form id="uploadForm" method="post" enctype="multipart/form-data">
                    <div id="targetLayer"><img src="../../resources/img/default.png" alt="" style="height:100px;width:100px" id="img"></div>
                    <br>
                    <div id="uploadFormLayer">
                        <input id="imgUpload" name="userImage" type="file" /><br/>
                        <input type="submit" value="Upload" />
                        <div id="msgSuccess" style="color:red"></div>
                    </div>
                </form>
                <br>
                <form action="" method="POST" >
                    <input type="hidden" name="proPic" id="proPic" value="">
                    <label for="">Name of Category</label><br>
                    <input type="text" name="name">
                    <br>
                    <br>
                    <br>
                    <label for="">Description</label><br>
                    <input type="text" name="description">
                    <br>
                    <br><br>
                    <input type="submit" name="submit"><br>
                    <br><br>
                    <h4>Go to <a class="btn btn-primary" href="index.php">Category</a></h4>
                    <br><br>
                </form>
            </div>
        </div>
    </div>
    <?php include "../layout/adminFooter.php"?>
    </body>

</html>
