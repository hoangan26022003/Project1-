<?php
    function indexOrder(){

        include_once 'connect/openDB.php';

        $customer_session = $_SESSION['customer_email'];

        $get_customer = "select * from customers where customer_email='$customer_session'";

        $run_customer = mysqli_query($conn,$get_customer);

        $row_customer = mysqli_fetch_array($run_customer);

        $customer_id = $row_customer['customer_id'];


        $get_orders = "SELECT orders.oder_id, orders.dateBuy, orders.status, customers.customer_name, customers.customer_email, payment_method.method_name, SUM(order_detail.price * order_detail.quantity) as total, products.product_title, products.product_price FROM orders INNER JOIN customers ON orders.customer_id = customers.customer_id INNER JOIN payment_method ON orders.method_id = payment_method.method_id INNER JOIN order_detail ON orders.oder_id = order_detail.oder_id INNER JOIN products ON order_detail.product_id = products.product_id WHERE customers.customer_id = '$customer_id' GROUP BY orders.oder_id";

        $orders = mysqli_query($conn,$get_orders);

        include_once 'connect/closeDB.php';

        return $orders;
    }

    function viewOrderDetail(){
        $order_id = $_GET['order_id'];

        include_once 'connect/openDB.php';

        $orderDetail_query = "SELECT orders.oder_id, orders.dateBuy, orders.status, customers.*, payment_method.method_name, products.product_title, products.product_price FROM orders INNER JOIN customers ON orders.customer_id = customers.customer_id INNER JOIN payment_method ON orders.method_id = payment_method.method_id INNER JOIN order_detail ON orders.oder_id = order_detail.oder_id INNER JOIN products ON order_detail.product_id = products.product_id WHERE orders.oder_id = '$order_id'";

        $run_orderDetail = mysqli_query($conn, $orderDetail_query);

        include_once 'connect/openDB.php';

        return $run_orderDetail;
    }

    switch ($action){
        case '':
            $orders = indexOrder();
            break;
        case 'viewOrderDetail':
            $run_orderDetail = viewOrderDetail();
            break;
    }


?>