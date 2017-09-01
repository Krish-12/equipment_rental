<?php
	include("config.php");

$sub_category_id = $_GET['sub_category_id'];
$get_category =mysqli_query($mysqli,"select * from  sub_category where sub_category_id='".$sub_category_id."'");
$get_fetch_category = mysqli_fetch_array($get_category);
$image = $get_fetch_category['sub_category_image'];


if(isset($_POST['submit_category']))

{
		$scat_name =$_POST['sname'];
		$category_id = $_POST['category_id'];


		if($_FILES['image']['name'] == '')
	{
		$savdse_image = $image;
		
	}
	else
	{
		$tmp_image = $_FILES['image']['tmp_name'];
		$image = $_FILES['image']['name'];
		$savdse_image = rand(99,9999).$image;
		move_uploaded_file($tmp_image,"uploads/".$savdse_image);
		
	}	
		$add_sub_category_details= mysqli_query($mysqli, "update sub_category set sub_category_name='".$scat_name."',sub_category_image='".$savdse_image."',category_id='".$category_id."'where sub_category_id='".$sub_category_id."'");

		if($add_sub_category_details)
		{
		echo "<script>window.location.href='view_sub_category.php'</script>";
		}
		else
		{
		echo "<script>alert('OOPS!! PLEASE TRY AGAIN')</script>";
		}
	
	}
?>




<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <title>ADMIN || Edit Sub Category</title>
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
                                <span> Edit Sub Category</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Edit Sub Category
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
                                        <span class="caption-subject font-dark sbold uppercase"> Edit Sub Category</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form  id="form_sample_3" class="form-horizontal" method="POST" enctype="multipart/form-data">
									<?php
										$get_user_details = mysqli_query($mysqli,"select * from sub_category where sub_category_id='".$sub_category_id."'");
										$fetch_details = mysqli_fetch_array($get_user_details);

									?>

                                       <!-- <div class="form-body">
                                            <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> You have some form errors. Please check below.
											</div>
                                            <div class="alert alert-success display-hide">
                                                <button class="close" data-close="alert"></button> Your form validation is successful!
											</div>
											<div class="alert alert-success <?php if((isset($success)) && ($success == 1)) { } else { ?> display-hide <?php } ?>">
                                                <button class="close" data-close="alert"></button> You have successfully Updated your Password. .
											</div>
                                            <div class="alert alert-danger <?php if((isset($success)) && ($success == 0)) { } else { ?> display-hide <?php } ?>">
                                                <button class="close" data-close="alert"></button> Oops!! Something went wrong. Please try again.
											</div>
											 <div class="alert alert-danger <?php if((isset($success)) && ($success == 2)) { } else { ?> display-hide <?php } ?>">
                                                <button class="close" data-close="alert"></button> Oops!! Something went wrong. Please Check Your Password Again.
											</div>-->


										<div class="form-group ">
											<label class="control-label col-md-3"> Category :  </label>
												<div class="col-md-9">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
														</span>
													<select name="category_id" data-required="1" class="form-control" />
														<?php
															$category_id=$get_fetch_category['category_id'];
															$get_category_query = mysqli_query($mysqli,"select * from category where category_id='".$category_id."'");
															while($get_fetch_category = mysqli_fetch_array($get_category_query))
															{
															?>
																<option value="<?php echo $get_fetch_category['category_id'];?>" ><?php echo $get_fetch_category['category_name'];?></option>
															<?php
															}
															?>
															<?php
																$get_category_query = mysqli_query($mysqli,"select * from category");
																while($get_fetch_category = mysqli_fetch_array($get_category_query))
															{
															?>
																<option value="<?php echo $get_fetch_category['category_id'];?>"><?php echo $get_fetch_category['category_name']?></option>
															<?php
															}
															?>
															
														</select>
													</div>
												</div>
										</div>  											
                                      
											
										<div class="form-group">
                                                <label class="control-label col-md-3"> Sub Category</label>
                                                <div class="col-md-9">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
														</span>
													<input type="text" name="sname" data-required="1" class="form-control" value="<?php echo $fetch_details['sub_category_name']?>">
													</div>
												</div>
                                            </div>
											<div class="form-group last">
													<label class="control-label col-md-3">Sub Category Image </label>
													<div class="col-md-9">
														<div class="fileinput fileinput-new" data-provides="fileinput">
															<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																<img src="uploads/<?php echo $fetch_details['sub_category_image']?>" alt="" /> </div>
															<div class="fileinput-preview fileinput-exists thumbnail" style="width: 335px; height: 255px;"> </div>
															<div>
																<span class="btn default btn-file">
																	<span class="fileinput-new"> Select image </span>
																	<span class="fileinput-exists"> Change </span>
																	
																	<input type="file" name="image" style="width: 335px; height: 255px;" value> </span>
																<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
															</div>
														</div>
													</div>
													</div>
										

                                      
										
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <input type="submit" class="btn green" name="submit_category" value="Update Category">
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
