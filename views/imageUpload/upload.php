<?php
include_once '../config.php';
if(is_array($_FILES)) 
{
    if(is_uploaded_file($_FILES['userImage']['tmp_name'])) 
    {
        $sourcePath = $_FILES['userImage']['tmp_name'];
        $uniqueId= time()."".mt_rand();
        $showPath = "productimg/subcategory/".$uniqueId.".jpg";
        $targetPath = RSR. $showPath;
        if(move_uploaded_file($sourcePath,$targetPath)) 
        {
            ?>
                <img  id="img" src="<?php echo $showPath; ?>" class="uploadedImage" />
            <?php
        }
    }
}

?>