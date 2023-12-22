<?php

    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    //    Kiểm tra hành động hiện tại

    switch ($action){
        case '':
            include_once 'model/function.php';

            break;
        case 'registers':
            include_once 'model/function.php';

            include_once 'view/customer_register.php';
            break;
        case 'storeRegister':
            include_once 'model/productModel.php';
            header('Location:index.php?controller=function&action=registers');
            break;
    }
?>