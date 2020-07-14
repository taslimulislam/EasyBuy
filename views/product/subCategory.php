<?php
    include '../config.php';
    include CON_FRONT.'userController.php';
    $subCategory = subCategory();
    $category = category();
?>


<html>
<header>
    <?php include '../layout/headerIndex.php';?>
</header>

<body>
    <div class="global-wrap">
        <div class="bg-holder">
            <div class="bg-mask"></div>
            <div class="bg-blur" style="background-image:url(../bg1.jpg)"></div>
            <div class="container bg-holder-content">
                <div class="gap gap-big text-center">
                    <?php foreach($category as $c)
                    { ?>

                    <h1 class="mb30 text-white">Categories of <?= $c->Name ?></h1>

                    <?php } ?>
                    <div class="row row-wrap">


                        <?php foreach($subCategory as $s)
                    { ?>
                        <a class="col-md-3" href="product.php?Id=<?= $s->Id ?>">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="<?php echo RSR.$s->img_path; ?>" alt="Image Alternative text" height="200" width="80"
                                        title="<?= $s->Name ?>" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title"><?= $s->Name ?></h5>
                                    <p class="product-desciption"><?= $s->Description ?></p>
                                </div>
                            </div>
                        </a>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>

        <<footer>
            <?php include '../layout/footer.php'?>
            </footer>



    </div>
</body>

 21:16:47 GMT -->

</html>