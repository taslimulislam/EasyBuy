<?php 
    include_once('baseController.php');

    if(isset($_REQUEST["submit"]))
    {
        login();
    }
    // if(isset($_REQUEST["logout"]))
    // {
    //     logout();
    // }
    function index()
    {
        $s = "select * from login";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);
        return $data;
    }


    function details()
    {
        $id = $_REQUEST['Id'];
        $s = "select * from login where Id=".$id."";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);
        return $data;
    }
    
    
    function login()
    {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $sql = "select * from login where User_Name = '".$username."' and Password = '".$password."' ";

        $jsonResult = readQuery($sql);
        $emp = json_decode($jsonResult);
        //print_r($result);
        //print_r($emp);
        echo count($emp);
        if(count($emp) == 1)
        {
            $_SESSION["loggedUser"] = "true";
            $_SESSION["userId"] = $emp[0]->Id;
            $_SESSION["userName"] = $emp[0]->User_Name;
            $_SESSION["userType"] = $emp[0]->Type;
            
            
        }
        else
        {
            echo " User name and password not matched";
            return;
        }
        
        $type = $_SESSION['userType'];
        if($type=='admin')
        {
            header('Location: '.VIEW_ROOT.'admin/index.php ');

        }
       
        
    }