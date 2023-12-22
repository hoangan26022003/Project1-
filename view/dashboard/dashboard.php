<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store Admin Area</title>
    <link rel="stylesheet" href="../styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="../font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/style1.css">
</head>
<body>

<div id="wrapper"><!-- #wrapper begin -->

    <nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top begin -->
        <div class="navbar-header"><!-- navbar-header begin -->

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><!-- navbar-toggle begin -->

                <span class="sr-only">Toggle Navigation</span>

                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button><!-- navbar-toggle finish -->

            <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>

        </div><!-- navbar-header finish -->

        <ul class="nav navbar-right top-nav"><!-- nav navbar-right top-nav begin -->

            <li class="dropdown"><!-- dropdown begin -->

                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle begin -->

                    <i class="fa fa-user"></i> Mrghie <b class="caret"></b>

                </a><!-- dropdown-toggle finish -->

                <ul class="dropdown-menu"><!-- dropdown-menu begin -->
                    <li><!-- li begin -->
                        <a href="index.php?user_profile"><!-- a href begin -->

                            <i class="fa fa-fw fa-user"></i> Profile

                        </a><!-- a href finish -->
                    </li><!-- li finish -->

                    <li><!-- li begin -->
                        <a href="index.php?view_products"><!-- a href begin -->

                            <i class="fa fa-fw fa-envelope"></i> Products

                            <span class="badge">7</span>

                        </a><!-- a href finish -->
                    </li><!-- li finish -->

                    <li><!-- li begin -->
                        <a href="index.php?view_customers"><!-- a href begin -->

                            <i class="fa fa-fw fa-users"></i> Customeres

                            <span class="badge">11</span>

                        </a><!-- a href finish -->
                    </li><!-- li finish -->

                    <li><!-- li begin -->
                        <a href="index.php?view_cats"><!-- a href begin -->

                            <i class="fa fa-fw fa-gear"></i> Product Categories

                            <span class="badge">4</span>

                        </a><!-- a href finish -->
                    </li><!-- li finish -->

                    <li class="divider"></li>

                    <li><!-- li begin -->
                        <a href="logout.php"><!-- a href begin -->

                            <i class="fa fa-fw fa-power-off"></i> Log Out

                        </a><!-- a href finish -->
                    </li><!-- li finish -->

                </ul><!-- dropdown-menu finish -->

            </li><!-- dropdown finish -->

        </ul><!-- nav navbar-right top-nav finish -->

        <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse begin -->
            <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav begin -->
                <li><!-- li begin -->
                    <a href="home.php?dashboard"><!-- a href begin -->

                        <i class="fa fa-fw fa-dashboard"></i> Dashboard

                    </a><!-- a href finish -->

                </li><!-- li finish -->

                <li><!-- li begin -->
                    <a href="#" data-toggle="collapse" data-target="#products"><!-- a href begin -->

                        <i class="fa fa-fw fa-tag"></i> Products
                        <i class="fa fa-fw fa-caret-down"></i>

                    </a><!-- a href finish -->

                    <ul id="products" class="collapse"><!-- collapse begin -->
                        <li><!-- li begin -->
                            <a href="index.php?controller=product&action=create"> Insert Product </a>
                        </li><!-- li finish -->
                        <li><!-- li begin -->
                            <a href="index.php?controller=product"> View Products </a>
                        </li><!-- li finish -->
                    </ul><!-- collapse finish -->

                </li><!-- li finish -->

                <li><!-- li begin -->
                    <a href="#" data-toggle="collapse" data-target="#p_cat"><!-- a href begin -->

                        <i class="fa fa-fw fa-edit"></i> Products Categories
                        <i class="fa fa-fw fa-caret-down"></i>

                    </a><!-- a href finish -->

                    <ul id="p_cat" class="collapse"><!-- collapse begin -->
                        <li><!-- li begin -->
                            <a href="index.php?insert_p_cat"> Insert Product Category </a>
                        </li><!-- li finish -->
                        <li><!-- li begin -->
                            <a href="index.php?view_p_cats"> View Products Categories </a>
                        </li><!-- li finish -->
                    </ul><!-- collapse finish -->

                </li><!-- li finish -->

                <li><!-- li begin -->
                    <a href="#" data-toggle="collapse" data-target="#cat"><!-- a href begin -->

                        <i class="fa fa-fw fa-book"></i> Categories
                        <i class="fa fa-fw fa-caret-down"></i>

                    </a><!-- a href finish -->

                    <ul id="cat" class="collapse"><!-- collapse begin -->
                        <li><!-- li begin -->
                            <a href="index.php?insert_cat"> Insert Category </a>
                        </li><!-- li finish -->
                        <li><!-- li begin -->
                            <a href="index.php?view_cats"> View Categories </a>
                        </li><!-- li finish -->
                    </ul><!-- collapse finish -->

                </li><!-- li finish -->

                <li><!-- li begin -->
                    <a href="#" data-toggle="collapse" data-target="#slides"><!-- a href begin -->

                        <i class="fa fa-fw fa-gear"></i> Slides
                        <i class="fa fa-fw fa-caret-down"></i>

                    </a><!-- a href finish -->

                    <ul id="slides" class="collapse"><!-- collapse begin -->
                        <li><!-- li begin -->
                            <a href="index.php?insert_slide"> Insert Slide </a>
                        </li><!-- li finish -->
                        <li><!-- li begin -->
                            <a href="index.php?view_slides"> View Slides </a>
                        </li><!-- li finish -->
                    </ul><!-- collapse finish -->

                </li><!-- li finish -->

                <li><!-- li begin -->
                    <a href="index.php?view_customers"><!-- a href begin -->
                        <i class="fa fa-fw fa-users"></i> View Customers
                    </a><!-- a href finish -->
                </li><!-- li finish -->

                <li><!-- li begin -->
                    <a href="index.php?view_orders"><!-- a href begin -->
                        <i class="fa fa-fw fa-book"></i> View Orders
                    </a><!-- a href finish -->
                </li><!-- li finish -->

                <li><!-- li begin -->
                    <a href="index.php?view_payments"><!-- a href begin -->
                        <i class="fa fa-fw fa-money"></i> View Payments
                    </a><!-- a href finish -->
                </li><!-- li finish -->

                <li><!-- li begin -->
                    <a href="#" data-toggle="collapse" data-target="#users"><!-- a href begin -->

                        <i class="fa fa-fw fa-users"></i> Users
                        <i class="fa fa-fw fa-caret-down"></i>

                    </a><!-- a href finish -->

                    <ul id="users" class="collapse"><!-- collapse begin -->
                        <li><!-- li begin -->
                            <a href="index.php?insert_user"> Insert User </a>
                        </li><!-- li finish -->
                        <li><!-- li begin -->
                            <a href="index.php?view_users"> View Users </a>
                        </li><!-- li finish -->
                        <li><!-- li begin -->
                            <a href="index.php?user_profile"> Edit User Profile </a>
                        </li><!-- li finish -->
                    </ul><!-- collapse finish -->

                </li><!-- li finish -->

                <li><!-- li begin -->
                    <a href="logout.php"><!-- a href begin -->
                        <i class="fa fa-fw fa-power-off"></i> Log Out
                    </a><!-- a href finish -->
                </li><!-- li finish -->

            </ul><!-- nav navbar-nav side-nav finish -->
        </div><!-- collapse navbar-collapse navbar-ex1-collapse finish -->

    </nav><!-- navbar navbar-inverse navbar-fixed-top finish -->

<div class="row"><!-- row no: 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <h1 class="page-header"> Dashboard </h1>

        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->

                <i class="fa fa-dashboard"></i> Dashboard

            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->

    </div><!-- col-lg-12 finish -->
</div><!-- row no: 1 finish -->

<div class="row"><!-- row no: 2 begin -->

    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-primary"><!-- panel panel-primary begin -->

            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->

                        <i class="fa fa-tasks fa-5x"></i>

                    </div><!-- col-xs-3 finish -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> 17 </div>

                        <div> Products </div>

                    </div><!-- col-xs-9 text-right finish -->

                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->

            <a href="../index.php?view_products"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->

                    <span class="pull-left"><!-- pull-left begin -->
                        View Details
                    </span><!-- pull-left finish -->

                    <span class="pull-right"><!-- pull-right begin -->
                        <i class="fa fa-arrow-circle-right"></i>
                    </span><!-- pull-right finish -->

                    <div class="clearfix"></div>

                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->

        </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-3 col-md-6 finish -->

    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-green"><!-- panel panel-green begin -->

            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->

                        <i class="fa fa-users fa-5x"></i>

                    </div><!-- col-xs-3 finish -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> 7 </div>

                        <div> Customers </div>

                    </div><!-- col-xs-9 text-right finish -->

                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->

            <a href="../index.php?view_customers"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->

                    <span class="pull-left"><!-- pull-left begin -->
                        View Details
                    </span><!-- pull-left finish -->

                    <span class="pull-right"><!-- pull-right begin -->
                        <i class="fa fa-arrow-circle-right"></i>
                    </span><!-- pull-right finish -->

                    <div class="clearfix"></div>

                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->

        </div><!-- panel panel-green finish -->
    </div><!-- col-lg-3 col-md-6 finish -->

    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-orange"><!-- panel panel-yellow begin -->

            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->

                        <i class="fa fa-tags fa-5x"></i>

                    </div><!-- col-xs-3 finish -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> 5 </div>

                        <div> Product Categories </div>

                    </div><!-- col-xs-9 text-right finish -->

                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->

            <a href="../index.php?view_p_cats"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->

                    <span class="pull-left"><!-- pull-left begin -->
                        View Details
                    </span><!-- pull-left finish -->

                    <span class="pull-right"><!-- pull-right begin -->
                        <i class="fa fa-arrow-circle-right"></i>
                    </span><!-- pull-right finish -->

                    <div class="clearfix"></div>

                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->

        </div><!-- panel panel-yellow finish -->
    </div><!-- col-lg-3 col-md-6 finish -->

    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 begin -->
        <div class="panel panel-red"><!-- panel panel-red begin -->

            <div class="panel-heading"><!-- panel-heading begin -->
                <div class="row"><!-- panel-heading row begin -->
                    <div class="col-xs-3"><!-- col-xs-3 begin -->

                        <i class="fa fa-shopping-cart fa-5x"></i>

                    </div><!-- col-xs-3 finish -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right begin -->
                        <div class="huge"> 25 </div>

                        <div> Orders </div>

                    </div><!-- col-xs-9 text-right finish -->

                </div><!-- panel-heading row finish -->
            </div><!-- panel-heading finish -->

            <a href="../index.php?view_orders"><!-- a href begin -->
                <div class="panel-footer"><!-- panel-footer begin -->

                    <span class="pull-left"><!-- pull-left begin -->
                        View Details
                    </span><!-- pull-left finish -->

                    <span class="pull-right"><!-- pull-right begin -->
                        <i class="fa fa-arrow-circle-right"></i>
                    </span><!-- pull-right finish -->

                    <div class="clearfix"></div>

                </div><!-- panel-footer finish -->
            </a><!-- a href finish -->

        </div><!-- panel panel-red finish -->
    </div><!-- col-lg-3 col-md-6 finish -->

</div><!-- row no: 2 finish -->

<div class="row"><!-- row no: 3 begin -->
    <div class="col-lg-8"><!-- col-lg-8 begin -->
        <div class="panel panel-primary"><!-- panel panel-primary begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->

                    <i class="fa fa-money fa-fw"></i> New Orders

                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->

            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- table table-hover table-striped table-bordered begin -->

                        <thead><!-- thead begin -->

                        <tr><!-- th begin -->

                            <th> Order no: </th>
                            <th> Customer Email: </th>
                            <th> Invoice No: </th>
                            <th> Product ID: </th>
                            <th> Product Qty: </th>
                            <th> Product Size: </th>
                            <th> Status: </th>

                        </tr><!-- th finish -->

                        </thead><!-- thead finish -->

                        <tbody><!-- tbody begin -->

                        <tr><!-- tr begin -->
                            <td> 1 </td>
                            <td> pelanggan@gmail.com </td>
                            <td> 32sa32 </td>
                            <td> 24 </td>
                            <td> 2 </td>
                            <td> Large </td>
                            <td> Pending </td>

                        </tr><!-- tr finish -->

                        <tr><!-- tr begin -->
                            <td> 1 </td>
                            <td> pelanggan@gmail.com </td>
                            <td> 32sa32 </td>
                            <td> 24 </td>
                            <td> 2 </td>
                            <td> Large </td>
                            <td> Pending </td>

                        </tr><!-- tr finish -->

                        <tr><!-- tr begin -->
                            <td> 1 </td>
                            <td> pelanggan@gmail.com </td>
                            <td> 32sa32 </td>
                            <td> 24 </td>
                            <td> 2 </td>
                            <td> Large </td>
                            <td> Pending </td>

                        </tr><!-- tr finish -->

                        <tr><!-- tr begin -->
                            <td> 1 </td>
                            <td> pelanggan@gmail.com </td>
                            <td> 32sa32 </td>
                            <td> 24 </td>
                            <td> 2 </td>
                            <td> Large </td>
                            <td> Pending </td>

                        </tr><!-- tr finish -->

                        </tbody><!-- tbody finish -->

                    </table><!-- table table-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->

                <div class="text-right"><!-- text-right begin -->

                    <a href="../index.php?view_orders"><!-- a href begin -->

                        View All Orders <i class="fa fa-arrow-circle-right"></i>

                    </a><!-- a href finish -->

                </div><!-- text-right finish -->

            </div><!-- panel-body finish -->

        </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-8 finish -->

    <div class="col-md-4"><!-- col-md-4 begin -->
        <div class="panel"><!-- panel begin -->
            <div class="panel-body"><!-- panel-body begin -->
                <div class="mb-md thumb-info"><!-- mb-md thumb-info begin -->

                    <img src="m-dev-info.jpg" alt="admin-thumb-info" class="rounded img-responsive">

                    <div class="thumb-info-title"><!-- thumb-info-title begin -->

                        <span class="thumb-info-inner"> MrGhie </span>
                        <span class="thumb-info-type"> Web Developer </span>

                    </div><!-- thumb-info-title finish -->

                </div><!-- mb-md thumb-info finish -->

                <div class="mb-md"><!-- mb-md begin -->
                    <div class="widget-content-expanded"><!-- widget-content-expanded begin -->
                        <i class="fa fa-user"></i> <span> Email: </span> mugianto1nd@gmail.com <br/>
                        <i class="fa fa-flag"></i> <span> Country: </span> Indonesia <br/>
                        <i class="fa fa-envelope"></i> <span> Contact: </span> 0818-0683-3157 <br/>
                    </div><!-- widget-content-expanded finish -->

                    <hr class="dotted short">

                    <h5 class="text-muted"> About Me</h5>

                    <p><!-- p begin -->

                        This application is created by Mdev Media, if you willing to contact me, please click this link. <br/>
                        <a href="#"> M-Dev-Media </a> <br/>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci doloribus tempore non ut velit, nesciunt totam, perspiciatis corrupti expedita nulla aut necessitatibus eius nisi. Unde quasi, recusandae doloribus minus quisquam.

                    </p><!-- p finish -->

                </div><!-- mb-md finish -->

            </div><!-- panel-body finish -->
        </div><!-- panel finish -->
    </div><!-- col-md-4 finish -->

</div><!-- row no: 3 finish -->
    <script src="../js/jquery-331.min.js"></script>
    <script src="../js/bootstrap-337.min.js"></script>
    <script src="../js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</body>
</html>
