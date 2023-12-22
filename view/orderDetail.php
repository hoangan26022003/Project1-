<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="view/styles/styleSDrop.css" rel="stylesheet">
    <link rel="stylesheet" href="view/styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="view/font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="view/styles/style.css">
    <title>Document</title>
</head>
<body>


    <h1>My Order Detail</h1>
    <form action="" method="post">
        <table class="table">
            <tr>
                <th class="table__heading">Order ID:</th>
                <th class="table__heading">Customer Name:</th>
                <th class="table__heading">Customer Email:</th>
                <th class="table__heading">Product Title:</th>
                <th class="table__heading">Product Price:</th>
                <th class="table__heading">Customer Address:</th>
                <th class="table__heading">Customer City:</th>
                <th class="table__heading">Customer Country:</th>
                <th class="table__heading">Customer Contact:</th>
                <th class="table__heading">Method Name:</th>
                <th class="table__heading">Date Buy:</th>
                <th class="table__heading">Status:</th>
            </tr>

            <?php
            foreach ($run_orderDetail as $item){ ?>
            <input type="hidden" name="order_id" value="<?= $item['oder_id'] ?>">
            <tr>
                <td class="table__content" data-heading="Order ID"><?= $item['oder_id'] ?></td>
                <td class="table__content" data-heading="Customer Name"><?= $item['customer_name'] ?></td>
                <td class="table__content" data-heading="Customer Email"><?= $item['customer_email'] ?></td>
                <td class="table__content" data-heading="Product Title"><?= $item['product_title'] ?></td>
                <td class="table__content" data-heading="Product Price"><?= $item['product_price'] ?></td>
                <td class="table__content" data-heading="Customer Address"><?= $item['customer_address'] ?></td>
                <td class="table__content" data-heading="Customer City"><?= $item['customer_city'] ?></td>
                <td class="table__content" data-heading="Customer Country"><?= $item['customer_country'] ?></td>
                <td class="table__content" data-heading="Customer Contact"><?= $item['customer_contact'] ?></td>
                <td class="table__content" data-heading="Teams"><?= $item['method_name'] ?></td>
                <td class="table__content" data-heading="Career"><?= $item['dateBuy'] ?></td>
                <td class="table__content" data-heading="Career">
                    <?php
                    if ($item['status'] = 1){
                        echo 'Đang xử lý';
                    } elseif ($item['status'] = 2) {
                        echo 'Đã xử lý';
                    } elseif ($item['status'] = 3) {
                        echo 'Đang giao hàng';
                    } elseif ($item['status'] = 4) {
                        echo 'Đã giao hàng';
                    } elseif($item['status'] = 5) {
                        echo 'Huỷ đơn hàng';
                    } elseif($item['status'] = 6) {
                        echo 'Hoàn thành';
                    }
                    ?>
                </td>
            </tr>
            <?php } ?>
    </table>
    </form>

<h4><a href="index.php?controller=myOrder">Come Back My Order</a></h4>

    <script src="view/js/drop.js"></script>
</body>
</html>