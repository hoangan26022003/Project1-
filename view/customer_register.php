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
                        Register
                    </li>
                </ul><!-- breadcrumb Finish -->

            </div><!-- col-md-12 Finish -->


            <div class="col-md-12"><!-- col-md-9 Begin -->

                <div class="box"><!-- box Begin -->

                    <div class="box-header"><!-- box-header Begin -->

                        <center><!-- center Begin -->

                            <h2> Register a new account </h2>

                        </center><!-- center Finish -->

                        <form action="index.php?controller=register&action=store" method="post" enctype="multipart/form-data"><!-- form Begin -->

                            <div class="form-group"><!-- form-group Begin -->

                                <label>Your Name</label>

                                <input type="text" class="form-control" name="c_name" required>

                            </div><!-- form-group Finish -->

                            <div class="form-group"><!-- form-group Begin -->

                                <label>Your Email</label>

                                <input type="text" class="form-control" name="c_email" required>

                            </div><!-- form-group Finish -->

                            <div class="form-group"><!-- form-group Begin -->

                                <label>Your Password</label>

                                <input type="password" class="form-control" name="c_pass" required>

                            </div><!-- form-group Finish -->

                            <div class="form-group"><!-- form-group Begin -->

                                <label>Your Country</label>

                                <input type="text" class="form-control" name="c_country" required>

                            </div><!-- form-group Finish -->

                            <div class="form-group"><!-- form-group Begin -->

                                <label>Your City</label>

                                <input type="text" class="form-control" name="c_city" required>

                            </div><!-- form-group Finish -->

                            <div class="form-group"><!-- form-group Begin -->

                                <label>Your Contact</label>

                                <input type="text" class="form-control" name="c_contact" required>

                            </div><!-- form-group Finish -->

                            <div class="form-group"><!-- form-group Begin -->

                                <label>Your Address</label>

                                <input type="text" class="form-control" name="c_address" required>

                            </div><!-- form-group Finish -->

                            <div class="form-group"><!-- form-group Begin -->

                                <label>Your Profile Picture</label>

                                <input type="file" class="form-control form-height-custom" name="c_image" required>

                            </div><!-- form-group Finish -->

                            <div class="text-center"><!-- text-center Begin -->

                                <button type="submit" name="register" class="btn btn-primary">

                                    <i class="fa fa-user-md"></i> Register

                                </button>

                            </div><!-- text-center Finish -->

                        </form><!-- form Finish -->

                    </div><!-- box-header Finish -->

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