<?php

include("includes/header.php");

?>
<div id="content"><!-- #content Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-12"><!-- col-md-12 Begin -->

            <ul class="breadcrumb"><!-- breadcrumb Begin -->
                <li>
                    <a href="index.php?controller=home">Home</a>
                </li>
                <li>
                    Shop
                </li>
                <?php foreach ($array['products'] as $products) { ?>
                <li><?= $products['product_title'] ?></li>
                <?php } ?>
            </ul><!-- breadcrumb Finish -->


        </div><!-- col-md-12 Finish -->




        <div class="col-md-3"><!-- col-md-3 Begin -->

                <div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
                    <div class="panel-heading"><!-- panel-heading Begin -->
                        <h3 class="panel-title">Products Categories</h3>
                    </div><!-- panel-heading Finish -->

                    <div class="panel-body"><!-- panel-body Begin -->
                        <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->

                            <?php foreach ($array['productCategories'] as $run_p_cat){ ?>
                                <li><a href="index.php?controller=shop&action=display&id=<?=$run_p_cat['p_cat_id'] ?>"><?=$run_p_cat['p_cat_title'] ?></a></li>

                            <?php } ?>

                        </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
                    </div><!-- panel-body Finish -->

                </div><!-- panel panel-default sidebar-menu Finish -->


                <div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
                    <div class="panel-heading"><!-- panel-heading Begin -->
                        <h3 class="panel-title">Categories</h3>
                    </div><!-- panel-heading Finish -->

                    <div class="panel-body"><!-- panel-body Begin -->
                        <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->

                            <?php foreach ($array['categories'] as $run_cat){ ?>
                                <li><a href="index.php?controller=shop&action=new&id=<?=$run_cat['cat_id'] ?>"><?=$run_cat['cat_title'] ?></a></li>

                            <?php } ?>

                        </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
                    </div><!-- panel-body Finish -->

                </div><!-- panel panel-default sidebar-menu Finish -->


        </div><!-- col-md-3 Finish -->

        <div class="col-md-9"><!-- col-md-9 Begin -->
            <div id="productMain" class="row"><!-- row Begin -->
                <div class="col-sm-6"><!-- col-sm-6 Begin -->
                    <div id="mainImage"><!-- #mainImage Begin -->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->
                            <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                                <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol><!-- carousel-indicators Finish -->

                            <?php foreach ($array['products'] as $products){ ?>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <center><img class="img-responsive" src="view/product_images/<?= $products['product_img1'] ?>" alt="Product 3-a"></center>
                                </div>
                                <div class="item">
                                    <center><img class="img-responsive" src=view/product_images/<?= $products['product_img2'] ?> alt="Product 3-b"></center>
                                </div>
                                <div class="item">
                                    <center><img class="img-responsive" src="view/product_images/<?= $products['product_img3'] ?>" alt="Product 3-c"></center>
                                </div>
                            </div>



                            <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a><!-- left carousel-control Finish -->

                            <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control Begin -->
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Previous</span>
                            </a><!-- right carousel-control Finish -->
                        </div><!-- carousel slide Finish -->
                    </div><!-- mainImage Finish -->
                </div><!-- col-sm-6 Finish -->

                <div class="col-sm-6"><!-- col-sm-6 Begin -->
                    <div class="box"><!-- box Begin -->
                        <h1 class="text-center">  </h1>

                        <h1 class="text-center"> <?= $products['product_title'] ?> </h1>


                        <form action="" class="form-horizontal" method="post"><!-- form-horizontal Begin -->
                            <div class="form-group"><!-- form-group Begin -->
                                <label for="" class="col-md-5 control-label">Products Quantity</label>

                                <div class="col-md-7"><!-- col-md-7 Begin -->
                                    <select name="product_qty" id="" class="form-control"><!-- select Begin -->
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select><!-- select Finish -->

                                </div><!-- col-md-7 Finish -->

                            </div><!-- form-group Finish -->

                            <div class="form-group"><!-- form-group Begin -->
                                <label class="col-md-5 control-label">Product Size</label>

                                <div class="col-md-7"><!-- col-md-7 Begin -->

                                    <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must pick 1 size for the product')"><!-- form-control Begin -->

                                        <option disabled selected>Select a Size</option>
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Large</option>

                                    </select><!-- form-control Finish -->

                                </div><!-- col-md-7 Finish -->
                            </div><!-- form-group Finish -->

                            <p class="price"><?= $products['product_price'] ?> VND</p>

                            <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>

                        </form><!-- form-horizontal Finish -->

                    </div><!-- box Finish -->

                    <div class="row" id="thumbs"><!-- row Begin -->

                        <div class="col-xs-4"><!-- col-xs-4 Begin -->
                            <a data-target="#myCarousel" data-slide-to="0"  href="#" class="thumb"><!-- thumb Begin -->
                                <img src="view/product_images/<?= $products['product_img1'] ?>" alt="product 1" class="img-responsive">
                            </a><!-- thumb Finish -->
                        </div><!-- col-xs-4 Finish -->

                        <div class="col-xs-4"><!-- col-xs-4 Begin -->
                            <a data-target="#myCarousel" data-slide-to="1"  href="#" class="thumb"><!-- thumb Begin -->
                                <img src="view/product_images/<?= $products['product_img1'] ?>" alt="product 2" class="img-responsive">
                            </a><!-- thumb Finish -->
                        </div><!-- col-xs-4 Finish -->

                        <div class="col-xs-4"><!-- col-xs-4 Begin -->
                            <a data-target="#myCarousel" data-slide-to="2"  href="#" class="thumb"><!-- thumb Begin -->
                                <img src="view/product_images/<?= $products['product_img1'] ?>" alt="product 4" class="img-responsive">
                            </a><!-- thumb Finish -->
                        </div><!-- col-xs-4 Finish -->

                    </div><!-- row Finish -->

                </div><!-- col-sm-6 Finish -->


            </div><!-- row Finish -->

            <div class="box" id="details"><!-- box Begin -->

                <h4>Product Details</h4>

                <p>

                    <?= $products['product_desc'] ?>

                </p>

                <h4>Size</h4>

                <ul>
                    <li>Small</li>
                    <li>Medium</li>
                    <li>Large</li>
                </ul>

                <hr>

            </div><!-- box Finish -->

            <?php } ?>


            <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                    <div class="box same-height headline"><!-- box same-height headline Begin -->
                        <h3 class="text-center">Products You Maybe Like</h3>
                    </div><!-- box same-height headline Finish -->
                </div><!-- col-md-3 col-sm-6 Finish -->

                <?php foreach ($array['run_products'] as $run_product){ ?>
                <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                    <div class="product same-height"><!-- product same-height Begin -->
                        <a href="index.php?controller=detail&id=<?= $run_product['product_id'] ?>">
                            <img class="img-responsive" src="view/product_images/<?= $run_product['product_img1'] ?>" alt="Product 6">
                        </a>

                        <div class="text"><!-- text Begin -->
                            <h3><a href="index.php?controller=detail&id=<?= $run_product['product_id'] ?>"><?= $run_product['product_title'] ?></a></h3>

                            <p class="price"><?= $run_product['product_price'] ?></p>

                        </div><!-- text Finish -->


                    </div><!-- product same-height Finish -->
                </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                <?php } ?>

            </div><!-- #row same-heigh-row Finish -->

        </div><!-- col-md-9 Finish -->

    </div><!-- container Finish -->
</div><!-- #content Finish -->

<div id="footer"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->

                <h4>Pages</h4>

                <ul><!-- ul Begin -->
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="checkout.php">My Account</a></li>
                </ul><!-- ul Finish -->

                <hr>

                <h4>User Section</h4>

                <ul><!-- ul Begin -->
                    <li><a href="Location: index.php?controller=loginUser&action=login">Login</a></li>
                    <li><a href="index.php?controller=register&action=create">Register</a></li>
                </ul><!-- ul Finish -->

                <hr class="hidden-md hidden-lg hidden-sm">

            </div><!-- col-sm-6 col-md-3 Finish -->

            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->

                <h4>Top Products Categories</h4>

                <?php
                foreach ($array['productCategories'] as $productCategory){ ?>
                    <ul><!-- ul Begin -->
                        <li><a href="index.php?controller=shop&action=display&id=<?=$productCategory['p_cat_id'] ?>"><?= $productCategory['p_cat_title'] ?></a></li>

                    </ul><!-- ul Finish -->
                <?php } ?>

                <hr class="hidden-md hidden-lg">

            </div><!-- col-sm-6 col-md-3 Finish -->

            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->

                <h4>Find Us</h4>

                <p><!-- p Start -->

                    <strong>M-Dev Media inc.</strong>
                    <br/>Cibubur
                    <br/>Ciracas
                    <br/>0818-0683-3157
                    <br/>mugianto4th@gmail.com
                    <br/><strong>MrGhie</strong>

                </p><!-- p Finish -->

                <a href="contact.php">Check Our Contact Page</a>

                <hr class="hidden-md hidden-lg">

            </div><!-- col-sm-6 col-md-3 Finish -->

            <div class="col-sm-6 col-md-3">

                <h4>Get The News</h4>

                <p class="text-muted">
                    Dont miss our latest update products.
                </p>

                <form action="" method="post"><!-- form begin -->
                    <div class="input-group"><!-- input-group begin -->

                        <input type="text" class="form-control" name="email">

                        <span class="input-group-btn"><!-- input-group-btn begin -->

                            <input type="submit" value="subscribe" class="btn btn-default">

                        </span><!-- input-group-btn Finish -->

                    </div><!-- input-group Finish -->
                </form><!-- form Finish -->

                <hr>

                <h4>Keep In Touch</h4>

                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>

            </div>
        </div><!-- row Finish -->
    </div><!-- container Finish -->
</div><!-- #footer Finish -->


<div id="copyright"><!-- #copyright Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-6"><!-- col-md-6 Begin -->

            <p class="pull-left">&copy; 2018 M-Dev Store All Rights Reserve</p>

        </div><!-- col-md-6 Finish -->
        <div class="col-md-6"><!-- col-md-6 Begin -->

            <p class="pull-right">Theme by: <a href="#">MrGhie</a></p>

        </div><!-- col-md-6 Finish -->
    </div><!-- container Finish -->
</div><!-- #copyright Finish -->

<script src="view/js/jquery-331.min.js"></script>
<script src="view/js/bootstrap-337.min.js"></script>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>
</html>