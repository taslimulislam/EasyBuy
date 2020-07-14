<?php
    include_once 'baseController.php';
    
    if(isset($_REQUEST['submit'])) //its identify the submit
    {
        insert();
        //echo $name;
    }
     if(isset($_REQUEST['update'])) //its identify the submit
    {
        update();
    }

    function ajaxSubCategory($id)
    {
        $s = "select * from subcategory where category_id = ".$id;
        $jsonData = readQuery($s);

        return $jsonData;
    }


    function subCategory()
    {
		$s = "select * from subcategory";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);

        return $data;
    }


    function category()
    {
        // print_r ($_SESSION);
        $s = "select * from category";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);

        return $data;
    }

    function popular()
    {
        $s = "select * from productandsubcatandcat where Status = 'popular'";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);

        return $data;
    }
    
    function details()
    {
        $id = $_REQUEST['Id'];
        $s = "select * from productandsubcatandcat where Id=".$id."";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);

        return $data;
    }
    function adminProductdetails()
    {
        $id = $_REQUEST['Id'];
        $s = "select * from product where Id=".$id."";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);

        return $data;
    }

    
    function index()
    {
        $s = "select * from product";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);

        return $data;
    }

    function insert()
    {
        $name = $_REQUEST['name'];
        $buyingPrice = $_REQUEST['buyingPrice'];
        $sellingPrice = $_REQUEST['sellingPrice'];
        $quantity = $_REQUEST['quantity'];
        $status = $_REQUEST['status'];
        $description = $_REQUEST['description'];
        $subCategoryId =$_REQUEST['subCategoryId'];
        $imgpath = $_REQUEST['proPic'];
        $dateTime = $_REQUEST['dateTime'];
        $sql = "INSERT INTO `product`(`Id`, `Name`, `Buying_Price`, `Selling_Price`, `Quantity`, `Status`, `Description`, `Sub_Category_Id`, `img_path`, `Date_Time`)
        VALUES (null,'".$name."',".$buyingPrice.",".$sellingPrice.",".$quantity.",'".$status."','".$description."',".$subCategoryId.",'".$imgpath."','".$dateTime."')";
        $id = executeQuery($sql); //ei function query insert kore
    }

    function update()
    {
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $subCategoryId=$_REQUEST['subCategoryId'];
        $description = $_REQUEST['description'];
        $buyingPrice = $_REQUEST['buyingPrice'];
        $sellingPrice = $_REQUEST['sellingPrice'];
        $quantity = $_REQUEST['quantity'];
        $status = $_REQUEST['status'];
        $sql = "update product set Name='".$name."',Buying_Price=".$buyingPrice.",Selling_Price=".$sellingPrice.",Quantity=".$quantity.",Status='".$status."',Description='".$description."',Sub_Category_Id=".$subCategoryId." WHERE Id=".$id."";
        $result = deleteAndUpdateQuery($sql);
         if($result == 1)
        {
            header("Location: index.php");
        }
    }

    function recent()
	{
		$sql = "select * from product where Status = 'recent'";
		$jsonData = readQuery($sql);
		$data = json_decode($jsonData);
		return $data;
	}


  ?>