<?php include_once 'view/includes/headerAdmin.php' ?>

<div id="page-wrapper"><!-- #page-wrapper begin -->
    <div class="container-fluid"><!-- container-fluid begin -->

        <div class="row"><!-- row Begin -->

            <div class="col-lg-12"><!-- col-lg-12 Begin -->

                <ol class="breadcrumb"><!-- breadcrumb Begin -->

                    <li class="active"><!-- breadcrumb Begin -->

                        <i class="fa fa-dashboard"></i> Dashboard / View Slides

                    </li><!-- breadcrumb Finish -->

                </ol><!-- breadcrumb Finish -->

            </div><!-- col-lg-12 Finish -->
        </div><!-- row Finish -->

        <div class="row"><!-- row Begin -->

            <div class="col-lg-12"><!-- col-lg-12 Begin -->

                <div class="panel panel-default"><!-- panel panel-default Begin -->

                    <div class="panel-heading"><!-- panel panel-default Begin -->

                        <h3 class="panel-title"><!-- panel-title Begin -->

                            <i class="fa fa-money fa-fw"></i> View Slides

                        </h3><!-- panel-title Finish -->

                    </div> <!-- canel panel-default Finish -->

                    <div class="col-lg-12"><!-- col-lg-3 col-md-3 begin -->
                        <?php foreach ($slider as $slide) {?>
                        <form class="panel panel-primary col-lg-3" style="margin: 25px"><!-- panel panel-primary begin -->
                            <div class="panel-heading"><!-- panel-heading begin -->
                                <h3 class="panel-title" align="center"><!-- panel-title begin -->

                                    <?= $slide['slide_name'] ?>

                                </h3><!-- panel-title finish -->
                            </div><!-- panel-heading finish -->

                            <div class="panel-body"><!-- panel-body begin -->

                                <img src="view/slides_images/<?= $slide['slide_image'] ?>" alt="<?= $slide['slide_name'] ?>" class="img-responsive">

                            </div><!-- panel-body finish -->

                            <div class="panel-footer"><!-- panel-footer begin -->
                                <center><!-- center begin -->

                                    <a href="index.php?controller=slide&action=destroy&id=<?= $slide['slide_id'] ?>" class="pull-right"><!-- pull-right begin -->

                                        <i class="fa fa-trash"></i> Delete

                                    </a><!-- pull-right finish -->

                                    <a href="index.php?controller=slide&action=edit&id=<?= $slide['slide_id'] ?>" class="pull-left"><!-- pull-left begin -->

                                        <i class="fa fa-pencil"></i> Edit

                                    </a><!-- pull-left finish -->

                                    <div class="clearfix"></div>

                                </center><!-- center finish -->
                            </div><!-- panel-footer finish -->

                        </form><!-- panel panel-primary finish -->
                        <?php } ?>
                    </div><!-- col-lg-3 col-md-3 finish -->


            </div><!-- panel-body finish -->

        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php include_once 'view/includes/footerAdmin.php' ?>