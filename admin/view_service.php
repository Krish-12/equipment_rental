<?php
	include("config.php");
	$user_id = $_SESSION['user_id'];
	$get_details = mysqli_query($mysqli,"select * from service");

	if(isset($_GET['delete_id']))
	{
		$user_id = $_GET['delete_id'];
		
		$change_status = mysqli_query($mysqli,"DELETE FROM service where service_id='".$user_id."'");
		if($change_status)
		{
			echo "<script>window.location.href='view_service.php'</script>";
		}
	}
?>



<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
		<title>ADMIN || View Service</title>
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
                                <a href="#">View Service</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>View</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> View Service -
                        <small>View</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
							<a href="add_service.php" class="btn green"><i class="fa fa-plus"></i> Add Service</a><br/><br/>
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-home font-dark"></i>
                                        <span class="caption-subject bold uppercase">View Service</span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                                        <thead>
                                            <tr>
												<th class="all">Sl. No.</th>
												<th class="all">Category Name</th>
												<th class="all">Sub Category Name</th>
                                                <th class="all">Service Name</th>
												<th class="all">Service Description</th>
                                                <th class="none">Service Image</th>
												<th class="all">Service Price</th>
												
												
                                                <th class="desktop">Action</th>
												
												<th class="desktop">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
												<?php
												$i= 1;
												while($fetch_details = mysqli_fetch_array($get_details))
												{
												?>
											<tr>
												<td style="padding:20px;"><?php echo $i;?></td>
												<td style="padding:20px;">
											<?php
												$category_id = $fetch_details['category_id'];
												$get_category_query = mysqli_query($mysqli,"select * from category where category_id='".$category_id."'");
												$get_fetch_category_name = mysqli_fetch_array($get_category_query);
												echo $get_fetch_category_name['category_name']
											?>		
												</td>

												<td style="padding:20px;">
											<?php
												$sub_cat_id = $fetch_details['sub_cat_id'];
												$get_subcategory_query = mysqli_query($mysqli,"select * from sub_category where sub_category_id='".$sub_cat_id."'");
												$get_fetch_subcategory_name = mysqli_fetch_array($get_subcategory_query);
												echo $get_fetch_subcategory_name['sub_category_name']
											?>		
												</td>

												<td style="padding:20px;"><?php echo $fetch_details['service_name'];?></td>
												<td style="padding:20px;"><?php echo substr($fetch_details['description'],0,50);?></td>
                                               <td>
											   <?php
												$service_id = $fetch_details['service_id'];
												$get_category_query = mysqli_query($mysqli,"select * from service_image where service_id='".$service_id."'");
												while($get_fetch_service_image = mysqli_fetch_array($get_category_query))
													{
													?>
											<img src="uploads/<?php echo $get_fetch_service_image['service_image'];?>"
											style="height:65px;width:65px;"><?php }
											?>
											</td>
											
												
												<td style="padding:20px;"><?php echo $fetch_details['price'];?></td>
												<td style="padding:20px;"><a href="edit_service.php?service_id=<?php echo $fetch_details['service_id']?>" class="btn blue btn-outline sbold uppercase">Edit</a></td>
												<td style="padding:20px;"><a href="?delete_id=<?php echo $fetch_details['service_id']?>"" class="btn red btn-outline sbold uppercase">Delete</a></td>
                                        
											</tr>
											    <?php
												$i++;
											}
											?>
											
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <?php include('footer.php') ?>
    </body>

</html>