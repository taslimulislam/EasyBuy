<?php
    include_once 'baseController.php';
    
	if(isset($_REQUEST['update'])) //its identify the submit
    {
        update();
    }
    if(isset($_REQUEST['submit'])) //its identify the submit
    {
        insert();
    }


    function product()
    {
		$s = "select * from product";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);
        return $data;
    }


    function employee()
    {
		$s = "select * from employee";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);
        return $data;
    }


	function index()
    {
        $s = "select * from buyingprice";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);
        return $data;
    }


    function details()
    {
        $id = $_REQUEST['Id'];
        $s = "select * from buyingprice where Id=".$id."";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);
        return $data;
    }


    function insert()
    {
        $productId = $_REQUEST['productId'];
        $buyingPriceLot = $_REQUEST['buyingPriceLot'];
        $dateTime=$_REQUEST['dateTime'];
        $quantity = $_REQUEST['quantity'];
        $buyingPrice = $_REQUEST['buyingPrice'];
        $employeeId = $_REQUEST['employeeId'];
        $sql = "INSERT INTO `buyingprice`(`Id`, `Product_Id`, `Buying_Price_Lot`, `Date_Time`, `Quantity`, `Buying_Price`, `Employee_Id`) 
        VALUES (null,".$productId.",".$buyingPriceLot.",'".$dateTime."',".$quantity.",".$buyingPrice.",".$employeeId.")";
        $id = executeQuery($sql); //ei function query insert kore

        if($id == true)
        {
            header('Location: '.VIEW_ROOT.'buying_price/index.php');
        }

    }


    function update()
    {
        $id = $_REQUEST['id'];
        $productId = $_REQUEST['productId'];
        $buyingPriceLot = $_REQUEST['buyingPriceLot'];
        $dateTime=$_REQUEST['dateTime'];
        $quantity = $_REQUEST['quantity'];
        $buyingPrice = $_REQUEST['buyingPrice'];
        $employeeId = $_REQUEST['employeeId'];
        $sql = "update buyingprice set Id=".$id.",Product_Id=".$productId.",Buying_Price_Lot=".$buyingPriceLot.",Date_Time='".$dateTime."',Quantity=".$quantity.",Buying_Price=".$buyingPrice.",Employee_Id=".$employeeId." WHERE Id=".$id."";
        $result = deleteAndUpdateQuery($sql);
         if($result == 1)
        {
            header("Location: index.php");
        }
    }

?>