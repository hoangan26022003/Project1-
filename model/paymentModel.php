<?php

    function indexPayment(){
        include_once 'connect/openDB.php';
        $sql = "SELECT * FROM payment_method";
        $payments = mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
        return $payments;
    }

    function storePayment(){
        $method_name = $_POST['method_name'];
        include_once 'connect/openDB.php';
        $sql = "INSERT INTO payment_method(method_name) VALUES ('$method_name')";
        mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
    }

    function editPayment(){
        $id = $_GET['id'];
        include_once 'connect/openDB.php';
        $sql = "SELECT * FROM  payment_method WHERE method_id = '$id'";
        $payments = mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
        return $payments;
    }

    function updatePayment(){
        $id = $_POST['id'];
        $cat_title = $_POST['method_name'];
        include_once 'connect/openDB.php';
        $sql = "UPDATE payment_method SET method_name = '$cat_title' WHERE method_id = '$id'";
        $payments = mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
    }

    function destroyPayment(){
        //        Lấy id
        $id = $_GET['id'];
        include_once 'connect/openDB.php';
        $sql = "DELETE FROM payment_method WHERE method_id = '$id'";
        mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
    }

    switch ($action){
        case '':
            $payments = indexPayment();
            break;
        case 'store':
            storePayment();
            break;
        case 'edit':
            $payments = editPayment();
            break;
        case 'update':
            updatePayment();
            break;
        case 'destroy':
            destroyPayment();
            break;
    }
?>
