 
<?php
    include '../config.php';
    include CON_FRONT.'productController.php';
    $productCate = category();
?> 


<html>
<header>

    <?php include '../layout/header.php';?>
    
</header>

<body>
<!-- TOP AREA -->
        <div class="top-area">
            <div class="owl-carousel owl-slider" id="owl-carousel-slider" data-inner-pagination="true" data-white-pagination="true">
                <div>
                    <div class="bg-holder">
                        <img src="<?php echo RSR.$productCate[15]->img_path; ?>" alt="Image Alternative text" title="4 Strokes of Fun" />
                        <div class="bg-mask"></div>
                        <div class="bg-front vert-center text-white text-center">
                            <h2 class="text-hero">Black Friday</h2>
                            <a class="btn btn-lg btn-ghost btn-white" href="#">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-holder">
                        <img src="<?php echo RSR.$productCate[16]->img_path; ?>" alt="Image Alternative text" title="Bridge" />
                        <div class="bg-mask"></div>
                        <div class="bg-front vert-center text-white text-center">
                            <h2 class="text-hero">Sell in Weekends</h2>
                            <a class="btn btn-lg btn-ghost btn-white" href="#">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-holder">
                        <img src="<?php echo RSR.$productCate[17]->img_path; ?>" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO luxury suite" />
                        <div class="bg-mask"></div>
                        <div class="bg-front vert-center text-white text-center">
                            <h2 class="text-hero">Premium Platforms</h2>
                            <a class="btn btn-lg btn-ghost btn-white" href="#">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END TOP AREA -->

        <!------------------Category------------------>

        <div class="gap"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="text-center">
                        <h1>Explore Best Deals in Your City</h1>
                        <p class="text-bigger">Augue feugiat vulputate quam at dignissim aliquam vestibulum elit convallis iaculis dictumst dui taciti himenaeos taciti arcu non sollicitudin viverra id blandit cursus ac et mauris curabitur tortor feugiat nulla</p>
                    </div>
                </div>
            </div>
        <div class="gap"></div>
        </div>
        <div class="bg-holder">
            <div class="bg-mask"></div>
            <div class="bg-blur" style="background-image:url(<?php echo RSR.$productCate[4]->img_path; ?>"></div>
            <div class="container bg-holder-content">
                <div class="gap gap-big text-center">
                    <h1 class="mb30 text-white">Category</h1>
                    <div class="row row-wrap">


            
                    <?php foreach($productCate as $c)
                    { ?>
                        <a class="col-md-3" href="subCategory.php?Id=<?= $c->Id ?>">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="<?php echo RSR.$c->img_path; ?>" alt="Image Alternative text" title="Nikon Prime love" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title"><?= $c->Name ?></h5>
                                    <p class="product-desciption">Semper ut dictum justo rhoncus iaculis laoreet aliquet</p>
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$82</span>
                                        </li>
                                        <li><span class="product-old-price">$211</span>
                                        </li>
                                        <li><span class="product-save">Save 39%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    <?php } ?>


                       
                    </div>  
                    <a href="#" class="btn btn-white btn-lg btn-ghost">See More</a>
                </div>
            </div>
        </div>

        <!------------------Popular product------------------>

        <div class="gap"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="text-center">
                        <h1>Explore Best Deals in Your City</h1>
                        <p class="text-bigger">Augue feugiat vulputate quam at dignissim aliquam vestibulum elit convallis iaculis dictumst dui taciti himenaeos taciti arcu non sollicitudin viverra id blandit cursus ac et mauris curabitur tortor feugiat nulla</p>
                    </div>
                </div>
            </div>
        <div class="gap"></div>
        </div>
        <div class="bg-holder">
            <div class="bg-mask"></div>
            <div class="bg-blur" style="background-image:url(<?php echo RSR.$productCate[5]->img_path; ?>)"></div>
            <div class="container bg-holder-content">
                <div class="gap gap-big text-center">
                    <h1 class="mb30 text-white">Popular Product</h1>
                    <div class="row row-wrap">


                        <a class="col-md-3" href="accessories.html">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="<?php echo RSR.$productCate[6]->img_path; ?>" alt="Image Alternative text" title="Nikon Prime love" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title">Blooth Speaker</h5>
                                    <p class="product-desciption">Semper ut dictum justo rhoncus iaculis laoreet aliquet</p>
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$82</span>
                                        </li>
                                        <li><span class="product-old-price">$211</span>
                                        </li>
                                        <li><span class="product-save">Save 39%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>

                        <a class="col-md-3" href="womens-fasion.html">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="<?php echo RSR.$productCate[7]->img_path; ?>" alt="Image Alternative text" title="Nikon Prime love" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title">Ladies Bag </h5>
                                    <p class="product-desciption">Semper ut dictum justo rhoncus iaculis laoreet aliquet</p>
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$82</span>
                                        </li>
                                        <li><span class="product-old-price">$211</span>
                                        </li>
                                        <li><span class="product-save">Save 39%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>

                        <a class="col-md-3" href="accessories.html">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="<?php echo RSR.$productCate[8]->img_path; ?>" alt="Image Alternative text" title="Nikon Prime love" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title">Headset</h5>
                                    <p class="product-desciption">Semper ut dictum justo rhoncus iaculis laoreet aliquet</p>
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$82</span>
                                        </li>
                                        <li><span class="product-old-price">$211</span>
                                        </li>
                                        <li><span class="product-save">Save 39%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>

                        <a class="col-md-3" href="accessories.html">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="<?php echo RSR.$productCate[9]->img_path; ?>" alt="Image Alternative text" title="Nikon Prime love" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title">Camera</h5>
                                    <p class="product-desciption">Semper ut dictum justo rhoncus iaculis laoreet aliquet</p>
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$82</span>
                                        </li>
                                        <li><span class="product-old-price">$211</span>
                                        </li>
                                        <li><span class="product-save">Save 39%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>  
                    <a href="#" class="btn btn-white btn-lg btn-ghost">See More</a>
                </div>
            </div>
        </div>

        <!------------------Upcoming product------------------>

        <div class="gap"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="text-center">
                        <h1>Explore Best Deals in Your City</h1>
                        <p class="text-bigger">Augue feugiat vulputate quam at dignissim aliquam vestibulum elit convallis iaculis dictumst dui taciti himenaeos taciti arcu non sollicitudin viverra id blandit cursus ac et mauris curabitur tortor feugiat nulla</p>
                    </div>
                </div>
            </div>
        <div class="gap"></div>
        </div>
        <div class="bg-holder">
            <div class="bg-mask"></div>
            <div class="bg-blur" style="background-image:url(<?php echo RSR.$productCate[10]->img_path; ?>)"></div>
            <div class="container bg-holder-content">
                <div class="gap gap-big text-center">
                    <h1 class="mb30 text-white">Upcoming Product</h1>
                    <div class="row row-wrap">


                        <a class="col-md-3" href="computer.html">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="<?php echo RSR.$productCate[11]->img_path; ?>" alt="Image Alternative text" title="Nikon Prime love" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title">Samsung S10</h5>
                                    <p class="product-desciption">Semper ut dictum justo rhoncus iaculis laoreet aliquet</p>
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$82</span>
                                        </li>
                                        <li><span class="product-old-price">$211</span>
                                        </li>
                                        <li><span class="product-save">Save 39%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>

                        <a class="col-md-3" href="audio.html">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="<?php echo RSR.$productCate[12]->img_path; ?>" alt="Image Alternative text" title="Nikon Prime love" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title">Guiter</h5>
                                    <p class="product-desciption">Semper ut dictum justo rhoncus iaculis laoreet aliquet</p>
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$82</span>
                                        </li>
                                        <li><span class="product-old-price">$211</span>
                                        </li>
                                        <li><span class="product-save">Save 39%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>

                        <a class="col-md-3" href="mens-fasion.html">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="<?php echo RSR.$productCate[13]->img_path; ?>" alt="Image Alternative text" title="Nikon Prime love" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title">Men’s black t-shirt</h5>
                                    <p class="product-desciption">Semper ut dictum justo rhoncus iaculis laoreet aliquet</p>
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$82</span>
                                        </li>
                                        <li><span class="product-old-price">$211</span>
                                        </li>
                                        <li><span class="product-save">Save 39%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>

                        <a class="col-md-3" href="womens-fasion.html">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="<?php echo RSR.$productCate[14]->img_path; ?>" alt="Image Alternative text" title="Nikon Prime love" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title">Hair Dryer</h5>
                                    <p class="product-desciption">Semper ut dictum justo rhoncus iaculis laoreet aliquet</p>
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$82</span>
                                        </li>
                                        <li><span class="product-old-price">$211</span>
                                        </li>
                                        <li><span class="product-save">Save 39%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>  
                    <a href="#" class="btn btn-white btn-lg btn-ghost">See More</a>
                </div>
            </div>
        </div>


                 
    </body>
   <footer> 
         <?php include '../layout/footer.php'?>
   </footer>
</html>