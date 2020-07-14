<?php
    include_once '../config.php';
    include_once CON_FRONT.'invoiceControlle.php';
    $inu = details();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

     <?php include "../layout/adminHeader.php";?>
     
     <div class="container">
       <div class="row">
         <div class="col-md-12">
          <div class="section-title text-center">
              <h2 style="font-weight: 700;">Invoice Update</h2>
          </div>
          <br>
          <br>
          <br>
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <form method = "POST">
                <input type="hidden" name="id" value="<?php echo $inu[0]->Id; ?>">
                Id: <?php echo $inu[0]->Id; ?>
                <br>
                <br>
                <label for="">Employee Id</label><br>
                <input type="text" name="employeeId" id="" value="<?php echo $inu[0]->Employee_Id ?>">
                <br>
                <br>
                <label for="">Customer Id</label><br>
                <input type="text" name="customerId" id="" value="<?php echo $inu[0]->Customer_Id ?>">
                <br>
                <br>
                <label for="">Date & Time</label><br>
                <input type="text" name="dateTime" id="" value="<?php echo $inu[0]->Date_Time ?>">
                <br>
                <br>
                <label for="">Total Price</label><br>
                <input type="text" name="totalPrice" id="" value="<?php echo $inu[0]->Total_Price ?>">
                <br>
                <br>
                <label for="">Status</label><br>
                <input type="text" name="status" id="" value="<?php echo $inu[0]->Status ?>">
                <br>
                <br>
                <br>
                <input type="submit" name="update" id="" value = "update">
                <a class="btn btn-primary" href="index.php">Back to List</a>

              </form>
            </div>
          </div>
        
        </div>
      </div>
  </div>
          <div class="gap"></div>
         

         <?php include "../layout/adminFooter.php";?>
</body>
</html>