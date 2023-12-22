<?php

$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
//    Kiểm tra hành động hiện tại
switch ($action) {
    case '':

        include_once 'model/productCategoriesModel.php';

        include_once 'view/product_category/index.php';
        break;
    case 'create':
        include_once 'model/productCategoriesModel.php';
        include_once 'view/product_category/insert_productCategories.php';
        break;
    case 'store':
        include_once 'model/productCategoriesModel.php';
        header('Location:index.php?controller=productCategory&action=create');
        break;
    case 'edit':
        //Lấy dữ liệu của bản ghi đang được sửa
        include_once 'model/productCategoriesModel.php';
        //Hiển thị ra form để sửa
        include_once 'view/product_category/edit_productCategories.php';
        break;
    case 'update':
        //Sửa dữ liệu trên DB
        include_once 'model/productCategoriesModel.php';
//            Quay về trang danh sách
        header('Location:index.php?controller=productCategory');
        break;
    case 'destroy':
//            Xóa dữ liệu trên db
        include_once 'model/productCategoriesModel.php';
//            Quay về trang danh sách
        header('Location:index.php?controller=productCategory');
        break;
}