<?php
    function indexDetail(){
        $id = $_GET['id'];
        include_once 'connect/openDB.php';
        $sql = "SELECT * FROM products WHERE product_id = '$id'";
        $products = mysqli_query($conn, $sql);
        $sqlPCategories = "SELECT * FROM product_categories";
        $productCategories = mysqli_query($conn,$sqlPCategories);
        $sqlCategories = "SELECT * FROM categories";
        $categories = mysqli_query($conn,$sqlCategories);
        $get_products = "select * from products order by rand() LIMIT 0,3";
        $run_products = mysqli_query($conn, $get_products);
        include_once 'connect/closeDB.php';
        $array = array();

        $array['products'] = $products;
        $array['productCategories'] = $productCategories;
        $array['categories'] = $categories;
        $array['run_products'] = $run_products;
        return $array;
    }

    switch ($action){
        case '':
            $array = indexDetail();
            break;
    }
?>