<?php include_once 'view/includes/headerAdmin.php' ?>

    <div id="page-wrapper"><!-- #page-wrapper begin -->
        <div class="container-fluid"><!-- container-fluid begin -->

            <div class="row"><!-- row 1 begin -->
                <div class="col-lg-12"><!-- col-lg-12 begin -->
                    <ol class="breadcrumb"><!-- breadcrumb begin -->
                        <li class="active"><!-- active begin -->

                            <i class="fa fa-dashboard"></i> Dashboard / View Products

                        </li><!-- active finish -->
                    </ol><!-- breadcrumb finish -->
                </div><!-- col-lg-12 finish -->
            </div><!-- row 1 finish -->

            <div class="row"><!-- row 2 begin -->
                <div class="col-lg-12"><!-- col-lg-12 begin -->
                    <div class="panel panel-default"><!-- panel panel-default begin -->
                        <div class="panel-heading"><!-- panel-heading begin -->
                            <h3 class="panel-title"><!-- panel-title begin -->

                                <i class="fa fa-tags"></i>  View Products

                            </h3><!-- panel-title finish -->
                        </div><!-- panel-heading finish -->

                        <div class="panel-body"><!-- panel-body begin -->
                            <div class="table-responsive"><!-- table-responsive begin -->
                                <div class="wrap">
                                    <form method="post" action="index.php?controller=product" class="search">
                                        <input type="text" name="search" value="<?= $array['search'] ?>" class="searchTerm">

                                        <button class="searchButton"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>

                                <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->


                                    <tr><!-- tr begin -->
                                        <th> Product ID: </th>
                                        <th> Product Title: </th>
                                        <th> Product Image: </th>
                                        <th> Product Price: </th>
                                        <th> Product Keywords: </th>
                                        <th> Product Date: </th>
                                        <th> Product Edit: </th>
                                        <th> Product Delete: </th>
                                    </tr><!-- tr finish -->

                                    <?php

                                    foreach ($array['products'] as $product){

                                    ?>
                                    <tr><!-- tr begin -->
                                        <td><?= $product['product_id'] ?> </td>
                                        <td> <?= $product['product_title'] ?> </td>
                                        <td> <img style="height: 100px" src="view/product_images/<?= $product['product_img1'] ?>"></td>
                                        <td> <?= $product['product_price'] ?> </td>
                                        <td><?= $product['product_keywords'] ?></td>
                                        <td> <?= $product['date'] ?> </td>
                                        <td>

                                            <a href="index.php?controller=product&action=edit&id=<?= $product['product_id'] ?>">

                                                <i class="fa fa-pencil"></i> Edit

                                            </a>

                                        </td>
                                        <td>

                                            <a href="index.php?controller=product&action=destroy&id=<?= $product['product_id'] ?>">

                                                <i class="fa fa-trash-o"></i> Delete

                                            </a>

                                        </td>
                                    </tr><!-- tr finish -->

                                    <?php
                                            }
                                    ?>

                                </table><!-- table table-striped table-bordered table-hover finish -->

                                <?php
                                for($i = 1; $i <= $array['page']; $i++){
                                    ?>
                                    <form class="pagination" method="post" action="index.php?controller=product">
                                        <input type="hidden" name="search" value="<?= $array['search'] ?>">
                                        <input type="hidden" name="page" value="<?= $i ?>">
                                        <button class="active">
                                            <?= $i ?>
                                        </button>
                                    </form>
                                <?php
                                }
                                ?>

                            </div><!-- table-responsive finish -->
                        </div><!-- panel-body finish -->

                    </div><!-- panel panel-default finish -->
                </div><!-- col-lg-12 finish -->
            </div><!-- row 2 finish -->
        </div><!-- container-fluid finish -->
    </div><!-- #page-wrapper finish -->
</div><!-- wrapper finish -->

<?php include_once 'view/includes/footerAdmin.php'?>