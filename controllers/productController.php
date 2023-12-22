<?php

    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    //    Kiểm tra hành động hiện tại
    switch ($action) {
        case '':

            include_once 'model/productModel.php';

            include_once 'view/products/index.php';
            break;
        case 'create':
            include_once 'model/productModel.php';
            include_once 'view/products/insert_product.php';
            break;
        case 'store':
            include_once 'model/productModel.php';
            header('Location:index.php?controller=product&action=create');
            break;
        case 'edit':
            //Lấy dữ liệu của bản ghi đang được sửa
            include_once 'model/productModel.php';
            //Hiển thị ra form để sửa
            include_once 'view/products/edit_product.php';
            break;
        case 'update':
            //Sửa dữ liệu trên DB
            include_once 'model/productModel.php';
//            Quay về trang danh sách
            header('Location:index.php?controller=product');
            break;
        case 'destroy':
//            Xóa dữ liệu trên db
            include_once 'model/productModel.php';
//            Quay về trang danh sách
            header('Location:index.php?controller=product');
            break;
    }
?>