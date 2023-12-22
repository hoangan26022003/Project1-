<?php
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    //    Kiểm tra hành động hiện tại
    switch ($action) {
        case 'loginAdmin':
            if (isset($_SESSION['admin_email'])){
                header('Location: index.php?controller=product&action=create');
            } else {
                include_once 'view/loginAdmin/login.php';
            }
            break;
        case 'loginProcess':
            include_once 'model/loginModel.php';
            if ($admin == 0){
                header('Location: index.php?controller=login&action=loginAdmin');
            } elseif ($admin == 1){
                header('Location: index.php?controller=product&action=create');
            }
            break;
        case 'logout':
            include_once 'model/loginModel.php';
            header('Location: index.php?controller=login&action=loginAdmin');
            break;
    }


?>