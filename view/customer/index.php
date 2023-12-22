<?php include_once 'view/includes/headerAdmin.php' ?>

<div id="page-wrapper"><!-- #page-wrapper begin -->
    <div class="container-fluid"><!-- container-fluid begin -->

        <div class="row"><!-- row 1 begin -->
            <div class="col-lg-12"><!-- col-lg-12 begin -->
                <ol class="breadcrumb"><!-- breadcrumb begin -->
                    <li class="active"><!-- active begin -->

                        <i class="fa fa-dashboard"></i> Dashboard / View Costumers

                    </li><!-- active finish -->
                </ol><!-- breadcrumb finish -->
            </div><!-- col-lg-12 finish -->
        </div><!-- row 1 finish -->

        <div class="row"><!-- row 2 begin -->
            <div class="col-lg-12"><!-- col-lg-12 begin -->
                <div class="panel panel-default"><!-- panel panel-default begin -->
                    <div class="panel-heading"><!-- panel-heading begin -->
                        <h3 class="panel-title"><!-- panel-title begin -->

                            <i class="fa fa-tags"></i>  View Costumers

                        </h3><!-- panel-title finish -->
                    </div><!-- panel-heading finish -->

            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->


                        <tr><!-- tr begin -->
                            <th> No: </th>
                            <th> Name: </th>
                            <th> Image: </th>
                            <th> E-Mail: </th>
                            <th> Country: </th>
                            <th> City: </th>
                            <th> Address: </th>
                            <th> Contact: </th>
                            <th> Delete: </th>
                        </tr><!-- tr finish -->

                        <?php foreach ($customers as $customer) { ?>
                            <tr><!-- tr begin -->
                                <td><?= $customer['customer_id'] ?></td>
                                <td><?= $customer['customer_name'] ?></td>
                                <td> <img src="view/customer_images/<?= $customer['customer_image'] ?>" width="60" height="60"></td>
                                <td><?= $customer['customer_email'] ?>  </td>
                                <td><?= $customer['customer_country'] ?> </td>
                                <td><?= $customer['customer_city'] ?> </td>
                                <td><?= $customer['customer_address'] ?>  </td>
                                <td><?= $customer['customer_contact'] ?></td>
                                <td>

                                    <a href="index.php?controller=payment&action=edit&id=<?= $customer['customer_id'] ?>">

                                        <i class="fa fa-trash-o"></i> Delete

                                    </a>

                                </td>
                            </tr><!-- tr finish -->

                            <?php } ?>

                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->

        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php include_once 'view/includes/footerAdmin.php' ?>