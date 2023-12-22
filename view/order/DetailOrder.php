<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="view/styles/details.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <table>
        <thead>
        <tr>
            <th>Order ID:</th>
            <th>Customer Name:</th>
            <th>Customer Email:</th>
            <th rowspan="5">Product Title:</th>
            <th></th>
            <th></th>
            <th></th>
            <th>Product Price:</th>
            <th>Customer Address:</th>
            <th>Customer City:</th>
            <th>Customer Country:</th>
            <th>Customer Contact:</th>
            <th>Method Name:</th>
            <th>Date Buy:</th>
            <th>Status:</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($runs as $run){ ?>
        <tr>
            <td><?= $run['oder_id'] ?></td>
            <td><?= $run['customer_name'] ?></td>
            <td><?= $run['customer_email'] ?></td>
            <td colspan="4"><?= $run['product_title'] ?></td>
            <td><?= $run['product_price'] ?></td>
            <td><?= $run['customer_address'] ?></td>
            <td><?= $run['customer_city'] ?></td>
            <td><?= $run['customer_country'] ?></td>
            <td><?= $run['customer_contact'] ?></td>
            <td><?= $run['method_name'] ?></td>
            <td><?= $run['dateBuy'] ?></td>
            <td>
                <?php
                if ($run['status'] = 1){
                    echo 'Đang xử lý';
                } elseif ($run['status'] = 2) {
                    echo 'Đã xử lý';
                } elseif ($run['status'] = 3) {
                    echo 'Đang giao hàng';
                } elseif ($run['status'] = 4) {
                    echo 'Đã giao hàng';
                } elseif($run['status'] = 5) {
                    echo 'Huỷ đơn hàng';
                } elseif($run['status'] = 6) {
                    echo 'Hoàn thành';
                }
                ?>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>