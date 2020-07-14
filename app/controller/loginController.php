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
            $_SESSION["userType"] = $emp[0]->Type;
            
        }
        else
        {
            echo " username and password not matched";
            return;
        }
        $type = $_SESSION['userType'];
        if($type=='admin')
        {
            header('Location: '.VIEW_ROOT.'index.php ');

        }
        if($type=='user')
        {
            header('Location: '.VIEW_ROOT.'index.php ');
        }
        $lid = $_SESSION['userId'];
        $sql= "select * from customer where Login_Id = ".$lid."";
        $execute = readQuery($sql);
        $jsonDecode = json_decode($execute);
        $name = $jsonDecode[0]->Name;

        $_SESSION["userName"] = $name;

    }
    // function logout()
    // {
    //     session_destroy();
    //     header('Location: '.VIEW_ROOT.'login/create.php');
    // }


    function showAdmin(){
       $id = $_SESSION['userId'];
       $type = $_SESSION['userType'];
       // echo $id;
       if($type == 'admin')
       {
            $sql = "select * from employee where Login_Id = ".$id;

            $jsonResult = readQuery($sql);
            $data = json_decode($jsonResult);
            return ;
       }
      
    }


    function showUser(){
        $id = $_SESSION['userId'];
        $type = $_SESSION['userType'];
        // echo $id;
        if($type == 'user')
        {
             $sql = "select * from customer where Login_Id = ".$id;
 
             $jsonResult = readQuery($sql);
             $data = json_decode($jsonResult);
             return $data;
             
        }
     }
?>