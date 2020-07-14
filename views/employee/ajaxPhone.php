<?php
	include '../config.php';
	include_once CON_FRONT.'employeeController.php';

	$phone = $_REQUEST['phone'];
	$cust = ajaxPhone($phone);
	print_r($cust);
?>