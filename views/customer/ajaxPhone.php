<?php
	include '../config.php';
	include_once CON_FRONT.'customerController.php';

	$phone = $_REQUEST['phone'];
	$cust = ajaxPhone($phone);
	print_r($cust);


?>