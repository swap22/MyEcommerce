<?php
// checking whether user log in or not
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
?>
<div class="row"><!-- 1 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <h1 class="page-header">Dashboard</h1>
        <ol class="breadcrumb"><!-- breadcrumb Starts -->
        <li class="active">
        <i class="fa fa-dashboard"></i> Dashboard
        </li>
        </ol><!-- breadcrumb Ends -->
    </div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
        <div class="panel panel-primary"><!-- panel panel-primary Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <div class="row"><!-- panel-heading row Starts -->
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->
                        <i class="fa fa-tasks fa-5x"> </i>
                    </div><!-- col-xs-3 Ends -->
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                        <div class="huge">10 </div>
                            <div>Products</div>
                    </div><!-- col-xs-9 text-right Ends -->
                </div><!-- panel-heading row Ends -->
            </div><!-- panel-heading Ends -->
            <a href="index.php?view_products">
                <div class="panel-footer"><!-- panel-footer Starts -->
                    <span class="pull-left"> View Details </span>
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    <div class="clearfix"></div>
                </div><!-- panel-footer Ends -->
            </a>
        </div><!-- panel panel-primary Ends -->
    </div><!-- col-lg-3 col-md-6 Ends -->
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
        <div class="panel panel-green"><!-- panel panel-green Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <div class="row"><!-- panel-heading row Starts -->
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->
                        <i class="fa fa-comments fa-5x"> </i>
                    </div><!-- col-xs-3 Ends -->
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                        <div class="huge"> 125</div>
                        <div>Customers</div>
                    </div><!-- col-xs-9 text-right Ends -->
                </div><!-- panel-heading row Ends -->
            </div><!-- panel-heading Ends -->
            <a href="index.php?view_customers">
                <div class="panel-footer"><!-- panel-footer Starts -->
                    <span class="pull-left"> View Details </span>
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    <div class="clearfix"></div>
                </div><!-- panel-footer Ends -->
            </a>
        </div><!-- panel panel-green Ends -->
    </div><!-- col-lg-3 col-md-6 Ends -->
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
        <div class="panel panel-yellow"><!-- panel panel-yellow Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <div class="row"><!-- panel-heading row Starts -->
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->
                        <i class="fa fa-shopping-cart fa-5x"> </i>
                    </div><!-- col-xs-3 Ends -->
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                        <div class="huge"> 5 </div>
                        <div>Products Categories</div>
                    </div><!-- col-xs-9 text-right Ends -->
                </div><!-- panel-heading row Ends -->
            </div><!-- panel-heading Ends -->
            <a href="index.php?view_p_cats">
                <div class="panel-footer"><!-- panel-footer Starts -->
                    <span class="pull-left"> View Details </span>
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    <div class="clearfix"></div>
                </div><!-- panel-footer Ends -->
            </a>
        </div><!-- panel panel-yellow Ends -->
    </div><!-- col-lg-3 col-md-6 Ends -->
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
        <div class="panel panel-red"><!-- panel panel-red Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <div class="row"><!-- panel-heading row Starts -->
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->
                        <i class="fa fa-support fa-5x"> </i>
                    </div><!-- col-xs-3 Ends -->
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                        <div class="huge"> 10 </div>
                        <div>Orders</div>
                    </div><!-- col-xs-9 text-right Ends -->
                </div><!-- panel-heading row Ends -->
            </div><!-- panel-heading Ends -->
            <a href="index.php?view_orders">
                <div class="panel-footer"><!-- panel-footer Starts -->
                    <span class="pull-left"> View Details </span>
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    <div class="clearfix"></div>
                </div><!-- panel-footer Ends -->
            </a>
        </div><!-- panel panel-red Ends -->
    </div><!-- col-lg-3 col-md-6 Ends -->
</div><!-- 2 row Ends -->
<div class="row" ><!-- 3 row Starts -->
    <div class="col-lg-8" ><!-- col-lg-8 Starts -->
    <div class="panel panel-primary" ><!-- panel panel-primary Starts -->
        <div class="panel-heading" ><!-- panel-heading Starts -->
            <h3 class="panel-title" ><!-- panel-title Starts -->
                <i class="fa fa-money fa-fw" ></i> New Orders
            </h3><!-- panel-title Ends -->
        </div><!-- panel-heading Ends -->
        <div class="panel-body" ><!-- panel-body Starts -->
            <div class="table-responsive" ><!-- table-responsive Starts -->
                <table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->
                    <thead><!-- thead Starts -->
                        <tr>
                            <th>Order No:</th>
                            <th>Customer Email:</th>
                            <th>Invoice No:</th>
                            <th>Product ID:</th>
                            <th>Product Qty:</th>
                            <th>Product Size:</th>
                            <th>Status:</th>
                        </tr>
                    </thead><!-- thead Ends -->
                    <tbody><!-- tbody Starts -->
                        <tr>
                            <td>5</td>
                            <td>
                            ss@gmail.com
                            </td>
                            <td>2565</td>
                            <td>365</td>
                            <td>2</td>
                            <td>small</td>
                            <td>
                            pending
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                            ss@gmail.com
                            </td>
                            <td>2565</td>
                            <td>365</td>
                            <td>2</td>
                            <td>small</td>
                            <td>
                            pending
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                            ss@gmail.com
                            </td>
                            <td>2565</td>
                            <td>365</td>
                            <td>2</td>
                            <td>small</td>
                            <td>
                            pending
                            </td>
                        </tr>
                    </tbody><!-- tbody Ends -->
                </table><!-- table table-bordered table-hover table-striped Ends -->
            </div><!-- table-responsive Ends -->
            <div class="text-right" ><!-- text-right Starts -->
                <a href="index.php?view_orders" >
                View All Orders <i class="fa fa-arrow-circle-right" ></i>
                </a>
            </div><!-- text-right Ends -->
        </div><!-- panel-body Ends -->
    </div><!-- panel panel-primary Ends -->
    </div><!-- col-lg-8 Ends -->
    <div class="col-md-4"><!-- col-md-4 Starts -->
        <div class="panel"><!-- panel Starts -->
            <div class="panel-body"><!-- panel-body Starts -->
                <div class="thumb-info mb-md"><!-- thumb-info mb-md Starts -->
                    <img src="admin_images/salman.jpg" class="rounded img-responsive">
                    <div class="thumb-info-title"><!-- thumb-info-title Starts -->
                        <span class="thumb-info-inner"> salman </span>
                        <span class="thumb-info-type"> sale executive </span>
                    </div><!-- thumb-info-title Ends -->
                </div><!-- thumb-info mb-md Ends -->
                <div class="mb-md"><!-- mb-md Starts -->
                    <div class="widget-content-expanded"><!-- widget-content-expanded Starts -->
                        <i class="fa fa-user"></i> <span>Email: </span> s@gmail  <br>
                        <i class="fa fa-user"></i> <span>Country: </span> ind   <br>
                        <i class="fa fa-user"></i> <span>Contact: </span> 111111   <br>
                    </div><!-- widget-content-expanded Ends -->
                    <hr class="dotted short">
                    <h5 class="text-muted">About</h5>
                    <p>
                    khjgygtfutftufgyugfiuguyygiygyvyutduygvg
                    </p>
                </div><!-- mb-md Ends -->
            </div><!-- panel-body Ends -->
        </div><!-- panel Ends -->
    </div><!-- col-md-4 Ends -->
</div><!-- 3 row Ends -->
<?php } ?>