<?php

    function indexCategories(){
        include_once 'connect/openDB.php';
        $sql = "SELECT * FROM categories";
        $categories = mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
        return $categories;
    }

    function storeCategories(){
        //        Lấy dữ liệu từ form về
        $cat_title = $_POST['cat_title'];
        $cat_desc = $_POST['cat_desc'];
        include_once 'connect/openDB.php';
        $sql = "INSERT INTO categories(cat_title, cat_desc) VALUES ('$cat_title', '$cat_desc')";
        mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
    }

    function editCategories(){
        $id = $_GET['id'];
        include_once 'connect/openDB.php';
        $sql = "SELECT * FROM  categories WHERE cat_id = '$id'";
        $categories = mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
        return $categories;
    }

    function updateCategories(){
        $id = $_POST['id'];
        $cat_title = $_POST['cat_title'];
        $cat_desc = $_POST['cat_desc'];
        include_once 'connect/openDB.php';
        $sql = "UPDATE categories SET cat_title = '$cat_title', cat_desc = '$cat_desc' WHERE cat_id = '$id'";
        $categories = mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
    }

function destroyCategories(){
    //        Lấy id
    $id = $_GET['id'];
    include_once 'connect/openDB.php';
    $sql = "DELETE FROM categories WHERE cat_id = '$id'";
    mysqli_query($conn, $sql);
    include_once 'connect/closeDB.php';
}

    switch ($action){
        case '':
            $categories = indexCategories();
            break;
        case 'store':
            storeCategories();
            break;
        case 'edit':
            $categories = editCategories();
            break;
        case 'update':
            updateCategories();
            break;
        case 'destroy':
            destroyCategories();
            break;
    }

?>
