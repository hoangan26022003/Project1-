<?php

function indexCustomers(){
    include_once 'connect/openDB.php';
    $sql = "SELECT * FROM customers";
    $customers = mysqli_query($conn, $sql);
    include_once 'connect/closeDB.php';
    return $customers;
}

function destroyCustomers(){
    //        Lấy id
    $id = $_GET['id'];
    include_once 'connect/openDB.php';
    $sql = "DELETE FROM customers WHERE customer_id = '$id'";
    mysqli_query($conn, $sql);
    include_once 'connect/closeDB.php';
}

switch ($action){
    case '':
        $customers = indexCustomers();
        break;
    case 'destroy':
        destroyCustomers();
        break;
}
?>
