<?php

include("includes/header.php");

?>

<div id="content"><!-- #content Begin -->
    <div class="container"><!-- container Begin -->

            <ul class="breadcrumb"><!-- breadcrumb Begin -->
                <li>
                    <a href="index.php?controller=home">Home</a>
                </li>
                <li>
                    Login
                </li>
            </ul><!-- breadcrumb Finish -->




        <div class="box"><!-- box Begin -->

            <div class="box-header"><!-- box-header Begin -->

                <center><!-- center Begin -->

                    <h1> Login </h1>

                    <p class="lead"> Already have our account..? </p>

                    <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, maxime. Laudantium omnis, ullam, fuga officia provident error corporis consectetur aliquid corrupti recusandae minus ipsam quasi. Perspiciatis nemo, nostrum magni odit! </p>

                </center><!-- center Finish -->

            </div><!-- box-header Finish -->

            <form method="post" action="index.php?controller=loginUser&action=loginProcessUser"><!-- form Begin -->

                <div class="form-group"><!-- form-group Begin -->

                    <label> Email </label>

                    <input name="customer_email" type="text" class="form-control" required>

                </div><!-- form-group Finish -->

                <div class="form-group"><!-- form-group Begin -->

                    <label> Password </label>

                    <input name="customer_pass" type="password" class="form-control" required>

                </div><!-- form-group Finish -->

                <div class="text-center"><!-- text-center Begin -->

                    <button name="login" value="Login" class="btn btn-primary">

                        <i class="fa fa-sign-in"></i> Login

                    </button>

                </div><!-- text-center Finish -->

            </form><!-- form Finish -->

            <center><!-- center Begin -->

                <a href="index.php?controller=register&action=create">

                    <h3> Dont have account..? Register here </h3>

                </a>

            </center><!-- center Finish -->

        </div><!-- box Finish -->
    </div>
</div>

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