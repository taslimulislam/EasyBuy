
<?php
	include_once 'baseController.php';

	function subCategory(){
		$id = $_REQUEST['Id'];
		$sql = "select * from subcategory where Category_Id = ".$id."";
		$jsonData = readQuery($sql);
		$data = json_decode($jsonData);
		return $data;
	}
	function category(){
		$id = $_REQUEST['Id'];
		$sql = "select * from category where Id = ".$id."";
		$jsonData = readQuery($sql);
		$data = json_decode($jsonData);
		return $data;
	}
	function product(){
		$id = $_REQUEST['Id'];
		$sql = "select * from product where Sub_Category_Id = ".$id."";
		$jsonData = readQuery($sql);
		$data = json_decode($jsonData);
		return $data;
	}
	function subcat(){
		$id = $_REQUEST['Id'];
		$sql = "select * from subcategory where Id = ".$id."";
		$jsonData = readQuery($sql);
		$data = json_decode($jsonData);
		return $data;
	}

	function details(){
		
		$id = $_REQUEST['Id'];
		$sql = "select * from product where Id = ".$id."";
		$jsonData = readQuery($sql);
		$data = json_decode($jsonData);
		return $data;
	}

	function popular()
    {
        $s = "select * from productandsubcatandcat where Status = 'popular'";
        $jsonData = readQuery($s);
        $data = json_decode($jsonData);

        return $data;
    }






?>