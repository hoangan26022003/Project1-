<?php

$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
//    Kiểm tra hành động hiện tại

switch ($action){
    case '':
        include_once 'model/shopModel.php';
        include_once 'view/shop.php';
        break;
    case 'display':
        include_once 'model/shopModel.php';
        include_once 'view/pshop.php';
        break;
    case 'new':
        include_once 'model/shopModel.php';
        include_once 'view/cshop.php';
        break;
}
?>