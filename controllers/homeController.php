<?php

$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
//    Kiểm tra hành động hiện tại

    switch ($action){
        case '':
            include_once 'model/homeModel.php';

            include_once 'view/home.php';

            break;
        case 'detail':
            include_once 'model/homeModel.php';

            include_once 'view/details.php';
            break;
}
?>