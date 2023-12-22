<?php include_once 'view/includes/headerAdmin.php' ?>

<div id="page-wrapper"><!-- #page-wrapper begin -->
    <div class="container-fluid"><!-- container-fluid begin -->

        <div class="row"><!-- row Begin -->

            <div class="col-lg-12"><!-- col-lg-12 Begin -->

                <ol class="breadcrumb"><!-- breadcrumb Begin -->

                    <li class="active"><!-- breadcrumb Begin -->

                        <i class="fa fa-dashboard"></i> Dashboard / Insert Slide

                    </li><!-- breadcrumb Finish -->

                </ol><!-- breadcrumb Finish -->

            </div><!-- col-lg-12 Finish -->
        </div><!-- row Finish -->

        <div class="row"><!-- row Begin -->

            <div class="col-lg-12"><!-- col-lg-12 Begin -->

                <div class="panel panel-default"><!-- panel panel-default Begin -->

                    <div class="panel-heading"><!-- panel panel-default Begin -->

                        <h3 class="panel-title"><!-- panel-title Begin -->

                            <i class="fa fa-money fa-fw"></i> Insert Slide

                        </h3><!-- panel-title Finish -->

                    </div> <!-- canel panel-default Finish -->

            <div class="panel-body"><!-- panel-body begin -->
                <form action="index.php?controller=slide&action=store" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->

                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                            Slide Name

                        </label><!-- control-label col-md-3 finish -->

                        <div class="col-md-6"><!-- col-md-6 begin -->

                            <input name="slide_name" type="text" class="form-control">

                        </div><!-- col-md-6 finish -->

                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->

                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                            Slide Image

                        </label><!-- control-label col-md-3 finish -->

                        <div class="col-md-6"><!-- col-md-6 begin -->

                            <input type="file" name="slide_image" class="form-control">

                        </div><!-- col-md-6 finish -->

                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->

                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish -->

                        <div class="col-md-6"><!-- col-md-6 begin -->

                            <button type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control">Insert Slide</button>

                        </div><!-- col-md-6 finish -->

                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->

        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php include_once 'view/includes/footerAdmin.php' ?>