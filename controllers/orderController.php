<?php

$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
//    Kiểm tra hành động hiện tại
switch ($action) {
    case '':
        include_once 'model/orderModel.php';

        include_once 'view/order/index.php';

        break;

    case 'orderDetailAdmin':
//            Xóa dữ liệu trên db
        include_once 'model/orderModel.php';

        include_once 'view/order/DetailOrder.php ';

        break;
}
?>