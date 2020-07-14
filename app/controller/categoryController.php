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
           
    function insert()
    {
        $name = $_REQUEST['name'];
        $description = $_REQUEST['description'];
        $imgpath = $_REQUEST['proPic'];
        $sql = "INSERT INTO `category`(`Id`, `Name`, `Description`, `img_path`) 
        VALUES (null,'".$name."','".$description."','".$imgpath."')";
        $id = executeQuery($sql); //ei function query insert kore

        if($id == true)
        {
            header('Location: '.VIEW_ROOT.'category/index.php');
        }
    }


    function details()
    {
        $id = $_REQUEST['Id'];
        $s = "select * from category where Id=".$id."";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);
        return $data;
    }


    function index()
    {
        $s = "select * from category";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);
        return $data;
    }


    function update()
    {
        $id = $_REQUEST['Id'];
        $name = $_REQUEST['Name'];
        $description = $_REQUEST['Description'];
        $sql = "update category set Name='".$name."',Description='".$description."' WHERE Id=".$id."";
        $result = deleteAndUpdateQuery($sql);
         if($result == 1)
        {
            header("Location: index.php");
        }
    }

?>