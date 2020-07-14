<?php
    include_once '../config.php';
    include_once CON_FRONT.'employeeController.php';
    $emp = index();
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
        <h2 style="font-weight: 700;">Employee</h2>
    </div>
    <br>
<br>
<div class="container">

<!-- <a class="btn btn-primary" href="create.php">Create</a> -->
<br>
<br>

    <table class= "table table-hover" border="1px" align="center">
        <tr class="success">
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phone no</th>
            <th>address</th>
            <th>join date</th>
            <th>salary</th>
            <th>login Id</th>
            <th>Option</th>
        </tr>
        <?php foreach($emp as $e)
        { ?>
        <tr class= "warning">
            <td><?php echo $e->Id ?></td>
            <td><?php echo $e->Name ?></td>
            <td><?php echo $e->Email ?></td>
            <td><?php echo $e->Phone ?></td>
            <td><?php echo $e->Address ?></td>
            <td><?php echo $e->Join_Date ?></td>
            <td><?php echo $e->Salary ?></td>
            <td><?php echo $e->Login_Id ?></td>
            <td><a href="details.php?Id=<?= $e->Id ?>">details</a>  | <a href="edit.php?Id=<?= $e->Id ?>">edit</a> </td>
        </tr>
        <?php } ?>
    </table>
<br>
<br>
<br>
<br>
<br>
</div>
    <?php include "../layout/adminFooter.php";?>

</body>
</html>