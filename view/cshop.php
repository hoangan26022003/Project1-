<?php include_once 'includes/header.php'?>

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
            </ul><!-- breadcrumb Finish -->

        </div><!-- col-md-12 Finish -->

        <div class="col-md-3"><!-- col-md-3 Begin -->

            <div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
                <div class="panel-heading"><!-- panel-heading Begin -->
                    <h3 class="panel-title">Products Categories</h3>
                </div><!-- panel-heading Finish -->

                <div class="panel-body"><!-- panel-body Begin -->
                    <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->

                        <?php foreach ($array['p_cat'] as $run_p_cat){ ?>
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

                        <?php foreach ($array['cat'] as $run_cat){ ?>
                            <li><a href="index.php?controller=shop&action=new&id=<?=$run_cat['cat_id'] ?>"><?=$run_cat['cat_title'] ?></a></li>

                        <?php } ?>

                    </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
                </div><!-- panel-body Finish -->

            </div><!-- panel panel-default sidebar-menu Finish -->

        </div><!-- col-md-3 Finish -->

        <div class="col-md-9"><!-- col-md-9 Begin -->
            <div class="box"><!-- box Begin -->
                <h1>Shop</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis veritatis perferendis, quaerat!
                </p>
            </div><!-- box Finish -->

            <div class="row"><!-- row Begin -->

                <?php foreach ($array['pro'] as $pro){ ?>

                <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->


                        <div class="product"><!-- product Begin -->

                            <a href="index.php?controller=detail&id=<?= $pro['product_id'] ?>">

                                <img class="img-responsive" src="view/product_images/<?= $pro['product_img1'] ?>" alt="Product 1">

                            </a>

                            <div class="text"><!-- text Begin -->

                                <h3>
                                    <a href="index.php?controller=detail&id=<?= $pro['product_id'] ?>">
                                        <?= $pro['product_title'] ?>
                                    </a>
                                </h3>

                                <p class="price"><?= number_format($pro['product_price'], 0, ',', '.') ?></p>

                                <p class="button">

                                    <a href="index.php?controller=detail&id=<?= $pro['product_id'] ?>" class="btn btn-default">View Details</a>

                                    <a href="index.php?controller=cart&action=add_to_cart&product_id=<?= $pro['product_id'] ?>" class="btn btn-primary">

                                        <i class="fa fa-shopping-cart">
                                            Add To Cart
                                        </i>

                                    </a>

                                </p>

                            </div><!-- text Finish -->

                        </div><!-- product Finish -->


                </div><!-- col-md-4 col-sm-6 center-responsive Finish -->

                <?php } ?>

            </div><!-- row Finish -->

            <center>
                <?php
//                for($i = 1; $i <= $array['page']; $i++){
//                    ?>
<!--                    <form class="pagination" method="post" action="index.php?controller=shop">-->
<!--                        <input type="hidden" name="search" value="--><?php //= $array['search'] ?><!--">-->
<!--                        <input type="hidden" name="page" value="--><?php //= $i ?><!--">-->
<!--                        <button class="active">-->
<!--                            --><?php //= $i ?>
<!--                        </button>-->
<!--                    </form>-->
<!--                    --><?php
//                }
                ?>
            </center>

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

                <?php foreach ($array['p_cat'] as $run_p_cat){ ?>
                    <ul>
                        <li><a href="index.php?controller=shop&action=display&id=<?=$run_p_cat['p_cat_id'] ?>"><?=$run_p_cat['p_cat_title'] ?></a></li>
                    </ul>
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