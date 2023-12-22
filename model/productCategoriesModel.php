<?php
    function index(){
        include_once 'connect/openDB.php';
        $sql = "SELECT * FROM product_categories";
        $product_categories = mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
        return $product_categories;
    }

    function store(){
    //        Lấy dữ liệu từ form về
        $p_cat_title = $_POST['p_cat_title'];
        $p_cat_desc = $_POST['p_cat_desc'];
        include_once 'connect/openDB.php';
        $sql = "INSERT INTO product_categories(p_cat_title, p_cat_desc) VALUES ('$p_cat_title', '$p_cat_desc')";
        mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
    }

    function editCategoriesProducts(){
        $id = $_GET['id'];
        include_once 'connect/openDB.php';
        $sql = "SELECT * FROM  product_categories WHERE p_cat_id = '$id'";
        $productCategories = mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
        return $productCategories;
    }

    function updateCategoriesProducts(){
        $id = $_POST['id'];
        $p_cat_title = $_POST['p_cat_title'];
        $p_cat_desc = $_POST['p_cat_desc'];
        include_once 'connect/openDB.php';
        $sql = "UPDATE product_categories SET p_cat_title = '$p_cat_title', p_cat_desc = '$p_cat_desc' WHERE p_cat_id = '$id'";
        $productCategories = mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
    }

    function destroy(){
    //        Lấy id
        $id = $_GET['id'];
        include_once 'connect/openDB.php';
        $sql = "DELETE FROM product_categories WHERE p_cat_id = '$id'";
        mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
    }

    switch ($action){
        case '':
            $product_categories = index();
            break;
        case 'store':
            store();
            break;
        case 'edit':
            $productCategories = editCategoriesProducts();
            break;
        case 'update':
            updateCategoriesProducts();
            break;
        case 'destroy':
            destroy();
            break;
    }

?>