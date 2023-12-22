<?php

$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
//    Kiểm tra hành động hiện tại
switch ($action) {
    case '':
        include_once 'model/orderDetailModel.php';
        include_once 'view/my_orders.php';

        break;

    case 'viewOrderDetail':
//            Xóa dữ liệu trên db
        include_once 'model/orderDetailModel.php';

        include_once 'view/orderDetail.php';
        break;
}
?>