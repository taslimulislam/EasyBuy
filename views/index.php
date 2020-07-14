 <?php
    include 'config.php';
    include '../app/controller/productController.php';
    $productCate = category();
    $popularPro = popular();
    $recent = recent();
    

?>

 <html>
 <header>
     <?php include 'layout/headerIndex.php'?>
 </header>

 <body>
     <!-- TOP AREA -->

     <div class="top-area">
             <div>
                 <div class="bg-holder">
                     <img src="bg-img1.jpg" alt="Image Alternative text" title="Interior" height="600px" />
                     <div class="bg-mask"></div>
                     <div class="bg-front vert-center text-white text-center">
                         <h2 class="text-hero">WE STRIVE FOR CUSTOMER SATISFACTION.</h2>
                         <p>We have many success stories to tell. Perhaps trust, great customer satisfaction</p>
                            <!-- <a class="btn btn-lg btn-ghost btn-white" href="#">Buy Now</a> -->
                     </div>
                 </div>
             </div>
             
     </div>
     <!-- END TOP AREA -->

     <!------------------Category------------------>

      <div class="gap"></div>
     <!--<div class="container">
         <div class="row">
             <div class="col-md-10 col-md-offset-1">
                 <div class="text-center">
                     <h1>Explore Best Deals in Your City</h1>
                     <p class="text-bigger">Augue feugiat vulputate quam at dignissim aliquam vestibulum elit convallis
                         iaculis dictumst dui taciti himenaeos taciti arcu non sollicitudin viverra id blandit cursus ac
                         et mauris curabitur tortor feugiat nulla</p>
                 </div>
             </div>
         </div>
         <div class="gap"></div>
     </div> -->
     <div class="bg-holder ">
     <div class="bg-blur" style="background-image:url(bg2.jpg)"></div>
         <div class="container bg-holder-content">
             <div class="gap gap-big text-center">
                 <h1 class="mb30 text-white border">Category</h1>



                 <div class="row row-wrap">

                     <?php foreach($productCate as $c)
                            { ?>
                     <a class="col-md-3" href="<?php echo VIEW_FRONT ?>product/subCategory.php?Id=<?= $c->Id ?>">
                         <div class="product-thumb">
                             <header class="product-header">
                                 <img src="<?php echo "../resources/".$c->img_path; ?>" alt="Image Alternative text"
                                     title="Nikon Prime love" height="180px" width="80px"/>
                             </header>
                             <div class="product-inner">
                                 <h5 class="product-title"><?= $c->Name ?></h5>
                                 <p class="product-desciption"><?= $c->Description ?></p>

                             </div>
                         </div>
                     </a>
                     <?php } ?>

                 </div>
             </div>
         </div>
     </div>

    <!------------------Advantage------------------>
     <div class="gap"></div>
     <div class="container">
         <div class="row">
             <div class="col-md-12 services">
                 <div class="col-md-4 content-left">
                    <h1>The advantage when  <span style="color:#BD144B;font-weight:600">You Shop</span> from us!</h1>
                 </div>
                 <div class="col-md-4">
                     <div class="row">
                         <div class="col-md-12 service-content">
                             <h4>Superb Quality</h4>
                             <p>We make commitments that the quality of our products will and always will be superb.</p>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-12 service-content">
                             <h4>Free Returns</h4>
                             <p>We accept returns for freshly purchased products within 7 days from the payment.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                 <div class="row">
                         <div class="col-md-12 service-content">
                             <h4>Free Wrapping</h4>
                             <p>Upon request, items bought as gifts from our store can receive free wrapping service.</p>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-12 service-content">
                             <h4>Free Shipping</h4>
                             <p>Once receiving your order, we will turn your products around in 3- 5 business days.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="gap"></div>
     </div>

     <!------------------Popular product------------------>

     <div class="bg-holder">
         <div class="bg-mask"></div>
         <div class="bg-blur" style="background-image:url(bg.jpg)"></div>
         <div class="container bg-holder-content">
             <div class="gap gap-big text-center">
                 <h1 class="mb30 text-white border">Popular Product</h1>
                 <div class="row row-wrap">

                     <?php foreach($popularPro as $pp)
                            { ?>
                     <a class="col-md-3" href="<?php echo VIEW_FRONT ?>product/details.php?Id=<?= $pp->Id ?>">
                         <div class="product-thumb">
                             <header class="product-header">
                                 <img src="<?php echo "../resources/".$pp->img_path; ?>" alt="Image Alternative text"
                                     title="Nikon Prime love" height="200px" width="80px"/>
                             </header>
                             <div class="product-inner">
                                 <h5 class="product-title"><?= $pp->Name ?></h5>
                                 <p class="product-desciption"><?= $pp->Description ?></p>
                                 <ul class="product-price-list">
                                     <li><span class="product-price"><?= $pp->Selling_Price ?></span></li>
                                 </ul>
                             </div>
                         </div>
                     </a>
                     <?php } ?>

                 </div>
             </div>
         </div>
     </div>

     <!------------------Upcoming product------------------>

     <div class="gap"></div>
     <div class="container">
         <div class="row">
             <div class="col-md-10 col-md-offset-1">
                 
             </div>
         </div>
         <div class="gap"></div>
     </div>
     <div class="bg-holder">
         <div class="bg-mask"></div>
         <div class="bg-blur" style="background-image:url(bg1.jpg)"></div>
         <div class="container bg-holder-content">
             <div class="gap gap-big text-center">
                 <h1 class="mb30 text-white">Recent Product</h1>
                 <div class="row row-wrap">

                     <?php foreach($recent as $r)
                 { ?>


                     <a class="col-md-3" href="computer.html">
                         <div class="product-thumb">
                             <header class="product-header">
                                 <img src="<?php echo "../resources/".$r->img_path; ?>" alt="Image Alternative text"
                                     title="<?= $r->Name ?>" />
                             </header>
                             <div class="product-inner">
                                 <h5 class="product-title"><?= $r->Name ?></h5>
                                 <p class="product-desciption"><?= $r->Description ?></p>
                                 <ul class="product-price-list">
                                     <li><span class="product-price"><?= $r->Selling_Price ?></span>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </a>

                     <?php } ?>

                 </div>
             </div>
         </div>
     </div>



 </body>
 <footer>
     <?php include 'layout/footerIndex.php'?>
 </footer>

 </html>