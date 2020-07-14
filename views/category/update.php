<?php
    include_once '../config.php';
    include_once CON_FRONT.'categoryController.php';
    $category = details();
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
              <h2 style="font-weight: 700;">Category Update</h2>
          </div>
          <br>
          <br>
          <br>
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <form method = "POST">
                <input type="hidden" name="id" value="<?php echo $category[0]->Id; ?>">
                Id: <?php echo $category[0]->Id; ?>
                <br>
                <br>
                <label for="">Name</label><br>
                <input type="text" name="Name" id="" value="<?php echo $category[0]->Name ?>">
                <br>
                <br><br>
                <label for="">Description</label><br>
                <input type="text" name="Description" id="" value="<?php echo $category[0]->Description ?>">
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