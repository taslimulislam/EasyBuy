<?php
    include_once '../config.php';
    include_once CON_FRONT.'customerController.php';
    $cust = show();
    
    
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
    <br><br>


    <div class="section-title text-center">
        <h2 style="font-weight: 700;">Customer Info Update</h2>
    </div>
    
    <br>
    <br>
    <br>
    <br>

<h1>customer: </h1>
<h3>Edit</h3>
    <form action="" method="post" style="padding-left: 15% ">
        <input type="hidden" name="id" value="<?php echo $cust[0]->Id; ?>">
        id: <?php echo $cust[0]->Id; ?>
        <br>
        <br>
        name: <input type="text" name="name" value="<?php echo $cust[0]->Name; ?>">
        <br>
        <br>
        email: <input type="text" name="email" value="<?php echo $cust[0]->Email; ?>">
        <br>
        <br>
        phone: <input type="text" name="phone" value="<?php echo $cust[0]->Phone; ?>">
        <br>
        <br>
        address: <input type="text" name="address" value="<?php echo $cust[0]->Address; ?>">
        <br>
        <br>
        join date: <input type="text" name="joindate" value="<?php echo $cust[0]->Join_Date; ?>">
        <br>
        <br>
        login id: <input type="text" name="loginid" value="<?php echo $cust[0]->Login_Id; ?>">
        <br>
        <br>
        <input type="submit" name="update" value="update">
    </form>

<br>
<br>
<br>
<br>
<br>
<?php include "../layout/adminFOoter.php";?>

</body>
</html>