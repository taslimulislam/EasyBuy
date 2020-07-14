<?php
	include '../config.php';
	include_once CON_FRONT.'customerController.php';

	$userName = $_REQUEST['userName'];
	$cust = ajaxUserName($userName);
	print_r($cust);


?>