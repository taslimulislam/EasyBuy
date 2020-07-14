<?php
	include '../config.php';
	include_once CON_FRONT.'cartController.php';

	$pid = $_REQUEST['pid'];
	$qnty = $_REQUEST['qnty'];
	$product = ajaxAddToCart($pid,$qnty);
	print_r($product);
?>