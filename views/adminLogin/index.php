<?php
    include_once '../config.php';
    include_once CON_FRONT.'adminLoginController.php';
    $log = index();
?>


<html>
    <?php include "../layout/adminHeader.php";?>
        <br>
        <br>
        <div class="section-title text-center">
            <h2 style="font-weight: 700;">Login Index</h2>
        </div>
        <br>
        <br>

        <div class="container">

            <table class="table table-hover" border="1px" align="center">
                <tr class="warning">
                    <th>Id</th>
                    <th>User Name</th>
                    <th>Password</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Option</th>
                </tr>
                    <?php foreach($log as $e){ ?>
                <tr class="active">
                    <td><?= $e->Id ?></td>
                    <td><?= $e->User_Name ?></td>
                    <td><?= $e->Password ?></td>
                    <td><?= $e->Type ?></td>
                    <td><?= $e->Status ?></td>
                    <td><a href="details.php?Id=<?= $e->Id ?>">details</a></td>
                </tr>
                
                <?php } ?>
            </table>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
     <?php include "../layout/adminFOoter.php";?>
</html>