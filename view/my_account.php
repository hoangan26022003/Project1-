<?php
if(!isset($_SESSION['customer_email'])){

    echo "<script>window.open('index.php?controller=loginUser&action=login','_self')</script>";

}else{

    include("connect/openDB.php");
    include("model/function.php");

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>M-Dev Store</title>
        <link rel="stylesheet" href="view/styles/bootstrap-337.min.css">
        <link rel="stylesheet" href="view/font-awsome/css/font-awesome.min.css">
        <link rel="stylesheet" href="view/styles/style.css">
    </head>
    <body>

    <div id="top"><!-- Top Begin -->

        <div class="container"><!-- container Begin -->

            <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->

                <a href="#" class="btn btn-success btn-sm">

                    WELCOME

                </a>
                <a href="checkout.php"> </a>

            </div><!-- col-md-6 offer Finish -->

            <div class="col-md-6"><!-- col-md-6 Begin -->

                <ul class="menu"><!-- cmenu Begin -->

                    <li>
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="index.php?controller=myOrder">My Account</a>
                    </li>
                    <li>
                        <a href="cart/cart.php">Go To Cart</a>
                    </li>
                    <li>
                        <a href="checkout.php">

                            <?php

                            if(!isset($_SESSION['customer_email'])){

                                echo "<a href='index.php?controller=loginUser&action=login'> Login </a>";

                            }else{

                                echo " <a href='index.php?controller=loginUser&action=logoutUser'> Log Out </a> ";

                            }

                            ?>

                        </a>
                    </li>

                </ul><!-- menu Finish -->

            </div><!-- col-md-6 Finish -->

        </div><!-- container Finish -->

    </div><!-- Top Finish -->

    <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->

        <div class="container"><!-- container Begin -->

            <div class="navbar-header"><!-- navbar-header Begin -->

                <a href="../index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->

                    <img src="view/images/ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                    <img src="view/images/ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">

                </a><!-- navbar-brand home Finish -->

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                    <span class="sr-only">Toggle Navigation</span>

                    <i class="fa fa-align-justify"></i>

                </button>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

                    <span class="sr-only">Toggle Search</span>

                    <i class="fa fa-search"></i>

                </button>

            </div><!-- navbar-header Finish -->

            <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->

                <div class="padding-nav"><!-- padding-nav Begin -->

                    <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->

                        <li>
                            <a href="home.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li class="active">
                            <a href="my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart/cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>

                    </ul><!-- nav navbar-nav left Finish -->

                </div><!-- padding-nav Finish -->

                <a href="cart/cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->

                    <i class="fa fa-shopping-cart"></i>

                    <span>Items In Your Cart</span>

                </a><!-- btn navbar-btn btn-primary Finish -->

                <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->

                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->

                        <span class="sr-only">Toggle Search</span>

                        <i class="fa fa-search"></i>

                    </button><!-- btn btn-primary navbar-btn Finish -->

                </div><!-- navbar-collapse collapse right Finish -->

                <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->

                    <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->

                        <div class="input-group"><!-- input-group Begin -->

                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>

                            <span class="input-group-btn"><!-- input-group-btn Begin -->

                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->

                               <i class="fa fa-search"></i>

                           </button><!-- btn btn-primary Finish -->

                           </span><!-- input-group-btn Finish -->

                        </div><!-- input-group Finish -->

                    </form><!-- navbar-form Finish -->

                </div><!-- collapse clearfix Finish -->

            </div><!-- navbar-collapse collapse Finish -->

        </div><!-- container Finish -->

    </div><!-- navbar navbar-default Finish -->

    <div id="content"><!-- #content Begin -->
        <div class="container"><!-- container Begin -->
            <div class="col-md-12"><!-- col-md-12 Begin -->

                <ul class="breadcrumb"><!-- breadcrumb Begin -->
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        My Account
                    </li>
                </ul><!-- breadcrumb Finish -->

            </div><!-- col-md-12 Finish -->

            <div class="col-md-3"><!-- col-md-3 Begin -->

                <?php

                include("includes/sidebar1.php");

                ?>

            </div><!-- col-md-3 Finish -->

            <div class="col-md-9"><!-- col-md-9 Begin -->

                <div class="box"><!-- box Begin -->

                    <?php

                    if (isset($_GET['my_orders'])){
                        include("index.php?controller=myOrder");
                    }

                    ?>

                    <?php

                    if (isset($_GET['pay_offline'])){
                        include("pay_offline.php");
                    }

                    ?>

                    <?php

                    if (isset($_GET['edit_account'])){
                        include("edit_account.php");
                    }

                    ?>

                    <?php

                    if (isset($_GET['change_pass'])){
                        include("change_pass.php");
                    }

                    ?>



                </div><!-- box Finish -->

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

                    <ul><!-- ul Begin -->
                        <li><a href="index.php?controller=shop&action=display&id=1">Jackets</a></li> <br>
                        <li><a href="index.php?controller=shop&action=display&id=2">Accessories</a></li> <br>
                        <li><a href="index.php?controller=shop&action=display&id=3">Shoes</a></li> <br>
                        <li><a href="index.php?controller=shop&action=display&id=4">Coats</a></li> <br>
                        <li><a href="index.php?controller=shop&action=display&id=5">T-Shirt</a></li>
                    </ul><!-- ul Finish -->

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
<?php } ?>