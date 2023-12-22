<?php

    $conn = mysqli_connect('localhost', 'root', '', 'shop');

function cart(){
    global $conn;

    $get_products = "select * from products order by rand() LIMIT 0,3";

    $run_products = mysqli_query($conn,$get_products);

    while($row_products=mysqli_fetch_array($run_products)){

        $pro_id = $row_products['product_id'];

        $pro_title = $row_products['product_title'];

        $pro_price = $row_products['product_price'];

        $pro_img1 = $row_products['product_img1'];

        echo "
                       
                    <div class='col-md-3 col-sm-6 center-responsive'><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class='product same-height'><!-- product same-height Begin -->
                           <a href='details.php?pro_id=$pro_id'>
                               <img class='img-responsive' src='product_images/$pro_img1' alt='Product 6'>
                            </a>
                            
                            <div class='text'><!-- text Begin -->
                                <h3><a href='details.php?pro_id=$pro_id'> $pro_title </a></h3>
                                
                                <p class='price'>$pro_price VND</p>
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
                       ";

    }
}

function getRealIpUser(){

    switch(true){

        case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
        case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
        case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];

        default : return $_SERVER['REMOTE_ADDR'];

    }

}

function add_cart(){

    global $conn;

    if(isset($_GET['add_cart'])){

        $ip_add = getRealIpUser();

        $p_id = $_GET['add_cart'];

        $product_qty = $_POST['product_qty'];

        $product_size = $_POST['product_size'];

        $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";

        $run_check = mysqli_query($conn,$check_product);

        if(mysqli_num_rows($run_check)>0){

            echo "<script>alert('This product has already added in cart')</script>";
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";

        }else{

            $query = "insert into cart (p_id,ip_add,qty,size) values ('$p_id','$ip_add','$product_qty','$product_size')";

            $run_query = mysqli_query($conn,$query);

            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";

        }

    }

}

function getPro(){
    global $conn;

    $get_products = "select * from products order by 1 DESC LIMIT 0,8";

    $run_products = mysqli_query($conn,$get_products);

    while($row_products=mysqli_fetch_array($run_products)){

        $pro_id = $row_products['product_id'];

        $pro_title = $row_products['product_title'];

        $pro_price = $row_products['product_price'];

        $pro_img1 = $row_products['product_img1'];

        echo "
        
        <div class='col-md-4 col-sm-6 single'>
        
            <div class='product'>
            
                <a href='details.php?pro_id=$pro_id'>
                
                    <img class='img-responsive' src='product_images/$pro_img1'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?pro_id=$pro_id'>

                            $pro_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                        $pro_price VND
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                            View Details

                        </a>
                    
                        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                            <i class='fa fa-shopping-cart'></i> Add to Cart

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
        
        ";

    }

}

function getPCats() {
    global $conn;

    $get_p_cats= "select * from product_categories";

    $run_p_cats = mysqli_query($conn,$get_p_cats);

    while ($row_p_cat = mysqli_fetch_array($run_p_cats)){

        $p_cat_id = $row_p_cat['p_cat_id'];

        $p_cat_title = $row_p_cat['p_cat_title'];

        echo "
            <li>
                <a href='shop.php?p_cat=$p_cat_id'> $p_cat_title </a>
            </li>
        
        
        ";

    }
}

function getCats() {
    global $conn;

    $get_cats= "select * from categories";

    $run_cats = mysqli_query($conn,$get_cats);

    while ($row_p_cat = mysqli_fetch_array($run_cats)){

        $cat_id = $row_p_cat['cat_id'];

        $cat_title = $row_p_cat['cat_title'];

        echo "
            <li>
                <a href='shop.php?cat=$cat_id'> $cat_title </a>
            </li>
        
        
        ";

    }
}

function getpcatpro(){

    global $conn;

    if(isset($_GET['p_cat'])){

        $p_cat_id = $_GET['p_cat'];

        $get_p_cat ="select * from product_categories where p_cat_id='$p_cat_id'";

        $run_p_cat = mysqli_query($conn,$get_p_cat);

        $row_p_cat = mysqli_fetch_array($run_p_cat);

        $p_cat_title = $row_p_cat['p_cat_title'];

        $p_cat_desc = $row_p_cat['p_cat_desc'];

        $get_products ="select * from products where p_cat_id='$p_cat_id'";

        $run_products = mysqli_query($conn,$get_products);

        $count = mysqli_num_rows($run_products);

        if($count==0){

            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Product Categories </h1>
                
                </div>
            
            ";

        }else{

            echo "
            
                <div class='box'>
                
                    <h1> $p_cat_title </h1>
                    
                    <p> $p_cat_desc </p>
                
                </div>
            
            ";

        }

        while($row_products=mysqli_fetch_array($run_products)){

            $pro_id = $row_products['product_id'];

            $pro_title = $row_products['product_title'];

            $pro_price = $row_products['product_price'];

            $pro_img1 = $row_products['product_img1'];

            echo "
            
                <div class='col-md-4 col-sm-6 center-responsive'>
        
            <div class='product'>
            
                <a href='details.php?pro_id=$pro_id'>
                
                    <img class='img-responsive' src='product_images/$pro_img1'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?pro_id=$pro_id'>

                            $pro_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                        $pro_price VND
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                            View Details

                        </a>
                    
                        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                            <i class='fa fa-shopping-cart'></i> Add to Cart

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
            
            ";

        }

    }

}

function getcatpro(){

    global $conn;

    if(isset($_GET['cat'])){

        $cat_id = $_GET['cat'];

        $get_cat = "select * from categories where cat_id='$cat_id'";

        $run_cat = mysqli_query($conn,$get_cat);

        $row_cat = mysqli_fetch_array($run_cat);

        $cat_title = $row_cat['cat_title'];

        $cat_desc = $row_cat['cat_desc'];

        $get_cat = "select * from products where cat_id='$cat_id'";

        $run_products = mysqli_query($conn,$get_cat);

        $count = mysqli_num_rows($run_products);

        if($count==0){


            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Category </h1>
                
                </div>
            
            ";

        }else{

            echo "
            
                <div class='box'>
                
                    <h1> $cat_title </h1>
                    
                    <p> $cat_desc </p>
                
                </div>
            
            ";

        }

        while($row_products=mysqli_fetch_array($run_products)){

            $pro_id = $row_products['product_id'];

            $pro_title = $row_products['product_title'];

            $pro_price = $row_products['product_price'];

            $pro_desc = $row_products['product_desc'];

            $pro_img1 = $row_products['product_img1'];

            echo "
            
                <div class='col-md-4 col-sm-6 center-responsive'>
                                    
                    <div class='product'>
                                        
                        <a href='details.php?pro_id=$pro_id'>
                                            
                            <img class='img-responsive' src='product_images/$pro_img1'>
                                            
                        </a>
                                            
                        <div class='text'>
                                            
                            <h3>
                                                
                                <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                                
                            </h3>
                                            
                        <p class='price'>

                            $pro_price VND

                        </p>

                            <p class='buttons'>

                                <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                                View Details

                                </a>

                                <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                                <i class='fa fa-shopping-cart'></i> Add To Cart

                                </a>

                            </p>
                                            
                        </div>
                                        
                    </div>
                                    
                </div>
            
            ";

        }

    }

}

function items(){

    global $conn;

    $ip_add = getRealIpUser();

    $get_items = "select * from cart where ip_add='$ip_add'";

    $run_items = mysqli_query($conn,$get_items);

    $count_items = mysqli_num_rows($run_items);

    echo $count_items;

}

/// finish getRealIpUser functions ///

/// begin total_price functions ///

function total_price(){

    global $conn;

    $ip_add = getRealIpUser();

    $total = 0;

    $select_cart = "select * from cart where ip_add='$ip_add'";

    $run_cart = mysqli_query($conn,$select_cart);

    while($record=mysqli_fetch_array($run_cart)){

        $pro_id = $record['p_id'];

        $pro_qty = $record['qty'];

        $get_price = "select * from products where product_id='$pro_id'";

        $run_price = mysqli_query($conn,$get_price);

        while($row_price=mysqli_fetch_array($run_price)){

            $sub_total = $row_price['product_price']*$pro_qty;

            $total += $sub_total;

        }

    }

    echo $total . " VND";

}
function update_cart(){

    global $conn;

    if(isset($_POST['update'])){

        foreach($_POST['remove'] as $remove_id){

            $delete_product = "delete from cart where p_id='$remove_id'";

            $run_delete = mysqli_query($conn,$delete_product);

            if($run_delete){

                echo "<script>window.open('cart.php','_self')</script>";

            }

        }

    }

}

function detail(){
    global $conn;
    $get_products = "select * from products order by rand() LIMIT 0,3";

    $run_products = mysqli_query($conn, $get_products);

    while ($row_products = mysqli_fetch_array($run_products)) {

        $pro_id = $row_products['product_id'];

        $pro_title = $row_products['product_title'];

        $pro_img1 = $row_products['product_img1'];

        $pro_price = $row_products['product_price'];

        echo "
                       
                        <div class='col-md-3 col-sm-6 center-responsive'>
                        
                            <div class='product same-height'>
                            
                                <a href='details.php?pro_id=$pro_id'>
                                
                                    <img class='img-responsive' src='product_images/$pro_img1'>
                                
                                </a>
                                
                                <div class='text'>
                                
                                    <h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a> </h3>
                                    
                                    <p class='price'>$pro_price VND</p>
                                
                                </div>
                            
                            </div>
                        
                        </div>
                       
                       ";

    }

}

function contact(){
    global $conn;

    if (isset($_POST['submit'])) {

        /// Admin receives message with this ///

        $sender_name = $_POST['name'];

        $sender_email = $_POST['email'];

        $sender_subject = $_POST['subject'];

        $sender_message = $_POST['message'];

        $receiver_email = "mugianto4th@gmail.com";

        mail($receiver_email, $sender_name, $sender_subject, $sender_message, $sender_email);

        /// Auto reply to sender with this ///

        $email = $_POST['email'];

        $subject = "Welcome to my website";

        $msg = "Thanks for sending us message. ASAP we will reply your message";

        $from = "mugianto4th@gmail.com";

        mail($email, $subject, $msg, $from);

        echo "<h2 align='center'> Your message has sent sucessfully </h2>";

    }
}

function register(){
    global $conn;
    if(isset($_POST['register'])){

        $c_name = $_POST['c_name'];

        $c_email = $_POST['c_email'];

        $c_pass = $_POST['c_pass'];

        $c_country = $_POST['c_country'];

        $c_city = $_POST['c_city'];

        $c_contact = $_POST['c_contact'];

        $c_address = $_POST['c_address'];

        $c_image = $_FILES['c_image']['name'];

        $c_image_tmp = $_FILES['c_image']['tmp_name'];

        $c_ip = getRealIpUser();

        move_uploaded_file($c_image_tmp,"customer_images/$c_image");

        $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";

        $run_customer = mysqli_query($conn,$insert_customer);

        $sel_cart = "select * from cart where ip_add='$c_ip'";

        $run_cart = mysqli_query($conn,$sel_cart);

        $check_cart = mysqli_num_rows($run_cart);

        if($check_cart>0){

            /// If register have items in cart ///

            $_SESSION['customer_email']=$c_email;

            echo "<script>alert('You have been Registered Sucessfully')</script>";

            echo "<script>window.open('checkout.php','_self')</script>";

        }else{

            /// If register without items in cart ///

            $_SESSION['customer_email']=$c_email;

            echo "<script>alert('You have been Registered Sucessfully')</script>";

            echo "<script>window.open('home.php','_self')</script>";

        }

    }
}

function customer_login(){
    global $conn;
    if(isset($_POST['login'])){

        $customer_email = $_POST['c_email'];

        $customer_pass = $_POST['c_pass'];

        $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

        $run_customer = mysqli_query($conn,$select_customer);

        $check_customer = mysqli_num_rows($run_customer);

        if($check_customer==0){

            echo "<script>alert('Your email or password is wrong')</script>";

            exit();

        }

        if($check_customer==1){

            $_SESSION['customer_email']=$customer_email;

            echo "<script>alert('You are Logged in')</script>";


        }else{

            $_SESSION['customer_email']=$customer_email;

            echo "<script>alert('You are Logged in')</script>";


        }

    }
}

function product_categories(){
    global $conn;
    $get_p_cats = "select * from product_categories";

    $run_p_cats = mysqli_query($conn,$get_p_cats);

    while($row_p_cats=mysqli_fetch_array($run_p_cats)){

        $p_cat_id = $row_p_cats['p_cat_id'];

        $p_cat_title = $row_p_cats['p_cat_title'];

        echo "
                            
                                <li>
                                
                                    <a href='shop.php?p_cat=$p_cat_id'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";

    }

}







