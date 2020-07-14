<?php
    include_once '../config.php';
    include_once CON_FRONT.'productController.php';
    $id =  $_REQUEST['id'];
    $subCategory = ajaxSubCategory($id);
    print_r($subCategory);
?>