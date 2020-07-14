<?php
    include_once '../config.php';
    include_once CON_FRONT.'orderController.php';

    $order = index(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php include "../layout/adminHeader.php";?>

	<br>
	<br>
	<div class="section-title text-center">
            <h2 style="font-weight: 700;">Order List</h2>
    </div>
	<br>
	<br>
	<br>
	<div class="container">

		<table class="table table-hover" border="1px" align="center">
			<tr class= "info" >
				<th>Id</th>
				<th>Product Id</th>
				<th>Customer Id</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Total Price</th>
				<th>Invoice Id</th>
				<th>Option</th>
			</tr>

			<?php foreach($order as $o){ ?>
				<tr class= "danger">
					<td><?= $o->Id ?></td>
					<td><?= $o->Product_Id ?></td>
					<td><?= $o->Customer_Id ?></td>
					<td><?= $o->Quantity ?></td>
					<td><?= $o->Price ?></td>
					<td><?= $o->Total_Price ?></td>
					<td><?= $o->Invoice_Id ?></td>
					<td><a href="details.php?Id=<?= $o->Id ?>">Details</a></td>

				</tr>
			<?php } ?>
		</table>
	</div>

<br>
<br>
<br>
<br>
<br>
	<?php include "../layout/adminFooter.php";?>

	
</body>
</html>