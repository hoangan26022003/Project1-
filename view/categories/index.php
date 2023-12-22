<?php include_once 'view/includes/headerAdmin.php' ?>

    <div id="page-wrapper"><!-- #page-wrapper begin -->
    <div class="container-fluid"><!-- container-fluid begin -->

    <div class="row"><!-- row 1 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <ol class="breadcrumb"><!-- breadcrumb begin -->
                <li class="active"><!-- active begin -->

                    <i class="fa fa-dashboard"></i> Dashboard / View Categories

                </li><!-- active finish -->
            </ol><!-- breadcrumb finish -->
        </div><!-- col-lg-12 finish -->
    </div><!-- row 1 finish -->

    <div class="row"><!-- row 2 begin -->
        <div class="col-lg-12"><!-- col-lg-12 begin -->
            <div class="panel panel-default"><!-- panel panel-default begin -->
                <div class="panel-heading"><!-- panel-heading begin -->
                    <h3 class="panel-title"><!-- panel-title begin -->

                        <i class="fa fa-tags"></i>  View Categories

                    </h3><!-- panel-title finish -->
                </div><!-- panel-heading finish -->

            <div class="panel-body"><!-- panel-body begin -->
                <form class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->

                        <tr><!-- tr begin -->
                            <th> Category ID </th>
                            <th> Category Title </th>
                            <th> Category Desc </th>
                            <th> Edit Category </th>
                            <th> Delete Category </th>
                        </tr><!-- tr finish -->

                        <?php foreach ($categories as $category){ ?>
                            <tr><!-- tr begin -->
                                <td><?= $category['cat_id'] ?></td>
                                <td><?= $category['cat_title'] ?></td>

                                <td><?= $category['cat_desc'] ?> </td>
                                <td>
                                    <a href="index.php?controller=category&action=edit&id=<?= $category['cat_id'] ?>">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?controller=category&action=destroy&id=<?= $category['cat_id'] ?>">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr><!-- tr finish -->
                        <?php } ?>

                    </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                </form><!-- table-responsive finish -->
            </div><!-- panel-body finish -->

        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php include_once 'view/includes/footerAdmin.php' ?>