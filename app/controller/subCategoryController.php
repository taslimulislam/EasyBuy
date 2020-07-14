<?php
    include_once 'baseController.php';
    
    if(isset($_REQUEST['submit'])) //its identify the submit
    {
        insert();
    }
     if(isset($_REQUEST['update'])) //its identify the submit
    {
        update();
    }

    function category()
    {
		$s = "select * from category";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);
        return $data;
    }


    function details()
    {
        $id = $_REQUEST['Id'];
        $s = "select * from subcategory where Id=".$id."";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);
        return $data;
    }


    function index()
    {
        $s = "select * from subcatandcat";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);
        return $data;
    }


    function insert()
    {
        $name = $_REQUEST['name'];
        $categoryId = $_REQUEST['categoryId'];
        $description = $_REQUEST['description'];
        $imgpath = $_REQUEST['proPic'];  
        $sql = "INSERT INTO `subcategory`(`Id`, `Name`, `Category_Id`, `Description`, `img_path`)
        VALUES (null,'".$name."',".$categoryId.",'".$description."','".$imgpath."')";
        $id = executeQuery($sql); //ei function query insert kore

        if($id == true)
        {
            header('Location: '.VIEW_ROOT.'sub_category/index.php');
        }

    }

    function update()
    {
        $id = $_REQUEST['Id'];
        $name = $_REQUEST['Name'];
        $categoryId=$_REQUEST['categoryId'];
        $description = $_REQUEST['Description'];
        $sql = "update subcategory set Name='".$name."',Category_Id='".$categoryId."',Description='".$description."' WHERE Id=".$id."";
        $result = deleteAndUpdateQuery($sql);

        if($result == true)
        {
            header('Location: '.VIEW_ROOT.'sub_category/index.php');
        }
    }
  ?>