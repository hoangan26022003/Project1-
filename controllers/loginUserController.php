<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
//    Kiểm tra hành động hiện tại
switch ($action) {
    case 'login':
        if (isset($_SESSION['customer_email'])){
            header('Location:index.php?controller=home');
        }else {
            include_once 'view/customer_login.php';
        }
        break;
    case 'loginProcessUser':
        include_once 'model/loginUserModel.php';
        if ($test == 0){
            header('Location:index.php?controller=loginUser&action=login');
        } else {
            header('Location:index.php?controller=home');
        }
        break;
    case 'logoutUser':
        include_once 'model/loginUserModel.php';
        header('Location:index.php?controller=loginUser&action=login');
        break;
}


?>