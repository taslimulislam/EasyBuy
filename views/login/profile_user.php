<?php 
    include '../config.php';
    include CON_FRONT.'loginController.php';
    $data = showUser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	<?php include "../layout/header.php";?>
    
    
    <div class="detail-content" style="padding-left: 15% ">
            <br>
        <br>
        <br>
        <br>
        <br>
        
            
            <h3>profile</h3>
            <br>
            <br>
           
            Name: <?php echo $data[0]->Name; ?>
            <br>
            <br>
            email: <?php echo $data[0]->Email; ?>
            <br>
            <br>
            phone: <?php echo $data[0]->Phone; ?>
            <br>
            <br>
            Address: <?php echo $data[0]->Address; ?>
            <br>
            <br>
            join date: <?php echo $data[0]->Join_Date; ?>
            <br>
            <br>
           
        

        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

		<?php include "../layout/footer.php";?>
</body>
</html>