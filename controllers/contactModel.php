<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
//    Kiểm tra hành động hiện tại
switch ($action) {
    case '':
        include_once 'view/contact.php';
        break;
}
?>