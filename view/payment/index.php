<?php include_once 'view/includes/headerAdmin.php' ?>

    <div id="page-wrapper"><!-- #page-wrapper begin -->
    <div class="container-fluid"><!-- container-fluid begin -->

    <div class="row"><!-- row 1 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <ol class="breadcrumb"><!-- breadcrumb begin -->
                <li class="active"><!-- active begin -->

                    <i class="fa fa-dashboard"></i> Dashboard / View Payments Method

                </li><!-- active finish -->
            </ol><!-- breadcrumb finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 1 finish -->

    <div class="row"><!-- row 2 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <div class="panel panel-default"><!-- panel panel-default begin -->
                <div class="panel-heading"><!-- panel-heading begin -->
                    <h3 class="panel-title"><!-- panel-title begin -->

                        <i class="fa fa-tags"></i>  View Payments Method

                    </h3><!-- panel-title finish -->
                </div><!-- panel-heading finish -->

            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->


                        <tr><!-- tr begin -->
                            <th> No: </th>
                            <th> Payment Method Name: </th>
                            <th> Edit </th>
                            <th> Delete </th>
                        </tr><!-- tr finish -->


                        <?php foreach ($payments as $payment){ ?>
                            <tr><!-- tr begin -->
                                <td><?= $payment['method_id'] ?></td>
                                <td><?= $payment['method_name'] ?> </td>
                                <td>

                                    <a href="index.php?controller=payment&action=edit&id=<?= $payment['method_id'] ?>">

                                        <i class="fa fa-pencil"></i> Edit

                                    </a>

                                </td>
                                <td>
                                    <a href="index.php?controller=payment&action=destroy&id=<?= $payment['method_id'] ?>">
                                        <i class="fa fa-trash"></i> Delete
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

<?php include_once 'view/includes/footerAdmin.php'?>