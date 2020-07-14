<?php
include_once 'baseController.php';


if(isset($_REQUEST['submit']))
    {
        store();
    }


function store(){

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $address = $_REQUEST['address'];
    $joinDate = $_REQUEST['joinDate'];
    $salary = $_REQUEST['salary'];
    $userName = $_REQUEST['userName'];
    $password = $_REQUEST['password'];
    
    $sql  = "INSERT INTO `login`(`Id`, `User_Name`, `Password`, `Type`, `Status`) 
    VALUES(null,'".$userName."','".$password."','admin','ACTIVE')";
    $loginId= executeQuery($sql);

    $sql = "INSERT INTO `employee`(`Id`, `Name`, `Email`, `Phone`, `Address`, `Join_Date`, `Salary`, `Login_Id`) 
    VALUES (null,'".$name."','".$email."',".$phone.",'".$address."','".$joinDate."',".$salary.", ".$loginId.")";
    $id = executeQuery($sql);

    // $sql = "INSERT INTO `employeelogin`(`Id`, `Name`, `Email`, `Phone_No`, `Address`, `Join_Date`, `Salary`, `Login_Id`) 
    // VALUES (null,'".$name."','".$email."',".$phone.",'".$address."','".$joinDate."',".$salary.", ".$loginId.")";
    // $id = executeQuery($sql);
    // //print_r($id);
    if($loginId == true)
    {
        $_SESSION["loggedUser"] = "true";
        $_SESSION["userId"] = $loginId[0]->Id;
        $_SESSION["userName"] = $emp[0]->User_Name;
        $_SESSION["userType"] = "admin";
    
        header("Location: ../admin/index.php");
    }

}
?>