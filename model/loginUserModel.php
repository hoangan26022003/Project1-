<?php
    function loginProcessUser(){
        $email = $_POST['customer_email'];
        $password = $_POST['customer_pass'];
        include_once 'connect/openDB.php';
        $sql = "SELECT *, COUNT(*) AS count_user FROM customers WHERE customer_email = '$email' AND customer_pass = '$password'";
        $users = mysqli_query($conn, $sql);
        foreach ($users as $user){
            if ($user['count_user'] == 0){
                return 0;
            } else {
                $_SESSION['customer_email'] = $user['customer_email'];
                $_SESSION['customer_id'] = $user['customer_id'];
                return 1;
            }
        }
        include_once 'connect/closeDB.php';
    }

    function logoutUser(){
        session_destroy();
    }

    switch ($action){
        case 'loginProcessUser':
            $test = loginProcessUser();
            break;
        case 'logoutUser':
            logoutUser();
            break;
    }
?>