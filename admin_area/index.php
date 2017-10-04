<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
    </head>
    <body>
        <div id="wrapper"><!-- wrapper Starts -->
            <?php include("includes/sidebar.php");  ?>
            <div id="page-wrapper"><!-- page-wrapper Starts -->
                <div class="container-fluid"><!-- container-fluid Starts -->
                    <?php
                    if(isset($_GET['dashboard'])){
                    include("dashboard.php");
                    }
                    if(isset($_GET['insert_product'])){
                    include("insert_product.php");
                    }
                    if(isset($_GET['view_products'])){
                    include("view_products.php");
                    }
                    if(isset($_GET['delete_product'])){
                    include("delete_product.php");
                    }
                    if(isset($_GET['edit_product'])){
                    include("edit_product.php");
                    }
                    if(isset($_GET['insert_p_cat'])){
                    include("insert_p_cat.php");
                    }
                    if(isset($_GET['view_p_cats'])){
                    include("view_p_cats.php");
                    }
                    if(isset($_GET['delete_p_cat'])){
                    include("delete_p_cat.php");
                    }
                    if(isset($_GET['edit_p_cat'])){
                    include("edit_p_cat.php");
                    }
                    if(isset($_GET['insert_cat'])){
                    include("insert_cat.php");
                    }
                    if(isset($_GET['view_cats'])){
                    include("view_cats.php");
                    }
                    if(isset($_GET['delete_cat'])){
                    include("delete_cat.php");
                    }
                    if(isset($_GET['edit_cat'])){
                    include("edit_cat.php");
                    }
                    if(isset($_GET['insert_slide'])){
                    include("insert_slide.php");
                    }
                    if(isset($_GET['view_slides'])){
                    include("view_slides.php");
                    }
                    if(isset($_GET['delete_slide'])){
                    include("delete_slide.php");
                    }
                    if(isset($_GET['edit_slide'])){
                    include("edit_slide.php");
                    }
                    if(isset($_GET['view_customers'])){
                    include("view_customers.php");
                    }
                    if(isset($_GET['customer_delete'])){
                    include("customer_delete.php");
                    }
                    if(isset($_GET['view_orders'])){
                    include("view_orders.php");
                    }
                    if(isset($_GET['order_delete'])){
                    include("order_delete.php");
                    }
                    if(isset($_GET['view_payments'])){
                    include("view_payments.php");
                    }
                    if(isset($_GET['payment_delete'])){
                    include("payment_delete.php");
                    }
                    if(isset($_GET['insert_user'])){
                    include("insert_user.php");
                    }
                    if(isset($_GET['view_users'])){
                    include("view_users.php");
                    }
                    if(isset($_GET['user_delete'])){
                    include("user_delete.php");
                    }
                    if(isset($_GET['user_profile'])){
                    include("user_profile.php");
                    }
                    ?>
                </div><!-- container-fluid Ends -->
            </div><!-- page-wrapper Ends -->
        </div><!-- wrapper Ends -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>

