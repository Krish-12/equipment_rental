<?php
	include("config.php");

if(isset($_POST['submit_category']))

{
		$cat_name =$_POST['name'];
		$tmp_image = $_FILES['image']['tmp_name'];
		$image = $_FILES['image']['name'];
		$save_image = rand(99,9999).$image;
		move_uploaded_file($tmp_image,"uploads/".$save_image);
		
			
		$add_category_details= mysqli_query($mysqli, "insert category values('','".$cat_name."','".$save_image."')");

		if($add_category_details)
		{
			$success = 1;
		echo "
<script>window.location.href='view_category.php'</script>";
		}
		else
		{
		$success = 0;
		echo "
<script>alert('OOPS!! PLEASE TRY AGAIN')</script>";
		}
	
	}
?>
<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js">
	<![endif]-->
	<!--[if IE 9]>
	<html lang="en" class="ie9 no-js">
		<![endif]-->
		<!--[if !IE]>
		<!-->
		<html lang="en">
			<!--
			<![endif]-->
			<head>
				<meta charset="utf-8" />
				<title>ADMIN || Add Category</title>
				<?php include('metalinks.php'); ?>
				<style>
		  .hidden {
		   display:none;
		  }
		</style>
			</head>
			<!-- END HEAD -->
			<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
				<?php include('header.php'); ?>
				<!-- BEGIN HEADER & CONTENT DIVIDER -->
				<div class="clearfix"></div>
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
										<span>Add Category</span>
									</li>
								</ul>
							</div>
							<!-- END PAGE BAR -->
							<!-- BEGIN PAGE TITLE-->
							<h3 class="page-title">Add Category
                        
								<small></small>
							</h3>
							<!-- END PAGE TITLE-->
							<!-- END PAGE HEADER-->
							<div class="row">
								<div class="col-md-12">
									<!-- BEGIN VALIDATION STATES-->
									<div class="portlet light portlet-fit portlet-form bordered">
										<div class="portlet-title">
											<div class="caption">
												<i class="icon-home font-dark"></i>
												<span class="caption-subject font-dark sbold uppercase">Add Category</span>
											</div>
										</div>
										<div class="portlet-body">
											<!-- BEGIN FORM-->
											<form  id="form_sample_3" class="form-horizontal" method="POST" enctype="multipart/form-data">
												<div class="form-body">
													<div class="alert alert-danger display-hide">
														<button class="close" data-close="alert"></button> You have some form errors. Please check below.
											
													</div>
													<div class="alert alert-success display-hide">
														<button class="close" data-close="alert"></button> Your form validation is successful!
											
													</div>
													<div class="alert alert-success 
														<?php if((isset($success)) && ($success == 1)) { } else { ?> display-hide 
														<?php } ?>">
														<button class="close" data-close="alert"></button> You have successfully Added .
											
													</div>
													<div class="alert alert-danger 
														<?php if((isset($success)) && ($success == 0)) { } else { ?> display-hide 
														<?php } ?>">
														<button class="close" data-close="alert"></button> Oops!! Something went wrong. Please try again.
											
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Add Category
                                                </label>
														<div class="col-md-9">
															<div class="input-group">
																<span class="input-group-addon">
																	<i class="fa fa-envelope"></i>
																</span>
																<input type="text" name="name" data-required="1" class="form-control" required />
															</div>
														</div>
													</div>
													<div class="form-group last">
														<label class="control-label col-md-3">Image </label>
														<div class="col-md-9">
															<div class="fileinput fileinput-new" data-provides="fileinput">
																<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																	<img src="" alt="" />
																</div>
																<div class="fileinput-preview fileinput-exists thumbnail" style="width: 335px; height: 255px;"></div>
																<div>
																	<span class="btn default btn-file">
																		<span class="fileinput-new"> Select image </span>
																		<span class="fileinput-exists"> Change </span>
																		<input type="file" name="image" style="width: 335px; height: 255px;">
																		</span>
																		<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="form-actions">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<input type="submit" class="btn green" name="submit_category" value="Submit Category">
																</div>
															</div>
														</div>
													</form>
													<!-- END FORM-->
												</div>
												<!-- END VALIDATION STATES-->
											</div>
										</div>
									</div>
								</div>
								<!-- END CONTENT BODY -->
							</div>
							<!-- END CONTENT -->
						</div>
						<!-- END CONTAINER -->
						<?php include('footer.php'); ?>
					</body>
					<!-- jQuery Form Validation code -->
					
				</html>
