<?php

    function all(){

        include_once 'connect/openDB.php';

        $get_product = "select * from products order by 1 DESC LIMIT 0,8";

        $run_product = mysqli_query($conn,$get_product);

        $get_p_cat = "select * from product_categories";

        $run_p_cat = mysqli_query($conn,$get_p_cat);

        $get_slides = "select * from slider LIMIT 0,1";

        $run_slides = mysqli_query($conn,$get_slides);


        include_once 'connect/openDB.php';

        $array = array();

        $array['$run_product'] = $run_product;
        $array['$run_p_cat'] = $run_p_cat;
        $array['$run_slides'] = $run_slides;
        return $array;

    }

    function detail(){
        $id = $_GET['id'];
        include_once 'connect/openDB.php';
        $sql = "SELECT * FROM products";
        $products = mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
        return $products;
    }

    switch ($action){
        case '':
            $array = all();
            break;
        case 'detail':
            $products = detail();

    }

?>