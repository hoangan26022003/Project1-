<?php

$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
//    Kiểm tra hành động hiện tại
switch ($action) {
    case '':

        include_once 'model/slideModel.php';

        include_once 'view/slide/index.php';
        break;
    case 'create':
        include_once 'model/slideModel.php';
        include_once 'view/slide/insert_slide.php';
        break;
    case 'store':
        include_once 'model/slideModel.php';
        header('Location:index.php?controller=slide&action=create');
        break;
    case 'edit':
        //Lấy dữ liệu của bản ghi đang được sửa
        include_once 'model/slideModel.php';
        //Hiển thị ra form để sửa
        include_once 'view/slide/edit_slide.php';
        break;
    case 'update':
        //Sửa dữ liệu trên DB
        include_once 'model/slideModel.php';
//            Quay về trang danh sách
        header('Location:index.php?controller=slide');
        break;
    case 'destroy':
//            Xóa dữ liệu trên db
        include_once 'model/slideModel.php';
//            Quay về trang danh sách
        header('Location:index.php?controller=slide');
        break;
}