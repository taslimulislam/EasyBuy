<?php
	include '../config.php';
	include_once CON_FRONT.'cartController.php';

	$pid = $_REQUEST['pid'];
	$product = ajaxDeleteCart($pid);
	print_r($product);
?>