<?php
    include_once '../config.php';
    include_once CON_FRONT.'employeeController.php';
    $em = show();

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
		<div class="row"> 
			<br><br>
			<div class="col-md-12">
				<div class="section-title text-center">
					<h2 style="font-weight: 700;">Customer Details</h2>
				</div>
			</div>
		</div>	
		<br>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				Id: <?php echo $em[0]->Id; ?>
				<br>
				<br>
				Name: <?php echo $em[0]->Name; ?>
				<br>
				<br>
				email: <?php echo $em[0]->Email; ?>
				<br>
				<br>
				phone: <?php echo $em[0]->Phone; ?>
				<br>
				<br>
				Address: <?php echo $em[0]->Address; ?>
				<br>
				<br>
				Join date: <?php echo $em[0]->Join_Date; ?>
				<br>
				<br>
				salary: <?php echo $em[0]->Salary; ?>
				<br>
				<br>
				login id: <?php echo $em[0]->Login_Id; ?>
				<br>
				<br>
				<a class="btn btn-primary" href="index.php">Back to List</a>
				<br><br>
			</div>
		</div>
		</div>
	</div>
	
	<?php include "../layout/adminFOoter.php";?>
</body>
</html>
