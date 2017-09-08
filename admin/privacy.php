<?php
include("config.php");
	$user_id = $_SESSION['user_id'];
	$privacy_id = mysqli_query($mysqli,"select * from privacy");

if(isset($_POST['submit_category']))

{
$header =$_POST['header'];
$body =$_POST['body'];

	$add_about_details= mysqli_query($mysqli, "update privacy set header='".$header."',body='".$body."'where privacy_id='1'");
	if($add_about_details)
		{
		echo "<script>window.location.href='privacy.php'</script>";
		}
	else
		{
		echo "<script>alert('OOPS!! PLEASE TRY AGAIN')</script>";
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
				<title>ADMIN || Privacy & Policy</title>
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
										<span>Privacy & Policy</span>
									</li>
								</ul>
							</div>
							<!-- END PAGE BAR -->
							<!-- BEGIN PAGE TITLE-->
							<h3 class="page-title">Privacy & Policy
                        
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
												<span class="caption-subject font-dark sbold uppercase">Privacy & Policy</span>
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

													<?php
												while($fetch_details = mysqli_fetch_array($privacy_id))
												{
											?>


													<div class="form-group">
														<label class="control-label col-md-3">Header
														</label>
														<div class="col-md-9">
															<div class="input-group">
																<span class="input-group-addon">
																	<i class="fa fa-envelope"></i>
																</span>
																<input type="text" name="header" class="form-control"value="<?php echo $fetch_details['header']?>" />
															</div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-3">Body
														</label>
														<div class="col-md-9">
															<div class="input-group">
																<span class="input-group-addon">
																	<i class="fa fa-envelope"></i>
																</span>
																<textarea name="body" class="ckeditor form-control"  rows="6" data-error-container="#editor2_error" ><?php echo $fetch_details['body']?></textarea>
																<div id="editor2_error"> </div>
															</div>
														</div>
													</div>
													 <?php
											}
											?>
												</div>
													<div class="form-actions">
														<div class="row">
															<div class="col-md-offset-3 col-md-3">
																<input type="submit" class="btn green" name="submit_category" value="Update Terms">
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
