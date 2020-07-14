<?php
    include_once '../config.php';
    include_once CON_FRONT.'customerController.php';
    $cust = show();

    //print_r($emp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php include "../layout/adminHeader.php";?>
		<div class="container">
			<div class="row"><br><br><br>
				<div class="col-md-10 col-md-offset-1">
					<div class="section-title text-center">
						<h2 style="font-weight: 700;">Customer Details</h2>
					</div>
					<br><br>
					<div class="detail-content" style="padding-left: 15% ">
						Id: <?php echo $cust[0]->Id; ?>
						<br>
						<br>
						Name: <?php echo $cust[0]->Name; ?>
						<br>
						<br>
						email: <?php echo $cust[0]->Email; ?>
						<br>
						<br>
						phone: <?php echo $cust[0]->Phone; ?>
						<br>
						<br>
						Address: <?php echo $cust[0]->Address; ?>
						<br>
						<br>
						Join date: <?php echo $cust[0]->Join_Date; ?>
						<br>
						<br>
						login id: <?php echo $cust[0]->Login_Id; ?>
						<br>
						<br>
					<a class="btn btn-primary" href="index.php">Back to List</a>
					<div class="gap"></div>
					</div>
				</div>
			</div>
		</div>

	
	<?php include "../layout/adminFooter.php";?>
		
</body>
</html>
