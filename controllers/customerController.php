<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
//    Kiểm tra hành động hiện tại
switch ($action) {
    case '':

        include_once 'model/customerModel.php';

        include_once 'view/customer/index.php';
        break;
    case 'destroy':
//            Xóa dữ liệu trên db
        include_once 'model/customerModel.php';
//            Quay về trang danh sách
        header('Location:index.php?controller=customer');
        break;
}
?>