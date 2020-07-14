<?php
	include '../config.php';
	include_once CON_FRONT.'cartController.php';

	
	$product = ajaxCartTotal();
	print_r($product);
?>
<!-- <h1>total: <?= $product ?></h1> -->