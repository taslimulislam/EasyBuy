<?php
    include_once '../config.php';
    include_once CON_FRONT.'subCategoryController.php';
    $subCat = index();
    
?>
<html>

<?php include "../layout/adminHeader.php";?>
<br>
<br>
<div class="section-title text-center">
        <h2 style="font-weight: 700;">Sub Category </h2>
    </div>
<div class="container">


<br>
<br>
	<table class="table table-hover" border="1px" align="center">
        <tr class="success">
            <th>Id</th>
            <th>Name</th>
            <th>Category</th>
            <th>Option</th>

        </tr>
        <?php foreach($subCat as $e){ ?>
        <tr class="info">
            <td><?= $e->Id ?></td>
            <td><?= $e->Name ?></td>
            <td><?= $e->Cname ?></td>

            
            <td><a href="details.php?Id=<?= $e->Id ?>">details</a> | <a href="update.php?Id=<?= $e->Id ?>">edit</a></td>
        </tr>
        <?php } ?>
    </table>

<br>
<br>
<br>
<div class="bp-btn text-center">
    <a class="btn btn-primary " href="create.php">Create</a>
</div>
<br>
<br>
</div>
<?php include "../layout/adminFooter.php";?>

</html>