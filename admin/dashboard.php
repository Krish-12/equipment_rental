<?php
include ("../connection.php");
$id = $_SESSION['user_id'];
$check_user_type = mysqli_query($mysqli,"select * from users where id='$user_id'");
$fecth_details = mysqli_fetch_array($check_user_type);
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Admin | Dashboard</title>
        <?php include('metalinks.php'); ?>
	</head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
		<?php include('header.php'); ?>
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
			<?php include('sidebar.php'); ?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="dashboard.php">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Dashboard</span>
                            </li>
                        </ul>
                    </div>
					<?php
							if($fecth_details['user_type']=='admin'){
						?>

					<!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;"> Category
                        <!--<small>Statistics</small>-->
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="add_category.php" ><img src="images/1467999083_group.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="add_category.php" style="color:#000;">Add Category</a>
							</div>
                        </div>

						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="view_category.php" ><img src="images/1467998119_categories.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_category.php" style="color:#000;">View Category</a>
							</div>
                        </div>						
                    </div>
					                    
                    <div class="clearfix"></div>

                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;"> Sub Category</h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="add_sub_category.php" ><img src="images/images.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="add_sub_category.php" style="color:#000;">Add  Sub Category</a>
							</div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="view_sub_category.php" ><img src="images/images (2).png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:12px;padding-top:17px;">
								<a href="view_sub_category.php" style="color:#000;">View  Sub Category</a>
							</div>
                        </div>
                    </div>
					
                    <div class="clearfix"></div>


					<!-- END PAGE BAR -->

                    <!-- END DASHBOARD STATS 1-->

					<!-- END PAGE BAR -->
					
                    

					<div class="clearfix"></div>
                    <!-- END DASHBOARD STATS 1-->


					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
					<h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;">Orders
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:65px;" class="col-md-6">
								<a href="order.php" ><img src="images/1468088203_EditDocument.png" style="height:45px;width:60px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="order.php" style="color:#000;">Orders</a>
							</div>
                        </div>

                    </div>


                    <div class="clearfix"></div>
                    <!-- END DASHBOARD STATS 1-->


					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
					<h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;">Registered Suppliers
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:65px;" class="col-md-6">
								<a href="users.php" ><img src="images/1467999267_cloud-users.png" style="height:45px;width:60px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="users.php" style="color:#000;">Suppliers</a>
							</div>
                        </div>
                    </div>


					<h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;">Registered Services
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="view_service.php" ><img src="images/images (3).png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_service.php" style="color:#000;">View Services</a>
							</div>
                        </div>
                    </div>

					 <?php
					 }else if($fecth_details['user_type']=='supplier'){
					 ?>

					<!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;"> Services
                   </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="add_service.php" ><img src="images/images (1).png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="add_service.php" style="color:#000;">Add Services</a>
							</div>
                        </div>

						 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="view_service.php" ><img src="images/images (3).png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_service.php" style="color:#000;">View Services</a>
							</div>
                        </div>
                    </div>


						<div class="clearfix"></div>
                    <!-- END DASHBOARD STATS 1-->


					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
					<h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;">Orders
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:65px;" class="col-md-6">
								<a href="orders.php" ><img src="images/1468088203_EditDocument.png" style="height:45px;width:60px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="orders.php" style="color:#000;">Orders</a>
							</div>
                        </div>

                    </div>

					<?php 
					} 
					?>

					 <!-- BEGIN PAGE TITLE-->
                   <!--<h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;">Site pages
                        <small>Statistics</small>
                   </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <!--<div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:65px;" class="col-md-6">
								<a href="view_about.php" ><img src="images/1468088203_EditDocument.png" style="height:45px;width:60px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_about.php" style="color:#000;">About</a>
							</div>
                        </div>
						
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:65px;" class="col-md-6">
								<a href="view_faq.php" ><img src="images/1468088203_EditDocument.png" style="height:45px;width:60px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_faq.php" style="color:#000;">FAQ</a>
							</div>
                        </div>

						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:65px;" class="col-md-6">
								<a href="view_privacy.php" ><img src="images/1468088203_EditDocument.png" style="height:45px;width:60px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_privacy.php" style="color:#000;">Privacy & policy</a>
							</div>
                        </div>

						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:65px;" class="col-md-6">
								<a href="view_terms&condition.php" ><img src="images/1468088203_EditDocument.png" style="height:45px;width:60px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_terms&condition.php" style="color:#000;">T & C</a>
							</div>
                        </div>

						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:65px;" class="col-md-6">
								<a href="view_social_media_links.php" ><img src="images/1468088203_EditDocument.png" style="height:45px;width:60px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_social_media_links.php" style="color:#000;">Social Media</a>
							</div>
                        </div>

                    </div>
					
                    <div class="clearfix"></div>
					
					
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
		<?php include('footer.php'); ?>
    </body>

</html>