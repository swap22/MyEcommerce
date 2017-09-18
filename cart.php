<?php
include("includes/db.php");

include("functions/functions.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>MY Ecommerce Store!!!! </title>
        <link href="styles/bootstrap.min.css" rel="stylesheet">
        <link href="styles/style.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>

        <div id="top"><!-- top Starts -->
            <div class="container"><!-- container Starts -->
                <div class="col-md-6 offer"><!-- col-md-6 offer Starts -->
                    <a href="#" class="btn btn-success btn-sm" >
                    Welcome Swapnil
                    </a>
                    <a href="#">
                    Total Shopping Cart Price: 500$ Total Items : 5
                    </a>
                </div><!-- col-md-6 offer Starts -->
                <div class="col-md-6"><!-- col-md-6 Starts -->
                    <ul class="menu"><!-- menu Starts -->
                        <li>
                            <a href="customer_register.php">
                                Register
                            </a>
                        </li>
                            
                        <li>
                            <a href="customer_register.php">
                                My Account
                            </a>
                        </li>
                        <li>
                            <a href="cart.php">
                            Go to Cart
                            </a>
                        </li>
                        <li>
                            <a href="customer_register.php">
                            Login
                            </a>
                       </li>
                    </ul><!-- menu Ends -->
                </div><!-- col-md-6 Ends -->
            </div><!-- container end -->
        </div><!-- top end -->
    <div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default Starts -->
        <div class="container" ><!-- container Starts -->
            <div class="navbar-header"><!-- navbar-header Starts -->
                <a class="navbar-brand home" href="index.php" ><!--- navbar navbar-brand home Starts -->
                    <img src="images/logo.png" alt="Default Logo" class="hidden-xs" ><!--- till xtra small image-->
                    <img src="images/logo-small.png" alt="small default logo" class="visible-xs" >
                </a><!--- navbar navbar-brand home Ends -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"  >
                    <span class="sr-only" >Toggle Navigation </span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search" >
                    <span class="sr-only" >Toggle Search</span>
                    <i class="fa fa-search" ></i>
                </button>
            </div><!-- navbar-header Ends -->
            <div class="navbar-collapse collapse" id="navigation" ><!-- navbar-collapse collapse Starts -->
                 <div class="padding-nav" ><!-- padding-nav Starts -->
                    <ul class="nav navbar-nav navbar-left"><!-- nav navbar-nav navbar-left Starts -->
                        <li>
                            <a href="index.php"> Home </a>
                        </li>
                        <li>
                            <a href="shop.php"> Shop </a>
                        </li>
                        <li>
                            <a href="Checkout.php"> My Account </a>
                        </li>
                        <li class="active">
                            <a href="cart.php"> Shopping Cart </a>
                        </li>
                        <li>
                            <a href="contact.php"> Contact Us </a>
                        </li>
                    </ul><!-- nav navbar-nav navbar-left Ends -->
                </div><!-- padding-nav Ends -->
                <a class="btn btn-primary navbar-btn right" href="cart.php"><!-- btn btn-primary navbar-btn right Starts -->
                    <i class="fa fa-shopping-cart"></i>
                </a><!-- btn btn-primary navbar-btn right Ends -->
                <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Starts -->
                     <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                    </button>
                </div><!-- navbar-collapse collapse right Ends -->
                <div class="collapse clearfix" id="search"><!-- collapse clearfix Starts -->
                    <form class="navbar-form" method="get" action="results.php"><!-- navbar-form Starts -->
                        <div class="input-group"><!-- input-group Starts -->
                            <input class="form-control" type="text" placeholder="Search" name="user_query" required>
                                <span class="input-group-btn"><!-- input-group-btn Starts -->
                                    <button type="submit" value="Search" name="search" class="btn btn-primary">
                                         <i class="fa fa-search"></i>
                                    </button>
                                 </span><!-- input-group-btn Ends -->
                        </div><!-- input-group Ends -->
                    </form><!-- navbar-form Ends -->
                </div><!-- collapse clearfix Ends -->
            </div><!-- navbar-collapse collapse Ends -->
        </div><!-- container Ends -->
    </div><!-- navbar navbar-default Ends -->
<!--shop section-->
    <div id="content" ><!-- content Starts -->
        <div class="container" ><!-- container Starts -->
            <div class="col-md-12" ><!--- col-md-12 Starts -->
                <ul class="breadcrumb" ><!-- breadcrumb Starts -->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Cart</li>
                </ul><!-- breadcrumb Ends -->
            </div><!--- col-md-12 Ends -->
            <div class="col-md-9" id="cart" ><!-- col-md-9 Starts -->
                <div class="box" ><!-- box Starts -->
                    <form action="cart.php" method="post" enctype="multipart-form-data" ><!-- form Starts -->
                        <h1> Shopping Cart </h1>
                        <p class="text-muted" > You currently have 5 item(s) in your cart. </p>
                        <div class="table-responsive" ><!-- table-responsive Starts -->
                            <table class="table" ><!-- table Starts -->
                                <thead><!-- thead Starts -->
                                    <tr>
                                    <th colspan="2" >Product</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Size</th>
                                    <th colspan="1">Delete</th>
                                    <th colspan="2"> Sub Total </th>
                                    </tr>
                                </thead><!-- thead Ends -->
                                <tbody><!-- tbody Starts -->
                                    <tr><!-- tr Starts -->
                                    <td>
                                        <img src="admin_area/product_images/product.jpg" >
                                    </td>
                                    <td>
                                        <a href="#" >T-Shirt</a>
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        $500.00
                                    </td>
                                    <td>
                                        Medium
                                    </td>
                                    <td>
                                        <input type="checkbox" name="remove[]" >
                                    </td>
                                    <td>
                                        $1000.00
                                    </td>
                                    </tr><!-- tr Ends -->
                                    <tr><!-- tr Starts -->
                                    <td>
                                        <img src="admin_area/product_images/product.jpg" >
                                    </td>
                                    <td>
                                        <a href="#" >T-Shirt</a>
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        $500.00
                                    </td>
                                    <td>
                                        Small
                                    </td>
                                    <td>
                                        <input type="checkbox" name="remove[]" >
                                    </td>
                                    <td>
                                        $1000.00
                                    </td>
                                    </tr><!-- tr Ends -->
                                    <tr><!-- tr Starts -->
                                    <td>
                                        <img src="admin_area/product_images/product.jpg" >
                                    </td>
                                    <td>
                                        <a href="#" >T-Shirt</a>
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        $500.00
                                    </td>
                                    <td>
                                        Large
                                    </td>
                                    <td>
                                        <input type="checkbox" name="remove[]" >
                                    </td>
                                    <td>
                                        $500.00
                                    </td>
                                    </tr><!-- tr Ends -->
                                </tbody><!-- tbody Ends -->
                                <tfoot><!-- tfoot Starts -->
                                    <tr>
                                        <th colspan="5"> Total </th>
                                        <th colspan="2"> $2500.00 </th>
                                    </tr>
                                </tfoot><!-- tfoot Ends -->
                            </table><!-- table Ends -->
                        </div><!-- table-responsive Ends -->
                        <div class="box-footer"><!-- box-footer Starts -->
                            <div class="pull-left"><!-- pull-left Starts -->
                                <a href="index.php" class="btn btn-default">
                                    <i class="fa fa-chevron-left"></i> Continue Shopping
                                </a>
                            </div><!-- pull-left Ends -->
                            <div class="pull-right"><!-- pull-right Starts -->
                                <button class="btn btn-default" type="submit" name="update" value="Update Cart">
                                    <i class="fa fa-refresh"></i> Update Cart
                                </button>
                                <a href="checkout.php" class="btn btn-primary">
                                    Proceed to checkout <i class="fa fa-chevron-right"></i>
                                </a>
                            </div><!-- pull-right Ends -->
                        </div><!-- box-footer Ends -->
                    </form><!-- form Ends -->
                </div><!-- box Ends -->
                <div id="row same-height-row"><!-- row same-height-row Starts -->
                    <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->
                        <div class="box same-height headline"><!-- box same-height headline Starts -->
                            <h3 class="text-center"> You also like these Products </h3>
                        </div><!-- box same-height headline Ends -->
                    </div><!-- col-md-3 col-sm-6 Ends -->
                    <div class='center-responsive col-md-3 col-sm-6 ' >
                        <div class='product same-height' >
                            <a href='details.php' >
                                <img src='admin_area/product_images/product.jpg' class='img-responsive' >
                            </a>
                            <div class='text' >
                                <h3><a href='details.php' >T-shhtrt</a></h3>
                                <p class='price' >$1000</p>
                            </div>
                        </div>
                    </div>
                    <div class='center-responsive col-md-3 col-sm-6 ' >
                        <div class='product same-height' >
                            <a href='details.php' >
                                <img src='admin_area/product_images/product.jpg' class='img-responsive' >
                            </a>
                            <div class='text' >
                                <h3><a href='details.php' >T-shhtrt</a></h3>
                                <p class='price' >$1000</p>
                            </div>
                        </div>
                    </div>
                    <div class='center-responsive col-md-3 col-sm-6 ' >
                        <div class='product same-height' >
                            <a href='details.php' >
                                <img src='admin_area/product_images/product.jpg' class='img-responsive' >
                            </a>
                            <div class='text' >
                                <h3><a href='details.php' >T-shhtrt</a></h3>
                                <p class='price' >$1000</p>
                            </div>
                        </div>
                    </div>
                </div><!-- row same-height-row Ends -->
            </div><!-- col-md-9 Ends -->
            <div class="col-md-3"><!-- col-md-3 Starts -->
                <div class="box" id="order-summary"><!-- box Starts -->
                    <div class="box-header"><!-- box-header Starts -->
                        <h3>Order Summary</h3>
                    </div><!-- box-header Ends -->
                    <p class="text-muted">
                        Shipping and additional costs are calculated based on the values you have entered.
                    </p>
                    <div class="table-responsive"><!-- table-responsive Starts -->
                        <table class="table"><!-- table Starts -->
                            <tbody><!-- tbody Starts -->
                                <tr>
                                    <td> Order Subtotal </td>
                                    <th> $2500.00 </th>
                                </tr>
                                <tr>
                                    <td> Shipping and handling </td>
                                    <th>$0.00</th>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <th>$0.00</th>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <th>$2500.00</th>
                                </tr>
                            </tbody><!-- tbody Ends -->
                    </table><!-- table Ends -->
                </div><!-- table-responsive Ends -->
            </div><!-- box Ends -->
        </div><!-- col-md-3 Ends -->
    </div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>