<?php include_once 'includes/header.php'?>

<div id="content"><!-- #content Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-12"><!-- col-md-12 Begin -->

            <ul class="breadcrumb"><!-- breadcrumb Begin -->
                <li>
                    <a href="index.php?controller=home">Home</a>
                </li>
                <li>
                    Shop
                </li>
            </ul><!-- breadcrumb Finish -->

        </div><!-- col-md-12 Finish -->

        <div class="col-md-3"><!-- col-md-3 Begin -->

            <div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
                <div class="panel-heading"><!-- panel-heading Begin -->
                    <h3 class="panel-title">Products Categories</h3>
                </div><!-- panel-heading Finish -->

                <div class="panel-body"><!-- panel-body Begin -->
                    <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->

                        <?php foreach ($array['$run_p_cat'] as $productCategories){ ?>
                            <li><a href="index.php?controller=shop&action=display&id=<?=$productCategories['p_cat_id'] ?>"><?=$productCategories['p_cat_title'] ?></a></li>

                        <?php } ?>

                    </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
                </div><!-- panel-body Finish -->

            </div><!-- panel panel-default sidebar-menu Finish -->


            <div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
                <div class="panel-heading"><!-- panel-heading Begin -->
                    <h3 class="panel-title">Categories</h3>
                </div><!-- panel-heading Finish -->

                <div class="panel-body"><!-- panel-body Begin -->
                    <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->

                        <?php foreach ($array['$run_cat'] as $run_cat){ ?>
                        <li><a href="index.php?controller=shop&action=new&id=<?=$run_cat['cat_id'] ?>"><?=$run_cat['cat_title'] ?></a></li>

                        <?php } ?>

                    </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
                </div><!-- panel-body Finish -->

            </div><!-- panel panel-default sidebar-menu Finish -->

        </div><!-- col-md-3 Finish -->

        <div class="col-md-9"><!-- col-md-9 Begin -->
            <div class="box"><!-- box Begin -->
                <h1>Shop</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis veritatis perferendis, quaerat!
                </p>
            </div><!-- box Finish -->

            <div class="row"><!-- row Begin -->

                <?php foreach ($array['products'] as $product){ ?>

                <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->

                    <div class="product"><!-- product Begin -->

                        <a href="index.php?controller=detail&id=<?= $product['product_id'] ?>">

                            <img class="img-responsive" src="view/product_images/<?= $product['product_img1'] ?>" alt="Product 1">

                        </a>

                        <div class="text"><!-- text Begin -->

                            <h3>
                                <a href="index.php?controller=detail&id=<?= $product['product_id'] ?>">
                                    <?= $product['product_title'] ?>
                                </a>
                            </h3>

                            <p class="price"><?= number_format($product['product_price'], 0, ',', '.') ?></p>

                            <p class="button">

                                <a href="index.php?controller=detail&id=<?= $product['product_id'] ?>" class="btn btn-default">View Details</a>

                                <a href="index.php?controller=cart&action=add_to_cart&product_id=<?= $product['product_id'] ?>" class="btn btn-primary">

                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>

                                </a>

                            </p>

                        </div><!-- text Finish -->

                    </div><!-- product Finish -->


                </div><!-- col-md-4 col-sm-6 center-responsive Finish -->

                <?php } ?>

            </div><!-- row Finish -->

            <center>
                <?php
                for($i = 1; $i <= $array['page']; $i++){
                    ?>
                    <form class="pagination" method="post" action="index.php?controller=shop">
                        <input type="hidden" name="search" value="<?= $array['search'] ?>">
                        <input type="hidden" name="page" value="<?= $i ?>">
                        <button class="active">
                            <?= $i ?>
                        </button>
                    </form>
                    <?php
                }
                ?>
            </center>

        </div><!-- col-md-9 Finish -->

    </div><!-- container Finish -->
</div><!-- #content Finish -->

<?php include_once 'includes/footer.php'?>


</body>
</html>