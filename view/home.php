<?php include_once 'includes/header.php' ?>

<div class="container" id="slider"><!-- container Begin -->

    <div class="col-md-12"><!-- col-md-12 Begin -->

        <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->

            <ol class="carousel-indicators"><!-- carousel-indicators Begin -->

                <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>

            </ol><!-- carousel-indicators Finish -->

            <div class="carousel-inner"><!-- carousel-inner Begin -->

                <?php

                include_once 'includes/db.php';

                $get_slides = "select * from slider LIMIT 0,1";

                $run_slides = mysqli_query($conn,$get_slides);

                while($row_slides=mysqli_fetch_array($run_slides)){

                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];

                    echo "
                       
                       <div class='item active'>
                       
                       <img src='view/slides_images/$slide_image'>
                       
                       </div>
                       
                       ";

                }

                $get_slides = "select * from slider LIMIT 1,3";

                $run_slides = mysqli_query($conn,$get_slides);

                while($row_slides=mysqli_fetch_array($run_slides)){

                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];

                    echo "
                       
                       <div class='item'>
                       
                       <img src='view/slides_images/$slide_image'>
                       
                       </div>
                       
                       ";

                }

                ?>


            </div><!-- carousel-inner Finish -->

            <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->

                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>

            </a><!-- left carousel-control Finish -->

            <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->

                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>

            </a><!-- left carousel-control Finish -->

        </div><!-- carousel slide Finish -->

    </div><!-- col-md-12 Finish -->

</div><!-- container Finish -->

<div id="advantages"><!-- #advantages Begin -->

    <div class="container"><!-- container Begin -->

        <div class="same-height-row"><!-- same-height-row Begin -->

            <div class="col-sm-4"><!-- col-sm-4 Begin -->

                <div class="box same-height"><!-- box same-height Begin -->

                    <div class="icon"><!-- icon Begin -->

                        <i class="fa fa-heart"></i>

                    </div><!-- icon Finish -->

                    <h3><a href="#">Best Offer</a></h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

                </div><!-- box same-height Finish -->

            </div><!-- col-sm-4 Finish -->

            <div class="col-sm-4"><!-- col-sm-4 Begin -->

                <div class="box same-height"><!-- box same-height Begin -->

                    <div class="icon"><!-- icon Begin -->

                        <i class="fa fa-tag"></i>

                    </div><!-- icon Finish -->

                    <h3><a href="#">Best Prices</a></h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                </div><!-- box same-height Finish -->

            </div><!-- col-sm-4 Finish -->

            <div class="col-sm-4"><!-- col-sm-4 Begin -->

                <div class="box same-height"><!-- box same-height Begin -->

                    <div class="icon"><!-- icon Begin -->

                        <i class="fa fa-thumbs-up"></i>

                    </div><!-- icon Finish -->

                    <h3><a href="#">100% Original</a></h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                </div><!-- box same-height Finish -->

            </div><!-- col-sm-4 Finish -->

        </div><!-- same-height-row Finish -->

    </div><!-- container Finish -->

</div><!-- #advantages Finish -->

<div id="hot"><!-- #hot Begin -->

    <div class="box"><!-- box Begin -->

        <div class="container"><!-- container Begin -->

            <div class="col-md-12"><!-- col-md-12 Begin -->

                <h2>
                    Our Latest Products
                </h2>

            </div><!-- col-md-12 Finish -->

        </div><!-- container Finish -->

    </div><!-- box Finish -->

</div><!-- #hot Finish -->

<div id="content" class="container"><!-- container Begin -->

    <div class="row"><!-- row Begin -->

        <?php foreach ($array['$run_product'] as $run_product) { ?>

        <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->

            <div class="product"><!-- product Begin -->

                <a href="index.php?controller=detail&id=<?= $run_product['product_id'] ?>">

                    <img class="img-responsive" src="view/product_images/<?= $run_product['product_img1'] ?>" alt="Product 1">

                </a>

                <div class="text"><!-- text Begin -->

                    <h3>
                        <a href="index.php?controller=detail&id=<?= $run_product['product_id'] ?>">
                            <?= $run_product['product_title'] ?>
                        </a>
                    </h3>

                    <p class="price"><?= number_format($run_product['product_price'], 0, ',', '.') ?></p>

                    <p class="button">

                        <a href="index.php?controller=detail&id=<?= $run_product['product_id'] ?>" class="btn btn-default">View Details</a>

                        <a href="index.php?controller=cart&action=add_to_cart&product_id=<?= $run_product['product_id'] ?>" class="btn btn-primary">

                            <i class="fa fa-shopping-cart">
                                Add To Cart
                            </i>

                        </a>

                    </p>

                </div><!-- text Finish -->

            </div><!-- product Finish -->

        </div><!-- col-sm-4 col-sm-6 single Finish -->
         <?php } ?>

    </div><!-- row Finish -->

</div><!-- container Finish -->

<div id="footer"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->

                <h4>Pages</h4>

                <ul><!-- ul Begin -->
                    <ul><!-- ul Begin -->
                        <li><a href="cart.php">Shopping Cart</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="checkout.php">My Account</a></li>
                    </ul><!-- ul Finish -->

                    <hr>

                    <h4>User Section</h4>

                    <ul><!-- ul Begin -->
                        <li>
                            <?php

                            if(!isset($_SESSION['customer_email'])){

                                echo"<a href='index.php?controller=loginUser&action=login'>Login</a>";

                            }else{

                                echo"<a href='index.php?controller=myOrder'>My Account</a>";

                            }

                            ?>
                        </li>
                        <li>

                            <?php

                            if(!isset($_SESSION['customer_email'])){

                                echo"<a href='index.php?controller=register&action=create'>Register</a>";

                            }else{

                                echo"<a href='my_account.php?edit_account'>Edit Account</a>";

                            }

                            ?>
                </ul><!-- ul Finish -->

                <hr class="hidden-md hidden-lg hidden-sm">

            </div><!-- col-sm-6 col-md-3 Finish -->

            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->

                <h4>Top Products Categories</h4>

                <?php foreach ($array['$run_p_cat'] as $run_p_cat){ ?>
                <ul><!-- ul Begin -->
                    <li><a href="index.php?controller=shop&action=display&id=<?=$run_p_cat['p_cat_id'] ?>"><?= $run_p_cat['p_cat_title'] ?></a></li>

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


</body>
</html>