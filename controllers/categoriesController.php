<?php

$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
//    Kiểm tra hành động hiện tại
switch ($action) {
    case '':

        include_once 'model/categoriesModel.php';

        include_once 'view/categories/index.php';
        break;
    case 'create':
        include_once 'model/categoriesModel.php';
        include_once 'view/categories/insert_categories.php';
        break;
    case 'store':
        include_once 'model/categoriesModel.php';
        header('Location:index.php?controller=category&action=create');
        break;
    case 'edit':
        //Lấy dữ liệu của bản ghi đang được sửa
        include_once 'model/categoriesModel.php';
        //Hiển thị ra form để sửa
        include_once 'view/categories/edit_categories.php';
        break;
    case 'update':
        //Sửa dữ liệu trên DB
        include_once 'model/categoriesModel.php';
//            Quay về trang danh sách
        header('Location:index.php?controller=category');
        break;
    case 'destroy':
//            Xóa dữ liệu trên db
        include_once 'model/categoriesModel.php';
//            Quay về trang danh sách
        header('Location:index.php?controller=category');
        break;
}