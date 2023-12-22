<?php
    function views(){
        include_once 'connect/openDB.php';
        $sql = "SELECT orders.oder_id, orders.dateBuy, orders.status, customers.customer_name, customers.customer_email, payment_method.method_name, SUM(order_detail.price * order_detail.quantity) as total, products.product_title, products.product_price FROM orders INNER JOIN customers ON orders.customer_id = customers.customer_id INNER JOIN payment_method ON orders.method_id = payment_method.method_id INNER JOIN order_detail ON orders.oder_id = order_detail.oder_id INNER JOIN products ON order_detail.product_id = products.product_id GROUP BY orders.oder_id";
        $views = mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';

        return $views;
    }

    function orderDetailAdmin(){
        $order_id = $_GET['id'];

        include_once 'connect/openDB.php';

        $orderDetail = "SELECT orders.oder_id, orders.dateBuy, orders.status, customers.*, payment_method.method_name, products.product_title, products.product_price FROM orders INNER JOIN customers ON orders.customer_id = customers.customer_id INNER JOIN payment_method ON orders.method_id = payment_method.method_id INNER JOIN order_detail ON orders.oder_id = order_detail.oder_id INNER JOIN products ON order_detail.product_id = products.product_id WHERE orders.oder_id = '$order_id'";

        $runs = mysqli_query($conn, $orderDetail);

        include_once 'connect/openDB.php';

        return $runs;
    }

    switch ($action){
        case '':
            $views = views();
            break;
        case 'orderDetailAdmin':
            $runs = orderDetailAdmin();
            break;
    }
?>
