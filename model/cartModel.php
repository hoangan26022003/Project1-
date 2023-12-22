<?php

    function indexProductsCart(){
        include_once 'connect/openDB.php';
        $get_product = "select * from products order by rand() LIMIT 0,3";
        $run_products = mysqli_query($conn,$get_product);
        include_once 'connect/closeDB.php';
        return $run_products;
    }

    function add_to_cart(){
        $product_id = $_GET['product_id'];
        if(isset($_SESSION['cart'])){
            if(isset($_SESSION['cart'][$product_id])){
                $_SESSION['cart'][$product_id]++;
            }else{
                $_SESSION['cart'][$product_id] = 1;
            }
        }else{
            $_SESSION['cart'] = array();
            $_SESSION['cart'][$product_id] = 1;
        }
    }

    function view_cart(){
        $array = array();
        $temp = array();
        include_once "connect/openDB.php";
        $get_product = "select * from products order by rand() LIMIT 0,3";
        $run_products = mysqli_query($conn,$get_product);
        $sqlPayment = "SELECT * FROM payment_method";
        $payment = mysqli_query($conn, $sqlPayment);
        $sqlSize = "SELECT * FROM size";
        $size = mysqli_query($conn, $sqlSize);
        $total = 0;
        foreach ($_SESSION['cart'] as $product_id => $quantity){
            $sql = "SELECT 	product_title, product_price, product_img1 FROM products WHERE product_id = '$product_id'";
            $cart = mysqli_query($conn, $sql);
            foreach ($cart as $value) {
                $temp[$product_id]['product_title'] = $value['product_title'];
                $temp[$product_id]['product_price'] = $value['product_price'];
                $temp[$product_id]['product_img1'] = $value['product_img1'];
                $temp[$product_id]['quantity'] = $quantity;
                $temp[$product_id]['subtotal'] = $value['product_price']*$quantity;
                $temp[$product_id]['total'] =  $total += $temp[$product_id]['subtotal'];
            }
        }
        include_once "connect/closeDB.php";
        $array['pr'] = $temp;
        $array['payment'] = $payment;
        $array['run_products'] = $run_products;
        $array['size'] = $size;
        return $array;
    }

    function update_cart(){
        $items = $_POST['quantity'];
        foreach ($items as $product_id => $quantity){
            if($quantity < 0){
                echo "<script> alert('cap nhat khong thanh cong');</script>";
            }else{
                $_SESSION['cart'][$product_id] = $quantity;
            }
        }
    }

    function delete_one(){
        $product_id = $_GET['product_id'];
        unset($_SESSION['cart'][$product_id]);
    }

    function delete_cart(){
        unset($_SESSION['cart']);
        $_SESSION['cart'] = array();
    }

    function add_order(){
        $method_id = $_POST['method_id'];
        $dateBuy = date('Y-m-d');
        $status = 1;
        $customer_id = $_SESSION['customer_id'];
        include_once 'connect/openDB.php';
        $sqlAddOrder = "INSERT INTO orders(dateBuy,status,customer_id,method_id) VALUES ('$dateBuy', '$status','$customer_id','$method_id')";
        mysqli_query($conn, $sqlAddOrder);
        $cartProduct = $_SESSION['cart'];
        $sqlOrderId = "SELECT MAX(oder_id) AS max_id FROM orders WHERE customer_id = '$customer_id'";
        $orderIDs = mysqli_query($conn, $sqlOrderId);
        foreach ($orderIDs as $each){
            $orderID = $each['max_id'];
        }
        foreach ($cartProduct as $product_id => $amount ){
            $sqlPrice = "SELECT product_price FROM products WHERE product_id = '$product_id'";
            $prices = mysqli_query($conn, $sqlPrice);
            foreach ($prices as $value){
                $price = $value['product_price'];
            }
            $sqlOrderDetails = "INSERT INTO order_detail VALUES ('$product_id', '$orderID', '$price', '$amount' )";
            mysqli_query($conn, $sqlOrderDetails);
        }
        include_once 'connect/closeDB.php';
        unset($_SESSION['cart']);
        $_SESSION['cart'] = array();
    }

switch ($action) {
    case '':
        $run_products = indexProductsCart();
        break;
    case 'add_to_cart':
        add_to_cart();
        break;
    case 'view_cart':
        $array = view_cart();
        break;
    case 'update_cart':
        update_cart();
        break;
    case 'delete_cart':
        delete_cart();
        break;
    case 'delete_one':
        delete_one();
        break;
    case 'add_order':
        add_order();
        break;
}



?>