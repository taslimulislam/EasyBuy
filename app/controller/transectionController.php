<?php
        include_once 'baseController.php';

     function totalPrice()
     {

        $total = 0;
        
        $lid = $_SESSION['userId'];
        // echo $cid;

        $sql1= "select * from customer where Login_Id = ".$lid."";
        $execute1 = readQuery($sql1);
        $jsonDecode1 = json_decode($execute1);
        $cid = $jsonDecode1[0]->Id;

        $sql2 = "select * from productcart where Customer_Id = ".$cid."";
        $execute2 = readQuery($sql2);
        $jsonDecode2 = json_decode($execute2);
        // $p = $cd[0]->$Selling_Price;
        // print_r($p);
        // return;
        $totalPrice = 0;
        foreach($jsonDecode2 as $jd)
        {
            $sellingPrice = $jd->Selling_Price;
            $quantity = $jd->Cart_Quantity;
            $priceQuantity = $sellingPrice * $quantity;
            $totalPrice += $priceQuantity;
        }

    
            return $totalPrice;
    }

     

    function singleBuy()
    {
        $log = $_SESSION["loggedUser"];
        if($log!=true)
        {
            header('Location: '.VIEW_ROOT.'login/create.php');
        }
        $pid = $_REQUEST['Id'];

        $sql = "select * from product where Id = ".$pid." ";
        $execute = readQuery($sql);
        $jsonDecode = json_decode($execute);
        $price = $jsonDecode[0]->Selling_Price;
        return $price;
    }

    function invoice()
    {

        $total = 0;
        
        $lid = $_SESSION['userId'];
        // echo $cid;

        $sql1= "select * from customer where Login_Id = ".$lid."";
        $execute1 = readQuery($sql1);
        $jsonDecode1 = json_decode($execute1);
        $cid = $jsonDecode1[0]->Id;

        $sql2 = "select * from productcart where Customer_Id = ".$cid."";
        $execute2 = readQuery($sql2);
        $jsonDecode2 = json_decode($execute2);
        $totalPrice = 0;
        foreach($jsonDecode2 as $jd)
        {
            $sellingPrice = $jd->Selling_Price;
            $quantity = $jd->Cart_Quantity;
            $priceQuantity = $sellingPrice * $quantity;
            $totalPrice += $priceQuantity;
        }

        $date = date("y/m/d h:i:s");
        // print_r($date);
        // return;

        $sql3 = "INSERT INTO `invoice`(`Id`, `Employee_Id`, `Customer_Id`, `Date_Time`, `Total_Price`, `Status`) 
        VALUES (null,1,'".$cid."','".$date."','".$totalPrice."','On Process')";
        $execute3 = executeQuery($sql3);
        // $jsonDecode3 = json_decode($execute3);
        // $id = $sql3->insert_id; 
        // print_r($id);

        $sql = "select * from invoice where Id=(select MAX(Id) from invoice)";
        $execute = readQuery($sql);
        $jsonDecode = json_decode($execute);
        $iid = $jsonDecode[0]->Id;


        foreach($jsonDecode2 as $jds)
        {
            $sql4 = "INSERT INTO `orderlist`(`Id`, `Product_Id`, `Customer_Id`, `Quantity`, `Price`, `Total_Price`, `Invoice_Id`) 
            VALUES (null,'".$jds->Id."','".$cid."','".$jds->Cart_Quantity."','".$jds->Selling_Price."','".$totalPrice."','".$iid."')";
            $execute3 = executeQuery($sql4);
        }
            $sql5 = "DELETE FROM `cart` WHERE Customer_Id = '".$cid."' ";
            $execute3 = deleteAndUpdateQuery($sql5);
            

        }



    function orderlist()
    {
        $lid = $_SESSION['userId'];
        // echo $cid;

        $sql1= "select * from customer where Login_Id = ".$lid."";
        $execute1 = readQuery($sql1);
        $jsonDecode1 = json_decode($execute1);
        $cid = $jsonDecode1[0]->Id;

        $sql2 = "select * from orderproductinvoice where Customer_Id = ".$cid."";
        $execute2 = readQuery($sql2);
        $orderlist = json_decode($execute2);
        return $orderlist;

    }



?>