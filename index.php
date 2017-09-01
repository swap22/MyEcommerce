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
                        <li class="active">
                            <a href="index.php"> Home </a>
                        </li>
                        <li>
                            <a href="shop.php"> Shop </a>
                        </li>
                        <li>
                            <a href="#"> My Account </a>
                        </li>
                        <li>
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
    
    <div class="container" id="slider"><!-- container Starts -->
        <div class="col-md-12"><!-- col-md-12 Starts -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Starts -->
                <ol class="carousel-indicators"><!-- carousel-indicators Starts -->
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

                    <li data-target="#myCarousel" data-slide-to="1"></li>

                    <li data-target="#myCarousel" data-slide-to="2"></li>

                    <li data-target="#myCarousel" data-slide-to="3"></li>

                </ol><!-- carousel-indicators Ends -->

            <div class="carousel-inner"><!-- carousel-inner Starts -->
                <div class='item active'>
                    <img src='admin_area/slides_images/1.jpg'>
                </div>
                <div class='item'>
                    <img src='admin_area/slides_images/2.jpg'>
                </div>
                <div class='item'>
                    <img src='admin_area/slides_images/3.jpg'>
                </div>
            </div><!-- carousel-inner Ends -->

            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><!-- left carousel-control Starts -->

                <span class="glyphicon glyphicon-chevron-left"> </span>

                <span class="sr-only"> Previous </span>

            </a><!-- left carousel-control Ends -->

            <a class="right carousel-control" href="#myCarousel" data-slide="next"><!-- right carousel-control Starts -->

                <span class="glyphicon glyphicon-chevron-right"> </span>

                <span class="sr-only"> Next </span>

            </a><!-- right carousel-control Ends -->

            </div><!-- carousel slide Ends -->

        </div><!-- col-md-12 Ends -->
 
    </div><!-- container Ends -->
    <div id="advantages"><!-- advantages Starts -->
        <div class="container"><!-- container Starts -->
            <div class="same-height-row"><!-- same-height-row Starts -->
                <div class="col-sm-4"><!-- col-sm-4 Starts -->
                    <div class="box same-height"><!-- box same-height Starts -->
                        <div class="icon">
                            <i class="fa fa-heart" ></i>
                        </div>
                        <h3><a href="#"> WE LOVE OUR CUSTOMERS </a></h3>
                            <p>
                            We are known to provide best possible service ever
                            </p>
                    </div><!-- box same-height Ends -->
                </div><!-- col-sm-4 Ends -->
                <div class="col-sm-4"><!-- col-sm-4 Starts -->
                    <div class="box same-height" ><!-- box same-height Starts -->
                        <div class="icon" >
                            <i class="fa fa-tags" ></i>
                        </div>
                        <h3><a href="#" > BEST PRICES </a></h3>
                        <p>
                        You can check on all others sites about the prices and than compare with us.
                        </p>
                    </div><!-- box same-height Ends -->
                </div><!-- col-sm-4 Ends -->
                <div class="col-sm-4"><!-- col-sm-4 Starts -->
                    <div class="box same-height" ><!-- box same-height Starts -->
                        <div class="icon" >
                            <i class="fa fa-thumbs-up" ></i>
                        </div>
                        <h3><a href="#" > 100% SATISFACTION GUARANTEED </a></h3>
                        <p>
                        Free returns on everything for 3 months.
                        </p>
                    </div><!-- box same-height Ends -->
                </div><!-- col-sm-4 Ends -->
            </div><!-- same-height-row Ends -->
        </div><!-- container Ends -->
    </div><!-- advantages Ends -->


        <script src="js/jquery.min.js"> </script>
        <script src="js/bootstrap.min.js"></script>
     </body>
</html>