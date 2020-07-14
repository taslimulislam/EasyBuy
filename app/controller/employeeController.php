<?php
include_once 'baseController.php';

if(isset($_REQUEST['submit']))
    {
        store();
    }
    if(isset($_REQUEST['update'])){

        update();
    }


function index()//index
    {
        $sql = "select * from employee";
        $jsonData = readQuery($sql);
        $emp = json_decode($jsonData);

        return $emp;
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
        $type = $_REQUEST['type'];

        $oldValue = [
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "address" => $address,
            "joinDate" => $joinDate,
            "salary" => $salary,
            "userName" => $userName,
            "password" => $password,
            "type" => $type,
            
        ];

        $err = []; //list of errors
        $var = true;
        if($name == '')
        {
            array_push($err,"Name cannot be empty");
            $var = false;
        }
        if($email == '')
        {
            array_push($err,"Email cannot be empty");
            $var = false;
        }
        if($phone == '')
        {
            array_push($err,"Phone cannot be empty");
            $var = false;
        }
        if($joinDate == '')
        {
            array_push($err,"Join date cannot be empty");
            $var = false;
        }
        if($salary == '')
        {
            array_push($err,"Salary cannot be empty");
            $var = false;
        }
        if($userName == '')
        {
            array_push($err,"Username cannot be empty");
            $var = false;
        }
        if($address == '')
        {
            array_push($err,"Address cannot be empty");
            $var = false;
        }
        if($password == '')
        {
            array_push($err,"Password cannot be empty");
            $var = false;
        }
        if($type == '')
        {
            array_push($err,"Type cannot be empty");
            $var = false;
        }

        if($phone != '')
        {
            $sql = "select * from employee where phone = ".$phone."";
            $jsonData = readQuery($sql);
            $cust = json_decode($jsonData);
            if($cust != null)
            {
                array_push($err,"Phone Already exists");
                $var = false;
            }
        }

        if($email != '')
        {
            $sql = "select * from employee where email = '".$email."' ";
            $jsonData = readQuery($sql);
            $cust = json_decode($jsonData);
            if($cust != null)
            {
                array_push($err,"Email already exists");
                $var = false;
            }
        }

        if($userName != '')
        {
            $sql = "select * from login where User_Name = '".$userName."' ";
            $jsonData = readQuery($sql);
            $cust = json_decode($jsonData);
            if($cust != null)
            {
                array_push($err,"User name already exists");
                $var = false;
            }
        }

        if($var == false)
        {
            $oldData = http_build_query(array('oldValue' => $oldValue));
            $errData = http_build_query(array('err' => $err));
            header('Location: create.php?'.$errData.'&'.$oldData);
            return;
        }



        $sql  = "INSERT INTO `login`(`Id`, `User_Name`, `Password`, `Type`, `Status`) VALUES(null,'".$userName."','".$password."','".$type."','ACTIVE')";
        $loginId= executeQuery($sql);
    
        $sql = "INSERT INTO `employee`(`Id`, `Name`, `Email`, `Phone_No`, `Address`, `Join_Date`, `Salary`, `Login_Id`) VALUES (null,'".$name."','".$email."',".$phone.",'".$address."','".$joinDate."',".$salary.", ".$loginId.")";
        $id = executeQuery($sql);
        //print_r($id);
        if($id == true)
        {
            header("Location: index.php");
        }
    }

    function show()//details
    {
        $id = $_REQUEST['Id'];
        $s = "select * from employee where Id=".$id."";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);
        return $data;
        
    }

    function update()//edit
    {
        $id=$_REQUEST['id'];
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $address=$_REQUEST['address'];
        $joindate=$_REQUEST['joindate'];
        $salary=$_REQUEST['salary'];
        $loginid=$_REQUEST['loginid'];
        $sql="update employee set Name= '".$name."',Email= '".$email."',Phone= ".$phone.",
        Address= '".$address."',Salary= ".$salary.",Join_Date= '".$joindate."',Login_Id= ".$loginid." where Id = ".$id." ";
        $result = deleteAndUpdateQuery($sql);

        if($result == true)
        {
            header('Location: '.VIEW_ROOT.'employee/index.php');
        }

    }

    function ajaxPhone($phone)
    {
        $sql = "select * from employee where Phone = ".$phone."";
        $jsonData = readQuery($sql);
        return $jsonData;
    }

    function ajaxEmail($email)
    {
        $sql = "select * from employee where Email = '".$email."'";
        $jsonData = readQuery($sql);
        return $jsonData;
    }
    function ajaxUserName($userName)
    {
        $sql = "select * from login where User_Name = '".$userName."'";
        $jsonData = readQuery($sql);
        return $jsonData;
    }

?>    