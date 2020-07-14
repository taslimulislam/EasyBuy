<?php
	include '../config.php';
	include_once CON_FRONT.'employeeController.php';

	$email = $_REQUEST['email'];
	$cust = ajaxEmail($email);
	print_r($cust);
?>