<?php include_once 'view/includes/headerAdmin.php' ?>

<div id="page-wrapper"><!-- #page-wrapper begin -->
    <div class="container-fluid"><!-- container-fluid begin -->

        <div class="row"><!-- row 1 begin -->
            <div class="col-lg-12"><!-- col-lg-12 begin -->
                <ol class="breadcrumb"><!-- breadcrumb begin -->
                    <li class="active"><!-- active begin -->

                        <i class="fa fa-dashboard"></i> Dashboard / Edit Category

                    </li><!-- active finish -->
                </ol><!-- breadcrumb finish -->
            </div><!-- col-lg-12 finish -->
        </div><!-- row 1 finish -->

        <div class="row"><!-- row 2 begin -->
            <div class="col-lg-12"><!-- col-lg-12 begin -->
                <div class="panel panel-default"><!-- panel panel-default begin -->
                    <div class="panel-heading"><!-- panel-heading begin -->
                        <h3 class="panel-title"><!-- panel-title begin -->

                            <i class="fa fa-tags"></i>  Edit Category

                        </h3><!-- panel-title finish -->
                    </div><!-- panel-heading finish -->

            <div class="panel-body"><!-- panel-body begin -->
                <?php foreach ($categories as $category){ ?>
                <form action="index.php?controller=category&action=update" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                    <input type="hidden" name="id" value="<?= $category['cat_id'] ?>">
                    <div class="form-group"><!-- form-group begin -->

                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                            Category Title

                        </label><!-- control-label col-md-3 finish -->

                        <div class="col-md-6"><!-- col-md-6 begin -->

                            <input value=" <?= $category['cat_title'] ?> " name="cat_title" type="text" class="form-control">

                        </div><!-- col-md-6 finish -->

                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->

                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                            Category Description

                        </label><!-- control-label col-md-3 finish -->

                        <div class="col-md-6"><!-- col-md-6 begin -->

                            <textarea type='text' name="cat_desc" class="form-control"><?= $category['cat_desc'] ?></textarea>

                        </div><!-- col-md-6 finish -->

                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->

                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->



                        </label><!-- control-label col-md-3 finish -->

                        <div class="col-md-6"><!-- col-md-6 begin -->

                            <button value="Update" name="update" type="submit" class="form-control btn btn-primary">Update</button>

                        </div><!-- col-md-6 finish -->

                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
                <?php } ?>
            </div><!-- panel-body finish -->

        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php include_once 'view/includes/footerAdmin.php' ?>