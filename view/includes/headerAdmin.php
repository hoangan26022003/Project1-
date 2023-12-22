<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store Admin Area</title>
    <link rel="stylesheet" href="view/styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="view/font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="view/styles/style1.css">
    <link rel="stylesheet" href="view/styles/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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

                    <i class="fa fa-user"></i> <?= $_SESSION['admin_name'] ?> <b class="caret"></b>

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
                        <a href="index.php?controller=login&action=logout"><!-- a href begin -->

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
                            <a href="index.php?controller=productCategory&action=create"> Insert Product Category </a>
                        </li><!-- li finish -->
                        <li><!-- li begin -->
                            <a href="index.php?controller=productCategory"> View Products Categories </a>
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
                            <a href="index.php?controller=category&action=create"> Insert Category </a>
                        </li><!-- li finish -->
                        <li><!-- li begin -->
                            <a href="index.php?controller=category"> View Categories </a>
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
                            <a href="index.php?controller=slide&action=create"> Insert Slide </a>
                        </li><!-- li finish -->
                        <li><!-- li begin -->
                            <a href="index.php?controller=slide"> View Slides </a>
                        </li><!-- li finish -->
                    </ul><!-- collapse finish -->

                </li><!-- li finish -->

                <li><!-- li begin -->
                    <a href="index.php?controller=customer"><!-- a href begin -->
                        <i class="fa fa-fw fa-users"></i> View Customers
                    </a><!-- a href finish -->
                </li><!-- li finish -->

                <li><!-- li begin -->
                    <a href="index.php?controller=order"><!-- a href begin -->
                        <i class="fa fa-fw fa-book"></i> View Orders
                    </a><!-- a href finish -->
                </li><!-- li finish -->

                <li><!-- li begin -->
                    <a href="#" data-toggle="collapse" data-target="#payment"><!-- a href begin -->

                        <i class="fa fa-fw fa-money"></i> Payment Method
                        <i class="fa fa-fw fa-caret-down"></i>

                    </a><!-- a href finish -->

                    <ul id="payment" class="collapse"><!-- collapse begin -->
                        <li><!-- li begin -->
                            <a href="index.php?controller=payment&action=create"> Insert Payment Method </a>
                        </li><!-- li finish -->
                        <li><!-- li begin -->
                            <a href="index.php?controller=payment"> View Payment Method </a>
                        </li><!-- li finish -->
                    </ul><!-- collapse finish -->

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
                    <a href="index.php?controller=login&action=logout"><!-- a href begin -->
                        <i class="fa fa-fw fa-power-off"></i> Log Out
                    </a><!-- a href finish -->
                </li><!-- li finish -->

            </ul><!-- nav navbar-nav side-nav finish -->
        </div><!-- collapse navbar-collapse navbar-ex1-collapse finish -->

    </nav><!-- navbar navbar-inverse navbar-fixed-top finish -->