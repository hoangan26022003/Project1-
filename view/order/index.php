<?php include_once 'view/includes/headerAdmin.php' ?>

<div id="page-wrapper"><!-- #page-wrapper begin -->
    <div class="container-fluid"><!-- container-fluid begin -->

        <div class="row"><!-- row 1 begin -->
            <div class="col-lg-12"><!-- col-lg-12 begin -->
                <ol class="breadcrumb"><!-- breadcrumb begin -->
                    <li class="active"><!-- active begin -->

                        <i class="fa fa-dashboard"></i> Dashboard / View Orders

                    </li><!-- active finish -->
                </ol><!-- breadcrumb finish -->
            </div><!-- col-lg-12 finish -->
        </div><!-- row 1 finish -->

        <div class="row"><!-- row 2 begin -->
            <div class="col-lg-12"><!-- col-lg-12 begin -->
                <div class="panel panel-default"><!-- panel panel-default begin -->
                    <div class="panel-heading"><!-- panel-heading begin -->
                        <h3 class="panel-title"><!-- panel-title begin -->

                            <i class="fa fa-tags"></i>  View Orders

                        </h3><!-- panel-title finish -->
                    </div><!-- panel-heading finish -->

            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->

                        <thead><!-- thead begin -->
                        <tr><!-- tr begin -->
                            <th> Customer Name: </th>
                            <th> Customer Email: </th>
                            <th> Payment Method </th>
                            <th> Order Date: </th>
                            <th> Total Money</th>
                            <th> Status: </th>
                            <th>Order Detail</th>
                            <th>Processed</th>
                            <th>Shipping</th>
                            <th>Shipped</th>
                        </tr><!-- tr finish -->
                        </thead><!-- thead finish -->

                        <tbody><!-- tbody begin -->



                        <?php foreach ($views as $view){ ?>
                            <tr><!-- tr begin -->
                                <td><?= $view['customer_name'] ?></td>
                                <td><?= $view['customer_email'] ?></td>
                                <td><?= $view['method_name'] ?></td>
                                <td><?= $view['dateBuy'] ?></td>
                                <td><?= number_format($view['total'], 0, ',', '.') ?></td>
                                <td>
                                    <?php
                                        if ($view['status'] = 1){
                                            echo 'Đang xử lý';
                                        } elseif ($view['status'] = 2) {
                                            echo 'Đã xử lý';
                                        } elseif ($view['status'] = 3) {
                                            echo 'Đang giao hàng';
                                        } elseif ($view['status'] = 4) {
                                            echo 'Đã giao hàng';
                                        } elseif ($view['status'] = 5) {
                                            echo 'Hủy đơn hàng';
                                        } elseif ($view['status'] = 6) {
                                            echo 'Hoàn thành';
                                        }
                                    ?>
                                </td>
                                <td>

                                    <a href="index.php?controller=order&action=orderDetailAdmin&id=<?= $view['oder_id'] ?>">

                                        <i style="font-size:15px" class="fa">&#xf05a;</i> Detail

                                    </a>

                                </td>
                                <td>

                                    <a href="">

                                        &#128525; Processed

                                    </a>

                                </td>
                                <td>

                                    <a href="">

                                        <i class='fas fa-shipping-fast'></i>  Shipping

                                    </a>

                                </td>
                                <td>

                                    <a href="">

                                        <img src="view/images/pickup.png" style="height: 18px; width: 20px" > Shipped

                                    </a>

                                </td>
                            </tr><!-- tr finish -->

                            <?php } ?>

                        </tbody><!-- tbody finish -->


                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->

        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php include_once 'view/includes/footerAdmin.php' ?>