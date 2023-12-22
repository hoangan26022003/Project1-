<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
    //    Kiểm tra hành động hiện tại
    switch ($action) {
        case '':

            include_once 'model/paymentModel.php';

            include_once 'view/payment/index.php';
            break;
        case 'create':
            include_once 'view/payment/insert_payment.php';
            break;
        case 'store':
            include_once 'model/paymentModel.php';

            header('Location:index.php?controller=payment');
            break;
        case 'edit':
            include_once 'model/paymentModel.php';

            include_once 'view/payment/edit_payment.php';
            break;
        case 'update':
            include_once 'model/paymentModel.php';
            header('Location:index.php?controller=payment');
            break;
        case 'destroy':
//            Xóa dữ liệu trên db
            include_once 'model/paymentModel.php';
//            Quay về trang danh sách
            header('Location:index.php?controller=payment');
            break;
    }
?>