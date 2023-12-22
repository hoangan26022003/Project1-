<?php include_once 'view/includes/header.php'?>

<div id="content"><!-- #content Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-12"><!-- col-md-12 Begin -->

            <ul class="breadcrumb"><!-- breadcrumb Begin -->
                <li>
                    <a href="index.php?controller=home">Home</a>
                </li>
                <li>
                    Cart
                </li>
            </ul><!-- breadcrumb Finish -->

        </div><!-- col-md-12 Finish -->

        <div id="cart" class="col-md-8"><!-- col-md-9 Begin -->

            <div class="box"><!-- box Begin -->

                <form method="post" enctype="multipart/form-data" action="index.php?controller=cart&action=update_cart"><!-- form Begin -->

                    <h1>Shopping Cart</h1>
                    <p class="text-muted">You currently have 3 item(s) in your cart</p>

                    <div class="table-responsive"><!-- table-responsive Begin -->

                        <table class="table"><!-- table Begin -->

                            <thead><!-- thead Begin -->

                            <tr><!-- tr Begin -->

                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Size</th>
                                <th colspan="1">Delete</th>
                                <th colspan="2">Sub-Total</th>

                            </tr><!-- tr Finish -->

                            </thead><!-- thead Finish -->

                            <tbody><!-- tbody Begin -->

                            <?php
                            foreach ($array['pr'] as $product_id => $value){ ?>

                            <tr><!-- tr Begin -->

                                <td>

                                    <img class="img-responsive" src="view/product_images/<?=$value['product_img1']?>" alt="Product 3a">

                                </td>

                                <td>

                                    <a href="#"><?=$value['product_title']?></a>

                                </td>

                                <td>

                                    <input type="number" name="quantity[<?= $product_id ?>]" class="form-control form-control-sm bg-secondary border-0 text-center" value="<?=$value['quantity']?>" style="width: 100px">

                                </td>

                                <td>

                                    <?=number_format($value['product_price'],0,',','.');
                                    ?>

                                </td>

                                <td>
                                    <div class="select" >
                                        <select name="size_id" required>
                                            <option selected disabled>Chọn Giá Trị</option>
                                            <?php foreach ($array['size'] as $item){ ?>
                                            <option value="<?=$item['size_id']?>"><?= $item['size_name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </td>

                                <td>

                                    <a href="index.php?controller=cart&action=delete_one&product_id=<?= $product_id ?>" class="btn btn-danger"><i class="fa fa-times"></i></a>

                                </td>

                                <td>

                                    <?= number_format($value['subtotal'],0,',','.')?> VND

                                </td>

                            </tr><!-- tr Finish -->

                            <?php } ?>

                            </tbody><!-- tbody Finish -->

                        </table><!-- table Finish -->

                    </div><!-- table-responsive Finish -->


                    <div class="box-footer"><!-- box-footer Begin -->

                        <div class="pull-left"><!-- pull-left Begin -->

                            <a href="index.php?controller=shop" class="btn btn-default"><!-- btn btn-default Begin -->

                                <i class="fa fa-chevron-left"></i> Continue Shopping

                            </a><!-- btn btn-default Finish -->

                        </div><!-- pull-left Finish -->

                        <div class="pull-right"><!-- pull-right Begin -->

                            <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!-- btn btn-default Begin -->

                                <i class="fa fa-refresh"></i> Update Cart

                            </button><!-- btn btn-default Finish -->

                            <a href="index.php?controller=cart&action=delete_cart" class="btn btn-danger font-weight-bold" style="margin-left: 20px; width: 200px; height: 31px; float: right;">
                                Delete All Cart
                            </a>

                        </div><!-- pull-right Finish -->

                    </div><!-- box-footer Finish -->

                </form><!-- form Finish -->

            </div><!-- box Finish -->

            <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                    <div class="box same-height headline"><!-- box same-height headline Begin -->
                        <h3 class="text-center">Products You Maybe Like</h3>
                    </div><!-- box same-height headline Finish -->
                </div><!-- col-md-3 col-sm-6 Finish -->

                <?php foreach ($array['run_products'] as $products){ ?>
                    <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                        <div class="product same-height"><!-- product same-height Begin -->
                            <a href="index.php?controller=detail&id=<?= $products['product_id'] ?>">
                                <img class="img-responsive" src="view/product_images/<?= $products['product_img1'] ?>" alt="Product 6">
                            </a>

                            <div class="text"><!-- text Begin -->
                                <h3><a href="index.php?controller=detail&id=<?= $products['product_id'] ?>"><?= $products['product_title'] ?></a></h3>

                                <p class="price"><?= $products['product_price'] ?></p>

                            </div><!-- text Finish -->


                        </div><!-- product same-height Finish -->
                    </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                <?php } ?>


            </div><!-- #row same-heigh-row Finish -->

        </div><!-- col-md-9 Finish -->

        <div class="col-md-4"><!-- col-md-3 Begin -->

            <div id="order-summary" class="box"><!-- box Begin -->

                <div class="box-header"><!-- box-header Begin -->

                    <h3>Order Summary</h3>

                </div><!-- box-header Finish -->
                <p class="text-muted"><!-- text-muted Begin -->

                    Shipping and additional costs are calculated based on value you have entered

                </p><!-- text-muted Finish -->

                <form method="post" action="index.php?controller=cart&action=add_order">

                    <select name="method_id" class="form-control" required>
                        <option selected disabled>Choose Payment</option>
                        <?php foreach ($array['payment'] as $pay){
                            ?>
                            <option value="<?=$pay['method_id']?>"><?=$pay['method_name']?></option>
                            <?php
                        }
                        ?>
                    </select>


                    <div class="table-responsive"><!-- table-responsive Begin -->

                        <?php
                        $last_product = end($array['pr']);
    //                    $total = $last_product['total'];
                        ?>
                        <table class="table"><!-- table Begin -->

                            <tbody><!-- tbody Begin -->

    <!--                        <tr>   --><!--tr Begin -->
    <!---->
    <!--                            <td> Order Sub-Total </td>-->
    <!--                            <th> --><?php //=number_format($value['total'],0,',','.')?><!-- VND </th>-->
    <!---->
    <!--                        </tr>--><!--tr Finish -->
    <!---->
    <!--                        <tr>--><!--tr Begin -->
    <!---->
    <!--                            <td> Shipping and Handling </td>-->
    <!--                            <td> $0 </td>-->
    <!---->
    <!--                        </tr>--><!-- tr Finish -->
    <!---->
    <!--                        <tr>--><!--tr Begin -->
    <!---->
    <!--                            <td> Tax </td>-->
    <!--                            <th> $0 </th>-->
    <!---->
    <!--                        </tr>--><!--tr Finish -->

                            <tr class="total"><!-- tr Begin -->

                                <td> Total </td>
                                <th>
                                    <?php
                                    if (empty($array['pr'])){
                                        echo 0;
                                    } else {
                                        $latest_value = end($array['pr']);
                                        $latest_total = $latest_value['total'];
                                        echo number_format($latest_total, 0, ',', '.');
                                    }
    //                                number_format($value['total'],0,',','.')
                                    ?> VND </th>

                            </tr><!-- tr Finish -->


                            </tbody><!-- tbody Finish -->

                        </table><!-- table Finish -->

                        <div class="pull-right"><!-- pull-right Begin -->


                            <button class="btn btn-primary" onclick="confirmPayment()">

                                Proceed Checkout <i class="fa fa-chevron-right"></i>

                            </button>

                        </div><!-- pull-right Finish -->

                    </div><!-- table-responsive Finish -->
                </form>

            </div><!-- box Finish -->

        </div><!-- col-md-3 Finish -->

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

<script>
    function confirmPayment() {
        if (confirm("Are you sure you want to proceed with the payment?")) {
            // Nếu người dùng ấn OK, thực hiện hành động thanh toán
            window.location.href = "index.php?controller=cart&action=add_order";
        } else {
            // Nếu người dùng ấn Cancel, không thực hiện hành động nào
        }
    }
</script>


</body>
</html>
