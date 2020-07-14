<?php
    include_once 'baseController.php';
    
    if(isset($_REQUEST['update'])) //its identify the submit
    {
        update();
    }
  
    function index()
    {
        $s = "select * from invoice";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);
        return $data;
    }

     function details()
    {
        $id = $_REQUEST['Id'];
        $s = "select * from invoice where Id=".$id."";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);
        return $data;
    }

    function update()
    {
        $id = $_REQUEST['id'];
        $employeeId = $_REQUEST['employeeId'];
        $customerId = $_REQUEST['customerId'];
        $dateTime = $_REQUEST['dateTime'];
        $totalPrice = $_REQUEST['totalPrice'];
        $status = $_REQUEST['status'];
        $sql = "update invoice set Id='".$id."',Employee_Id='".$employeeId."',Customer_Id='".$customerId."',Date_Time='".$dateTime."',Total_Price='".$totalPrice."',Status='".$status."' WHERE Id=".$id."";
        $result = deleteAndUpdateQuery($sql);

        if($id == true)
        {
            header('Location: '.VIEW_ROOT.'invoice/index.php');
        }
    }

    
    
  ?>