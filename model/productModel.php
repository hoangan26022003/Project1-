<?php
    function indexProduct(){
        include_once 'connect/openDB.php';
        $search = '';
        if(isset($_POST['search'])){
            $search = $_POST['search'];
        }
        $page = 1;
        if(isset($_POST['page'])){
            $page = $_POST['page'];
        }
        $recordOnePage = 5;
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
        include_once 'connect/closeDB.php';
        $array = array();
        $array['search'] = $search;
        $array['products'] = $products;
        $array['page'] = $countPage;
        return $array;
    }

    function creatProduct(){
        include_once 'connect/openDB.php';
        $sql = "SELECT * FROM categories";
        $categories = mysqli_query($conn, $sql);
        $sqlcategoriesProduct = "SELECT * FROM product_categories";
        $categoriesProduct = mysqli_query($conn, $sqlcategoriesProduct);
        include_once 'connect/closeDB.php';
        $array = array();
        $array['categories'] = $categories;
        $array['categoriesProduct'] = $categoriesProduct;
        return $array;
    }

    function storeProduct(){
        $product_title = $_POST['product_title'];
        $p_cat_id = $_POST['p_cat_id'];
        $cat_id = $_POST['cat_id'];
        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];

        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        $temp_name3 = $_FILES['product_img3']['tmp_name'];

        move_uploaded_file($temp_name1, "view/product_images/$product_img1");
        move_uploaded_file($temp_name2, "view/product_images/$product_img2");
        move_uploaded_file($temp_name3, "view/product_images/$product_img3");


        $date = date("Y-m-d");
        $product_price = $_POST['product_price'];
        $product_keywords = $_POST['product_keywords'];
        $product_desc = $_POST['product_desc'];

        include_once('connect/openDB.php');
        $sql = "INSERT INTO products(p_cat_id, cat_id, product_title, product_img1, product_img2, product_img3, date, product_price, product_keywords, product_desc)
                VALUES ('$p_cat_id', '$cat_id' , '$product_title', '$product_img1', '$product_img2', '$product_img3', '$date', '$product_price', '$product_keywords', '$product_desc')";
        $insert_product = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) == 1) {
            echo "Thêm sản phẩm thành công!";
        } else {
            echo "Thêm sản phẩm thất bại: " . mysqli_error($conn);
        }

        include_once('connect/closeDB.php');

    }

    function editProduct(){
        $id = $_GET['id'];
        include_once 'connect/openDB.php';
        $sql = "SELECT * FROM products WHERE product_id = '$id'";
        $products = mysqli_query($conn, $sql);
        $sqlCategories = "SELECT * FROM categories";
        $categories = mysqli_query($conn, $sqlCategories);
        $sqlProductCategories = "SELECT * FROM product_categories";
        $productCategories = mysqli_query($conn, $sqlProductCategories);
        include_once 'connect/closeDB.php';
        $array = array();
        $array['categories'] = $categories;
        $array['products'] = $products;
        $array['product_categories'] = $productCategories;
        return $array;
    }

    function updateProduct(){
        $id = $_POST['id'];
        $product_title = $_POST['product_title'];
        $p_cat_id = $_POST['p_cat_id'];
        $cat_id = $_POST['cat_id'];
        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];

        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        $temp_name3 = $_FILES['product_img3']['tmp_name'];

        move_uploaded_file($temp_name1, "view/product_images/$product_img1");
        move_uploaded_file($temp_name2, "view/product_images/$product_img2");
        move_uploaded_file($temp_name3, "view/product_images/$product_img3");


        $date = $_POST['date'];
        $product_price = $_POST['product_price'];
        $product_keywords = $_POST['product_keywords'];
        $product_desc = $_POST['product_desc'];

        include_once 'connect/openDB.php';
        $sql = "UPDATE products SET product_title = '$product_title', p_cat_id = '$p_cat_id', cat_id = '$cat_id', product_img1 = '$product_img1', product_img2 = '$product_img2', product_img3 = '$product_img3', date = '$date', product_price = '$product_price', product_keywords = '$product_keywords', product_desc = '$product_desc'  WHERE product_id = '$id'";
        mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
    }


    function destroyProduct(){
        $id = $_GET['id'];
        include_once 'connect/openDB.php';
        $sql = "DELETE FROM products WHERE product_id = '$id'";
        mysqli_query($conn, $sql);
        include_once 'connect/openDB.php';
    }

switch ($action){
    case '':
//            Lấy dữ liệu từ DB
        $array = indexProduct();
        break;
    case 'create':
        $array = creatProduct();
        break;
    case 'store':
        storeProduct();
        break;
    case 'edit':
        $array = editProduct();
        break;
    case 'update':
        updateProduct();
        break;
    case 'destroy':
        destroyProduct();
        break;


}


?>
