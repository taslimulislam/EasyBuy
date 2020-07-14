<?php
include_once 'baseController.php';

function chkAdmin()
{
    // print_r ($_SESSION);
    $log = $_SESSION["loggedUser"];
    $type = $_SESSION['userType'];

    if($log!=true )
    {
        header('Location: '.VIEW_ROOT.'adminLogin/create.php');
    }
    
    if($type!='admin')
    {
        header('Location: '.VIEW_ROOT.'adminLogin/create.php');
    }
}
?>