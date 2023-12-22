<?php

    function indexRegister(){
        $id = $_GET['id'];
        include_once 'connect/openDB.php';
        $get_p_cat = "select * from product_categories WHERE cat_id = '$id'";
        $run_p_cat = mysqli_query($conn,$get_p_cat);
        $get_cat = "select * from categories WHERE p_cat_id = '$id'";
        $run_cat = mysqli_query($conn,$get_cat);
        $sql = "SELECT * FROM customers";
        $customers = mysqli_query($conn, $sql);
        $sqlpr = "SELECT * FROM products";
        $pr = mysqli_query($conn, $sqlpr);
        include_once 'connect/closeDB.php';
        $array = array();
        $array['cats'] = $run_p_cat;
        $array['run_cat'] = $run_cat;
        $array['customers'] = $customers;
        $array['pr'] = $pr;
        return $array;

    }

    function storeRegister(){
        $c_name = $_POST['c_name'];

        $c_email = $_POST['c_email'];

        $c_pass = $_POST['c_pass'];

        $c_country = $_POST['c_country'];

        $c_city = $_POST['c_city'];

        $c_contact = $_POST['c_contact'];

        $c_address = $_POST['c_address'];

        $c_image = $_FILES['c_image']['name'];

        $c_image_tmp = $_FILES['c_image']['tmp_name'];


        move_uploaded_file($c_image_tmp,"customer_images/$c_image");

        include_once 'connect/openDB.php';

        $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image')";

        mysqli_query($conn,$insert_customer);

        include_once 'connect/closeDB.php';



//        $check_cart = mysqli_num_rows($run_customer);
//
//
//        if($check_cart>0){
//
//            /// If register have items in cart ///
//
//            $_SESSION['customer_email']=$c_email;
//
//            echo "<script>alert('You have been Registered Sucessfully')</script>";
//
//
//        }else{
//
//            /// If register without items in cart ///
//
//            $_SESSION['customer_email']=$c_email;
//
//            echo "<script>alert('You have been Registered Sucessfully')</script>";
//
//
//        }
//
    }

    switch ($action){
        case '':
            $array = indexRegister();
            break;
        case 'store':
            storeRegister();
            break;
    }

?>