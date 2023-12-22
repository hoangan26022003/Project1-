<?php
function loginProcess(){
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];
    include_once 'connect/openDB.php';
    $sql = "SELECT *, COUNT(*) AS count_admin FROM admins WHERE admin_email = '$admin_email' AND admin_password = '$admin_password'";
    $admins = mysqli_query($conn, $sql);
    foreach ($admins as $admin){
        if ($admin['count_admin'] == 0){
            return 0;
        } else {
            $_SESSION['admin_email'] = $admin['admin_email'];
            $_SESSION['admin_name'] = $admin['admin_name'];
            return 1;
        }
    }
    include_once 'connect/closeDB.php';
}

function logout(){
    session_destroy();
}

switch ($action){
    case 'loginProcess':
        $admin = loginProcess();
        break;
    case 'logout':
        logout();
        break;
}


?>