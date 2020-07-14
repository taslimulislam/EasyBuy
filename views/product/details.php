<?php
    include '../config.php';
    include CON_FRONT.'userController.php';

    $product = details();
    $popularPro = popular();
?>

<body>

    <?php include "../layout/header.php"?>
    <div class="gap gap-small"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-7">
                        <div class="fotorama" data-nav="thumbs" data-allowfullscreen="1" data-thumbheight="150"
                            data-thumbwidth="150">
                            <img src="<?php echo RSR.$product[0]->img_path; ?>" alt="Image Alternative text"
                                title="workstation" />
                            <img src="<?php echo RSR.$product[0]->img_path; ?>" alt="Image Alternative text"
                                title="laptop" />
                            <img src="<?php echo RSR.$product[0]->img_path; ?>" alt="Image Alternative text"
                                title="laptop" />
                            <img src="<?php echo RSR.$product[0]->img_path; ?>" alt="Image Alternative text"
                                title="ram" />
                        </div>
                    </div>

                    <?php foreach($product as $p)
                        { ?>
                    <div class="col-md-5">
                        <div class="product-info box">
                            <ul class="icon-group icon-list-rating text-color" title="4.5/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <small><a href="#" class="text-muted">based on 8 reviews</a></small>
                            <h3><?= $product[0]->Name ?></h3>
                            <p class="product-info-price"><?= $product[0]->Selling_Price ?></p>
                            <p class="text-smaller text-muted"><?= $product[0]->Description ?></p>
                            <ul class="list-inline">
                                
                                <li><button class="btn btn-primary" onclick=addToCart(<?= $p->Id ?>,1);><i
                                            class="fa fa-shopping-cart"></i> Add to cart</button>
                                </li>
                                <li><a href="../buy/singleBuy.php?Id=<?= $p->Id ?>" class="btn btn-success"><i
                                            class="fa fa-shopping-cart"></i> Buy Now</a>
                                </li>
                                <li id="cartMsg" style="display:none">
                                    <h3>added to cart</h3>
                                </li>
                                
                                    
                            </ul>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>






            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="popular-sidebar-post">
                            <h4>Popular</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="sidebar-posts">
                            <?php foreach($popularPro as $pp)
                        { ?>
                            <div class="row">
                                <div class="single-sidebar-post">
                                    <div class="col-md-6">
                                        <div class="sidebar-post-thumbnail">
                                            <img src="<?= RSR.$pp->img_path; ?>" alt="popular-post" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="sidebar-post-detail">
                                            <a href="">
                                                <h5><?= $pp->Name ?></h5>
                                            </a>
                                            <h6><?= $pp->Description ?></h6>
                                            <a href="">View Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <?php } ?>
                            <!-- <div class="row">
                                <div class="single-sidebar-post">
                                    <div class="col-md-6">
                                        <div class="sidebar-post-thumbnail">
                                            <img src="../../resources/img/car.jpg" alt="popular-post" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="sidebar-post-detail">
                                            <a href="">
                                                <h5>Toy</h5>
                                            </a>
                                            <h6>Lorem ipsum, dolor sit amet consectetur </h6>
                                            <a href="">View Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="single-sidebar-post">
                                    <div class="col-md-6">
                                        <div class="sidebar-post-thumbnail">
                                            <img src="../../resources/img/makeup_brush.jpg" alt="popular-post" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="sidebar-post-detail">
                                            <a href="">
                                                <h5>Makeup Brush</h5>
                                            </a>
                                            <h6>Lorem ipsum, dolor sit amet consectetur </h6>
                                            <a href="">View Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="gap"></div> -->
            <!-- <div class="tabbable">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-pencil"></i>Desciption</a>
                            </li>
                            <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-info"></i>Feature</a>
                            </li>
                            <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-comments"></i>Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab-1">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro soluta, eum eaque veniam nisi, dolor mollitia tenetur et ullam nulla ducimus commodi tempore optio est, laboriosam nesciunt labore omnis corporis!</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur porro dolore praesentium nobis, quia sint qui saepe! Assumenda hic alias nulla vero iusto ea nisi.</p>
                            </div>
                            <div class="tab-pane fade" id="tab-2">
                                <table class="table table-striped mb0">
                                    <tbody>
                                        <tr>
                                            <td>Processor</td>
                                            <td>Intel® Core™ i3-8145U 2.1 GHz base frequency, up to 3.9 GHz with Intel® Turbo Boost Technology, 4 MB cache, 2 cores)</td>
                                        </tr>
                                        <tr>
                                            <td>Display</td>
                                            <td>15.6" diagonal HD SVA BrightView micro-edge WLED-backlit (1366 x 768)</td>
                                        </tr>
                                        <tr>
                                            <td>Storage</td>
                                            <td>1 TB 5400 rpm SATA</td>
                                        </tr>
                                        <tr>
                                            <td>Graphics</td>
                                            <td>Intel® UHD Graphics 620</td>
                                        </tr>
                                        <tr>
                                            <td>Operating System</td>
                                            <td>Win 10 Genuine</td>
                                        </tr>
                                        <tr>
                                            <td>Battery</td>
                                            <td>3-cell, 41 Wh Li-ion prismatic</td>
                                        </tr>
                                        <tr>
                                            <td>Adapter</td>
                                            <td>45 W AC power adapter</td>
                                        </tr>
                                        <tr>
                                            <td>Audio</td>
                                            <td>Dual speakers</td>
                                        </tr>
                                        <tr>
                                            <td>Color</td>
                                            <td>Black</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="tab-3">
                                <p>Nulla ac quam arcu netus pulvinar purus pulvinar laoreet maecenas egestas suspendisse quis venenatis mollis tempus ornare in mi ridiculus porttitor magnis mollis accumsan accumsan maecenas justo mus dapibus bibendum</p>
                                <p>Massa tempus et malesuada ornare velit turpis lorem dictumst elit dictum dolor velit pretium pharetra ipsum fermentum suscipit magna fringilla congue non dui penatibus per libero varius odio sodales hac</p>
                            </div>
                            <div class="tab-pane fade" id="tab-4">
                                <ul class="comments-list">
                                    <li>
                                        <!-- REVIEW -->
            <!-- <article class="comment">
                                            <div class="comment-author">
                                                <img src="img/gamer_chick_50x50.jpg" alt="Image Alternative text" title="Gamer Chick" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul><span class="comment-author-name">Alison Mackenzie</span>
                                                <p class="comment-content">Potenti diam ridiculus enim per orci aliquet quam proin sit neque porta conubia nam iaculis phasellus nam dignissim tincidunt sapien eros nam bibendum nunc vehicula accumsan lacus</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li> -->
            <!-- REVIEW -->
            <!-- <article class="comment">
                                            <div class="comment-author">
                                                <img src="img/ana_29_50x50.jpg" alt="Image Alternative text" title="Ana 29" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="5/5 rating">
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
                                                </ul><span class="comment-author-name">Olivia Slater</span>
                                                <p class="comment-content">Nisl justo natoque pharetra adipiscing ultricies aliquam erat in condimentum hendrerit vulputate lacus fames aliquet volutpat habitasse himenaeos adipiscing sociosqu tincidunt</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li> -->
            <!-- REVIEW -->
            <!-- <article class="comment">
                                            <div class="comment-author">
                                                <img src="img/afro_50x50.jpg" alt="Image Alternative text" title="Afro" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul><span class="comment-author-name">Oliver Ross</span>
                                                <p class="comment-content">Vivamus lacinia accumsan facilisi feugiat lectus etiam nostra dis curabitur conubia pulvinar nascetur</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li> -->
            <!-- REVIEW -->
            <!-- <article class="comment">
                                            <div class="comment-author">
                                                <img src="img/bubbles_50x50.jpg" alt="Image Alternative text" title="Bubbles" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul><span class="comment-author-name">Frank Mills</span>
                                                <p class="comment-content">Montes venenatis maecenas aptent tellus tempus praesent pretium elit porttitor penatibus mi tempus erat facilisi ante massa tristique bibendum inceptos feugiat lobortis vulputate</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li> -->
            <!-- REVIEW -->
            <!-- <article class="comment">
                                            <div class="comment-author">
                                                <img src="img/me_with_the_uke_50x50.jpg" alt="Image Alternative text" title="Me with the Uke" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="5/5 rating">
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
                                                </ul><span class="comment-author-name">Alison Mackenzie</span>
                                                <p class="comment-content">Bibendum faucibus dictumst suspendisse imperdiet pharetra vel euismod hac at at vitae</p>
                                            </div>
                                        </article>
                                    </li> -->
            <!-- <li> -->
            <!-- REVIEW -->
            <!-- <article class="comment">
                                            <div class="comment-author">
                                                <img src="img/amaze_50x50.jpg" alt="Image Alternative text" title="AMaze" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul><span class="comment-author-name">Dylan Taylor</span>
                                                <p class="comment-content">Erat sagittis scelerisque molestie dignissim massa tristique id purus euismod non netus enim nisi ac himenaeos nascetur interdum porta leo adipiscing dictumst quisque aliquet lobortis torquent</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li> -->
            <!-- REVIEW -->
            <!-- <article class="comment">
                                            <div class="comment-author">
                                                <img src="img/chiara_50x50.jpg" alt="Image Alternative text" title="Chiara" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="5/5 rating">
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
                                                </ul><span class="comment-author-name">Joseph Hudson</span>
                                                <p class="comment-content">Urna dui lectus erat massa velit mattis lobortis arcu sagittis proin malesuada senectus montes bibendum vehicula</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li> -->
            <!-- REVIEW -->
            <!-- <article class="comment">
                                            <div class="comment-author">
                                                <img src="img/andrea_50x50.jpg" alt="Image Alternative text" title="Andrea" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star"></i>
                                                    </li>
                                                    <li><i class="fa fa-star-o"></i>
                                                    </li>
                                                </ul><span class="comment-author-name">Frank Mills</span>
                                                <p class="comment-content">Porta fusce litora id enim montes neque facilisi sit class vel commodo est vel diam massa ultrices netus fusce</p>
                                            </div>
                                        </article>
                                    </li>
                                </ul><a class="popup-text btn btn-primary" href="#review-dialog" data-effect="mfp-zoom-out"><i class="fa fa-pencil"></i> Add a review</a>
                            </div>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <h3>Related Porducts</h3>
                    <div class="gap gap-mini"></div>
                    <div class="row row-wrap">
                        <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="../../resources/productImg/subcategory/i_phone.jpg" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
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
                                    <h5 class="product-title">Keyboard</h5>
                                    <p class="product-desciption">Himenaeos urna class vivamus sem sed senectus fringilla</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$20</span>
                                            </li>
                                            <li><span class="product-old-price">$25</span>
                                            </li>
                                            <li><span class="product-save">Save 20%</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="page-checkout.html"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm" href="product-shop-sidebar.html"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
            <!-- <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="../../resources/productImg/subcategory/earphone.jpg" alt="Image Alternative text" title="the best mode of transport here in maldives" />
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating" title="4.8/5 rating">
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
                                    <h5 class="product-title">Headset</h5>
                                    <p class="product-desciption">Himenaeos urna class vivamus sem sed senectus fringilla</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$30</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="page-checkout.html"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm" href="product-shop-sidebar.html"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
            <!-- <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="../../resources/productImg/subcategory/hard_disc.jpg" alt="Image Alternative text" title="Cup on red" />
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating" title="4.5/5 rating">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star-half-empty"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Speaker</h5>
                                    <p class="product-desciption">Himenaeos urna class vivamus sem sed senectus fringilla</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$149</span>
                                            </li>
                                            <li><span class="product-old-price">$257</span>
                                            </li>
                                            <li><span class="product-save">Save 58%</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="page-checkout.html"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm" href="product-shop-sidebar.html"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
            <!-- <div class="gap gap-small"></div> -->
            <!-- </div> -->
            <!-- <div class="col-md-3">
                    <aside class="sidebar-right">
                        <div class="sidebar-box">
                            <h5>Popular</h5>
                            <ul class="thumb-list">
                                <li>
                                    <a href="#">
                                        <img src="../../resources/img/sidebarImg/food_is_pride_70x70.jpg" alt="Image Alternative text" title="Food is Pride" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <h5 class="thumb-list-item-title"><a href="#">Best Pasta</a></h5>
                                        <p class="thumb-list-item-price">$184</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="../../resources/img/sidebarImg/old_no7_70x70.jpg" alt="Image Alternative text" title="Old No7" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <h5 class="thumb-list-item-title"><a href="#">Fancy Coffe Cup</a></h5>
                                        <p class="thumb-list-item-price">$343</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="../../resources/img/sidebarImg/the_hidden_power_of_the_heart_70x70.jpg" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <h5 class="thumb-list-item-title"><a href="#">Beach Holidays</a></h5>
                                        <p class="thumb-list-item-price">$448</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-box">
                            <h5>Recent Reviews</h5>
                            <ul class="thumb-list">
                                <li>
                                    <a href="#">
                                        <img src="../../resources/img/sidebarImg/hot_mixer_70x70.jpg" alt="Image Alternative text" title="Hot mixer" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <ul class="icon-group icon-list-rating" title="5/5 rating">
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
                                        <h5 class="thumb-list-item-title"><a href="#">Modern DJ Set</a></h5>
                                        <p class="thumb-list-item-author">by Cyndy Naquin</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="../../resources/img/sidebarImg/our_coffee_miss_u_70x70.jpg" alt="Image Alternative text" title="Our Coffee miss u" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <ul class="icon-group icon-list-rating" title="3/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                        <h5 class="thumb-list-item-title"><a href="#">Coffe Shop Discount</a></h5>
                                        <p class="thumb-list-item-author">by John Mathis</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="../../resources/img/sidebarImg/food_is_pride_70x70.jpg" alt="Image Alternative text" title="Food is Pride" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <ul class="icon-group icon-list-rating" title="4/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                        <h5 class="thumb-list-item-title"><a href="#">Best Pasta</a></h5>
                                        <p class="thumb-list-item-author">by John Doe</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div> -->
            <div class="gap gap-small"></div>
        </div>
    </div>

    <!-- //////////////////////////////////
    //////////////END PAGE CONTENT///////// 
    ////////////////////////////////////-->
    <?php include "../layout/footer.php"?>