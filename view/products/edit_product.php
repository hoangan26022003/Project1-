<?php include_once 'view/includes/headerAdmin.php' ?>

<div class="row"><!-- row Begin -->

    <div class="col-lg-12"><!-- col-lg-12 Begin -->

        <ol class="breadcrumb"><!-- breadcrumb Begin -->

            <li class="active"><!-- active Begin -->

                <i class="fa fa-dashboard"></i> Dashboard / Edit Products

            </li><!-- active Finish -->

        </ol><!-- breadcrumb Finish -->

    </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<div class="row"><!-- row Begin -->

    <div class="col-lg-12"><!-- col-lg-12 Begin -->

        <div class="panel panel-default"><!-- panel panel-default Begin -->

            <div class="panel-heading"><!-- panel-heading Begin -->

                <h3 class="panel-title"><!-- panel-title Begin -->

                    <i class="fa fa-money fa-fw"></i> Insert Product

                </h3><!-- panel-title Finish -->

            </div> <!-- panel-heading Finish -->

            <div class="panel-body"><!-- panel-body Begin -->
                <?php

                        foreach ($array['products'] as $product){

                ?>

                <form method="post" class="form-horizontal" enctype="multipart/form-data" action="index.php?controller=product&action=update"><!-- form-horizontal Begin -->
                    <input type="hidden" name="id" value="<?= $product['product_id'] ?>">
                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Product Title </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <input name="product_title" type="text" class="form-control" required value="<?= $product['product_title'] ?>">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Product Category </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <select name="p_cat_id" class="form-control"><!-- form-control Begin -->

                                <option value=""> --CHOOSE-- </option>

                                <?php

                                    foreach ($array['product_categories'] as $product_category){

                                ?>
                                        <option value="<?= $product_category['p_cat_id'] ?>"
                                            <?php
                                            if($product_category['p_cat_id'] == $product['p_cat_id']){
                                                echo 'selected';
                                            }
                                            ?>
                                        >
                                            <?= $product_category['p_cat_title'] ?>
                                <?php
                                    }
                                ?>

                            </select><!-- form-control Finish -->

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Category </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <select name="cat_id" class="form-control"><!-- form-control Begin -->

                                <option value=""> --CHOOSE-- </option>

                                <?php

                                foreach ($array['categories'] as $category){

                                ?>
                                    <option value="<?= $category['cat_id'] ?>"
                                        <?php
                                        if($category['cat_id'] == $product['cat_id']){
                                            echo 'selected';
                                        }
                                        ?>
                                    >
                                        <?= $category['cat_title'] ?>
                                    </option>
                                    <?php
                                    }
                                    ?>

                            </select><!-- form-control Finish -->

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Product Image 1 </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <input name="product_img1" type="file" class="form-control" required value="<?= $product['product_img1'] ?>">

                            <br>

                            <img width="70" height="70" src="view/product_images/<?= $product['product_img1'] ?>" alt="">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Product Image 2 </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <input name="product_img2" type="file" class="form-control" value="<?= $product['product_img2'] ?>">

                            <br>

                            <img width="70" height="70" src="view/product_images/<?= $product['product_img2'] ?>" alt="">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Product Image 3 </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <input name="product_img3" type="file" class="form-control form-height-custom" value="<?= $product['product_img3'] ?>">

                            <br>

                            <img width="70" height="70" src="view/product_images/<?= $product['product_img3'] ?>" alt="">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Date </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <input name="date" type="date" class="form-control" required value="<?= $product['date'] ?>">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Product Price </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <input name="product_price" type="text" class="form-control" required value="<?= $product['product_price'] ?>">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Product Keywords </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <input name="product_keywords" type="text" class="form-control" required value="<?= $product['product_keywords'] ?>">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"> Product Desc </label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <textarea name="product_desc" cols="19" rows="6" class="form-control"> <?= $product['product_desc'] ?></textarea>

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6"><!-- col-md-6 Begin -->

                            <input name="update" value="Update Product" type="submit" class="btn btn-primary form-control">

                        </div><!-- col-md-6 Finish -->

                    </div><!-- form-group Finish -->

                </form><!-- form-horizontal Finish -->

                <?php
                        }
                ?>

            </div><!-- panel-body Finish -->

        </div><!-- canel panel-default Finish -->

    </div><!-- col-lg-12 Finish -->

</div><!-- row Finish -->

<?php include_once 'view/includes/footerAdmin.php'; ?>