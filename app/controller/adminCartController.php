<?php
    include_once 'baseController.php';


    function index()
    {
        $s = "select * from cart";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);
        return $data;
    }

    function details()
    {
        $id = $_REQUEST['Id'];
        $s = "select * from cart where Id=".$id."";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);
        return $data;
    }
?>