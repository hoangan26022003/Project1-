<?php

function allShop(){
    include_once 'connect/openDB.php';

    $search = '';
    if(isset($_POST['search'])){
        $search = $_POST['search'];
    }
    $page = 1;
    if(isset($_POST['page'])){
        $page = $_POST['page'];
    }
    $recordOnePage = 6;
//        Tong so ban ghi
    $sqlCountRecord = "SELECT COUNT(*) AS count_record FROM products WHERE products.product_title LIKE '%$search%'";
    $countRecords = mysqli_query($conn, $sqlCountRecord);
    foreach ($countRecords as $each){
        $countRecord = $each['count_record'];
    }
    $countPage = ceil($countRecord / $recordOnePage);
    $start = ($page - 1) * $recordOnePage;
    $sql = "SELECT * FROM products WHERE products.product_title LIKE '%$search%' LIMIT $start, $recordOnePage";
    $products = mysqli_query($conn, $sql);

    $get_product = "select * from products order by 1 DESC LIMIT 0,8";

    $run_product = mysqli_query($conn,$get_product);

    $get_p_cat = "select * from product_categories";

    $run_p_cat = mysqli_query($conn,$get_p_cat);

    $get_cat = "select * from categories";

    $run_cat = mysqli_query($conn,$get_cat);

    $get_slides = "select * from slider LIMIT 0,1";


    $run_slides = mysqli_query($conn,$get_slides);


    include_once 'connect/openDB.php';

    $array = array();

    $array['$run_product'] = $run_product;
    $array['$run_p_cat'] = $run_p_cat;
    $array['$run_cat'] = $run_cat;
    $array['$run_slides'] = $run_slides;
    $array['search'] = $search;
    $array['products'] = $products;
    $array['page'] = $countPage;
    return $array;

}

function displayCategories(){
    $id = $_GET['id'];
    include_once 'connect/openDB.php';
    $search = '';
    if(isset($_POST['search'])){
        $search = $_POST['search'];
    }
    $page = 1;
    if(isset($_POST['page'])){
        $page = $_POST['page'];
    }
    $recordOnePage = 6;
//        Tong so ban ghi
    $sqlCountRecord = "SELECT COUNT(*) AS count_record FROM products WHERE products.product_title LIKE '%$search%'";
    $countRecords = mysqli_query($conn, $sqlCountRecord);
    foreach ($countRecords as $each){
        $countRecord = $each['count_record'];
    }
    $countPage = ceil($countRecord / $recordOnePage);
    $start = ($page - 1) * $recordOnePage;

    $get_p_cat = "select * from product_categories";
    $run_p_cat = mysqli_query($conn,$get_p_cat);
    $sql = "SELECT * FROM products WHERE p_cat_id = '$id'";
    $product = mysqli_query($conn, $sql);
    $get_cat = "select * from categories";
    $run_cat = mysqli_query($conn,$get_cat);
    include_once 'connect/closeDB.php';
    $array = array();
    $array['product'] = $product;
    $array['cat'] = $run_p_cat;
    $array['$run_cat'] = $run_cat;
    $array['search'] = $search;
    $array['page'] = $countPage;
    return $array;
}


function viewShop(){
    $id = $_GET['id'];
    include_once 'connect/openDB.php';
    $search = '';
    if(isset($_POST['search'])){
        $search = $_POST['search'];
    }
    $page = 1;
    if(isset($_POST['page'])){
        $page = $_POST['page'];
    }
    $recordOnePage = 6;
//        Tong so ban ghi
    $sqlCountRecord = "SELECT COUNT(*) AS count_record FROM products WHERE products.product_title LIKE '%$search%'";
    $countRecords = mysqli_query($conn, $sqlCountRecord);
    foreach ($countRecords as $each){
        $countRecord = $each['count_record'];
    }
    $countPage = ceil($countRecord / $recordOnePage);
    $start = ($page - 1) * $recordOnePage;
    $get_p_cat = "select * from product_categories";
    $run_p_cat = mysqli_query($conn,$get_p_cat);
    $get_cat = "select * from categories";
    $run_cat = mysqli_query($conn,$get_cat);
    $sql = "SELECT * FROM products WHERE cat_id = '$id'";
    $pro = mysqli_query($conn, $sql);
    include_once 'connect/closeDB.php';
    $array = array();
    $array['pro'] = $pro;
    $array['cat'] = $run_cat;
    $array['p_cat'] = $run_p_cat;
    $array['search'] = $search;
    $array['page'] = $countPage;
    return $array;
}

switch ($action){
    case '':
        $array = allShop();
        break;
    case 'display':
        $array = displayCategories();
        break;
    case 'new':
        $array = viewShop();
        break;
}

?>