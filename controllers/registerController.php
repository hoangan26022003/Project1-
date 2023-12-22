<?php

$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
//    Kiểm tra hành động hiện tại
switch ($action) {
    case '':

        include_once 'model/registerModel.php';

        break;
    case 'create':
        include_once 'model/registerModel.php';
        include_once 'view/customer_register.php';
        break;
    case 'store':
        include_once 'model/registerModel.php';
        header('Location:index.php?controller=loginUser&action=login');
        break;
}
?>