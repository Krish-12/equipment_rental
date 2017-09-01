<?php
include ("config.php");
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>IsraFind | Dashboard</title>
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

					<!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;"> Admin
                        <!--<small>Statistics</small>-->
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="#" ><img src="images/1467999083_group.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="#" style="color:#000;">Add </a>
							</div>
                        </div>

						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="#" ><img src="images/1467998119_categories.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="#" style="color:#000;">View </a>
							</div>
                        </div>
						
						<!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="view_jobs_category.php" ><img src="images/1467998119_categories.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_jobs_category.php" style="color:#000;">Categories</a>
							</div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="view_job_location.php" ><img src="images/1467998190_advantage_nearby.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_job_location.php" style="color:#000;">Locations</a>
							</div>
                        </div>
						
                    </div>
					                    
                    <div class="clearfix"></div>

                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <!--<h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;"> Property
                        <!--<small>Statistics</small>-->
                   <!-- </h3>-->
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <!--<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="add_apartment.php" ><img src="images/1467997287_Home-icon.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="add_apartment.php" style="color:#000;">Add Apartment</a>
							</div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="view_apartment.php" ><img src="images/1467997287_Home-icon.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:12px;padding-top:17px;">
								<a href="view_apartment.php" style="color:#000;">View Apartment</a>
							</div>
                        </div>

						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="add_land.php" ><img src="images/1467997750_location-icon.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="add_land.php" style="color:#000;">Add Land</a>
							</div>
                        </div>

						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="view_land.php" ><img src="images/1467997750_location-icon.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_land.php" style="color:#000;">View Lands</a>
							</div>
                        </div>

						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="add_office.php" ><img src="images/1467997897_architecture-interior-02.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="add_office.php" style="color:#000;">Add Office</a>
							</div>
                        </div>

						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="view_office.php" ><img src="images/1467997897_architecture-interior-02.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_office.php" style="color:#000;">View Offices</a>
							</div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="add_room.php" ><img src="images/1467998074_bed.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="add_room.php" style="color:#000;">Add Room</a>
							</div>
                        </div>

						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="view_room.php" ><img src="images/1467998074_bed.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_room.php" style="color:#000;">View Rooms</a>
							</div>
                        </div>
                    </div>
					
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="view_property_location.php" ><img src="images/1468025122_miscellaneous-31.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_property_location.php" style="color:#000;">Locations</a>
							</div>
                        </div>
                    </div>
					
					
                    <div class="clearfix"></div>


					<!-- END PAGE BAR -->

                    <!-- END DASHBOARD STATS 1-->

					<!-- END PAGE BAR -->
					
                    <!-- BEGIN PAGE TITLE-->
                    <!--<h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;"> Advertisement
                        <!--<small>Statistics</small>-->
                   <!-- </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <!--<div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="home_featureads.php" ><img src="images/1467998820_Online_Presence_Management.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="home_featureads.php" style="color:#000;">Homepage Ads</a>
							</div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- END DASHBOARD STATS 1-->


					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <!--<h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;">Registered Users
                        <!--<small>Statistics</small>-->
                    <!--</h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <!--<div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:65px;" class="col-md-6">
								<a href="" ><img src="images/1467999267_cloud-users.png" style="height:45px;width:60px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="" style="color:#000;">Users</a>
							</div>
                        </div>

                    </div>
					
					 <!-- BEGIN PAGE TITLE-->
                   <!-- <h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;">Site pages
                        <!--<small>Statistics</small>-->
                   <!-- </h3>
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