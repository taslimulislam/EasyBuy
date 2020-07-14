<?php 

    //include_once('model/model.php');
    session_start();
    //
    //$_SESSION["loggedUser"] = "true";
    //session_destroy();
    //print_r ($_SESSION);
    function checkSession()
    {
        $sess = $_SESSION["loggedUser"];
        if($sess != "true")
        {
            //echo "not logged in";
            header('Location: '.VIEW_ROOT.'/login/create.php');

        }
    }
    function checkAdmin()
    {
        $type = $_SESSION["Type"];
        if($type != "admin")
        {
            //echo "not logged in";
            header('Location: '.VIEW_ROOT.'/login/create.php ');
        }
    }
?>