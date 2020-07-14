<?php
    include_once 'baseController.php';

    if(isset($_REQUEST['submit']))
    {
        store();
    }
    if(isset($_REQUEST['update'])){
        update();
    }




    function store(){

        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $address = $_REQUEST['address'];
        $joinDate = $_REQUEST['joinDate'];
        $userName = $_REQUEST['name'];
        $password = $_REQUEST['password'];

         $oldValue = [
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "address" => $address,
            "joinDate" => $joinDate,
            "userName" => $userName,
            "password" => $password,
            
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
        if($address == '')
        {
            array_push($err,"Address cannot be empty");
            $var = false;
        }
        if($joinDate == '')
        {
            array_push($err,"JoinDate cannot be empty");
            $var = false;
        }
        if($userName == '')
        {
            array_push($err,"Username cannot be empty");
            $var = false;
        }
        if($password == '')
        {
            array_push($err,"Password cannot be empty");
            $var = false;
        }
        if($phone != '')
        {
            $sql = "select * from customer where phone = ".$phone."";
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
            $sql = "select * from customer where email = '".$email."' ";
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


        $sql = "INSERT INTO `login`(`Id`, `User_Name`, `Password`, `Type`, `Status`) VALUES(null,'".$userName."','".$password."','user','ACTIVE')";

        $loginid = executeQuery($sql);;
    
        $sql = "INSERT INTO `customer`(`Id`, `Name`, `Email`, `Phone`, `Address`, `Join_Date`, `Login_Id`) VALUES (null,'".$name."','".$email."',".$phone.",'".$address."','".$joinDate."', ".$loginid.")";
        $id = executeQuery($sql);

        if($loginid == true)
        {
            header("Location: ../login/create.php");
        }
        
    }

    function index()//index
    {
        $sql = "select * from customer";
        $jsonData = readQuery($sql);
        $cust = json_decode($jsonData);

        return $cust;
    }

    function show()//details
    {
        $id = $_REQUEST['id'];

        $sql = "select * from customer where id = ".$id." ";
        $jsonData = readQuery($sql);
        $cust = json_decode($jsonData);

        return $cust;
    }

    function update()//edit
    {
        $id=$_REQUEST['id'];
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $address=$_REQUEST['address'];
        $joindate=$_REQUEST['joindate'];
        $loginid=$_REQUEST['loginid'];
        $sql="update customer set Name= '".$name."',Email= '".$email."',Phone= ".$phone.",
        Address= '".$address."',Join_Date= '".$joindate."',Login_Id= ".$loginid." where Id = ".$id." ";
        $result = deleteAndUpdateQuery($sql);

        if($result == true)
        {
            header("Location: index.php");
        }

    }

    function ajaxPhone($phone)
    {
        $sql = "select * from customer where Phone = '".$phone."'";
        $jsonData = readQuery($sql);
        return $jsonData;
    }

    function ajaxEmail($email)
    {
        $sql = "select * from customer where Email = '".$email."'";
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