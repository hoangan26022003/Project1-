<?php include_once 'view/includes/headerAdmin.php' ?>

    <div id="page-wrapper"><!-- #page-wrapper begin -->
        <div class="container-fluid"><!-- container-fluid begin -->

            <div class="row"><!-- row 1 begin -->
                <div class="col-lg-12"><!-- col-lg-12 begin -->
                    <ol class="breadcrumb"><!-- breadcrumb begin -->
                        <li class="active"><!-- active begin -->

                            <i class="fa fa-dashboard"></i> Dashboard / Insert Payment Method

                        </li><!-- active finish -->
                    </ol><!-- breadcrumb finish -->
                </div><!-- col-lg-12 finish -->
            </div><!-- row 1 finish -->

            <div class="row"><!-- row 2 begin -->
                <div class="col-lg-12"><!-- col-lg-12 begin -->
                    <div class="panel panel-default"><!-- panel panel-default begin -->
                        <div class="panel-heading"><!-- panel-heading begin -->
                            <h3 class="panel-title"><!-- panel-title begin -->

                                <i class="fa fa-tags"></i>  Insert Payment Method

                            </h3><!-- panel-title finish -->
                        </div><!-- panel-heading finish -->

                        <div class="panel-body"><!-- panel-body begin -->
                            <form action="index.php?controller=payment&action=store" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                                <div class="form-group"><!-- form-group begin -->

                                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                                        Payment Method Name

                                    </label><!-- control-label col-md-3 finish -->

                                    <div class="col-md-6"><!-- col-md-6 begin -->

                                        <input name="method_name" type="text" class="form-control">

                                    </div><!-- col-md-6 finish -->

                                </div><!-- form-group finish -->
                                <div class="form-group"><!-- form-group begin -->

                                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin -->

                                    </label><!-- control-label col-md-3 finish -->

                                    <div class="col-md-6"><!-- col-md-6 begin -->

                                        <button value="Submit" name="submit" type="submit" class="form-control btn btn-primary">Insert Payment Method</button>

                                    </div><!-- col-md-6 finish -->

                                </div><!-- form-group finish -->
                            </form><!-- form-horizontal finish -->
                        </div><!-- panel-body finish -->

                    </div><!-- panel panel-default finish -->
                </div><!-- col-lg-12 finish -->
            </div><!-- row 2 finish -->

<?php include_once 'view/includes/footerAdmin.php' ?>