 <?php
    include '../config.php';
    include CON_FRONT.'userController.php';
    include CON_FRONT.'cartController.php';
    $product = product();
    $subcat = subcat();
?>

 <html>

 <head>
     <meta charset="utf-8">
     <title>Products</title>

     <? include ''?>
     <!-- <link rel="stylesheet" href="../../resources/css/styles.css"> -->
     <!-- <script src="../../resources/script/script.js"></script> -->
     <?php include '../layout/header.php';?>
 </head>

 <body>
     <div class="global-wrap">
         <div class="bg-holder">
             <div class="bg-blur" style="background-image:url(../bg1.jpg)"></div>
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="ctitle">

                                     <?php foreach($subcat as $s)
                                    { ?>
                                     <h1>Products of <?= $s->Name ?></h1>
                                     <?php } ?>

                                 </div>
                             </div>
                         </div>

                         <div class="row row-wrap">
                             <?php foreach($product as $p)
                            { ?>
                             <div class="col-md-4">
                                 <div class="product-thumb">
                                     <header class="product-header">
                                         <img src="<?php echo RSR.$p->img_path; ?>" alt="Image Alternative text"
                                             title="The Hidden Power of the Heart" height="200" width="80" />
                                     </header>
                                     <div class="product-inner">

                                         <h5 class="product-title"><?= $p->Name ?></h5>
                                         <p class="product-desciption"><?= $p->Description ?></p>
                                         <div class="product-meta">
                                             <ul class="product-price-list">

                                             </ul>
                                             <ul class="icon-group icon-list-rating icon-list-non-rated"
                                                 title="not rated yet">

                                                 <li>
                                                     <h4>Tk <span class="pr-price"><?= $p->Selling_Price ?></span></h4>
                                                 </li><span> | </span>
                                                 <li><i class="fa fa-star"></i>
                                                 </li>
                                                 <li><i class="fa fa-star"></i>
                                                 </li>
                                                 <li><i class="fa fa-star"></i>
                                                 </li>
                                                 <li><i class="fa fa-star"></i>
                                                 </li>
                                                 <li><i class="fa fa-star"></i>
                                                 </li>
                                             </ul>
                                             <ul class="product-actions-list">
                                                 

                                                 <li><button class="btn btn-sm" onclick=addToCart(<?= $p->Id ?>,1);><i
                                                             class="fa fa-shopping-cart"></i> Add To Cart</a>
                                                 </li>
                                                 
                                                 <li><a class="btn btn-sm" href="details.php?Id=<?= $p->Id ?>"><i
                                                             class="fa fa-bars"></i> Details</a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <?php } ?>
                         </div>
                         <!-- <ul class="pagination">
                         <li class="prev disabled">
                             <a href="#"></a>
                         </li>
                         <li class="active"><a href="#">1</a>
                         </li>
                         <li><a href="#">2</a>
                         </li>
                         <li><a href="#">3</a>
                         <li class="next">
                             <a href="#"></a>
                         </li>
                     </ul> -->
                         <div class="gap"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <footer>
         <?php include '../layout/footer.php'?>
     </footer>

 </html>