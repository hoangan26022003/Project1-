<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}

switch ($action){
    case '':
        include_once 'model/cartModel.php';
        include_once 'view/cart/cart.php';
        break;
    case 'add_to_cart':
        include_once 'model/cartModel.php';
        header('Location:index.php?controller=cart&action=view_cart');
        break;
    case 'view_cart':
        include_once 'model/cartModel.php';
        include_once 'view/cart/cart.php';
        break;
    case 'update_cart':
        include_once 'model/cartModel.php';
        header('Location:index.php?controller=cart&action=view_cart');
    case 'delete_cart':
        include_once 'model/cartModel.php';
        header('Location:index.php?controller=cart&action=view_cart');
        break;
    case 'delete_one':
        include_once 'model/cartModel.php';
        header('Location:index.php?controller=cart&action=view_cart');
        break;
    case 'add_order':
        include_once 'model/cartModel.php';
        header('Location:index.php?controller=cart&action=view_cart');
        break;
}
?>