<?php
    include_once '../config.php';
    include_once CON_FRONT.'employeeController.php';
    $emp = show();
    
    
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

    <?php include "../layout/adminHeader.php";?>
   <div class="container">
       <div class="row">
           <br><br>
           <div class="col-md-12">
                <div class="section-title text-center">
					<h2 style="font-weight: 700;">Employee Info Update</h2>
				</div>
           </div>
       </div>
       <div class="row">
           <div class="col-md-6 col-md-offset-3">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $emp[0]->Id; ?>">
                    <br>
                    id: <?php echo $emp[0]->Id; ?>
                    <br>
                    <br>
                    <label for="">Name</label><br>
                    <input type="text" name="name" value="<?php echo $emp[0]->Name; ?>">
                    <br>
                    <br><br>
                    <label for="">Email</label><br>
                    <input type="text" name="email" value="<?php echo $emp[0]->Email; ?>">
                    <br>
                    <br><br>
                    <label for="">Phone</label><br>
                    <input type="number" name="phone" value="<?php echo $emp[0]->Phone; ?>">
                    <br>
                    <br>
                    <label for="">Address</label><br>
                    <input type="text" name="address" value="<?php echo $emp[0]->Address; ?>">
                    <br>
                    <br><br>
                    <label for="">Join date</label><br>
                    <input type="text" name="joindate" value="<?php echo $emp[0]->Join_Date; ?>">
                    <br>
                    <br><br>
                    <label for="">Salary</label><br>
                    <input type="number" name="salary" value="<?php echo $emp[0]->Salary; ?>">
                    <br>
                    <br>
                    <label for="">Login ID</label><br>
                    <input type="text" name="loginid" value="<?php echo $emp[0]->Login_Id; ?>">
                    <br>
                    <br><br>
                    <input type="submit" name="update" value="update">
                    <a class="btn btn-primary" href="index.php">Back to List</a>
                </form>
                <br>
                <br>
                <br>
           </div>
       </div>
   </div>


    <?php include "../layout/adminFooter.php";?>

</body>
</html>