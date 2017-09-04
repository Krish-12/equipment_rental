<?php
	include("config.php");
	$service_id = $_GET['service_id'];
	$get_category = mysqli_query($mysqli,"select * from  service where service_id='".$service_id."'");
	$get_fetch_category = mysqli_fetch_array($get_category);

	if(isset($_POST['submit_service']))

{
		$cat_id= mysqli_real_escape_string($mysqli,$_POST['cat_name']);
		$sub_cat_id= mysqli_real_escape_string($mysqli,$_POST['sub_cat_name']);
		$ser_name =mysqli_real_escape_string($mysqli,$_POST['ser_name']);
		$ser_desc =mysqli_real_escape_string($mysqli,$_POST['desc']);
		$ser_price =mysqli_real_escape_string($mysqli,$_POST['price']);
		
			
		if($_FILES['ser_image']['name']==''){
		$save_service_image=$image_same;
	}else{
		$tmp_image = $_FILES['ser_image']['tmp_name'];
		$image = $_FILES['ser_image']['name'];
	}
	$update_service = mysqli_query($mysqli,"UPDATE service set category_id='".$cat_id."',sub_cat_id='".$sub_cat_id."',service_name='".$ser_name."',description='".$ser_desc."',price='".$ser_price."' where service_id='".$service_id."'");

	if($update_service){
		for($i=0;$i<sizeof($image);$i++){
			$image[$i];
			$save_service_image = rand(99,9999).$image[$i];
			move_uploaded_file($tmp_image[$i] , "uploads/".$save_service_image);	
			$add_pro_image = mysqli_query($mysqli,"Insert into service_image values('','$service_id','$save_service_image')");
		}
		if($add_ser_image){
				$success == 1;
				echo "<script>window.location.href='view_service.php'</script>";
			}
			else
			{
				$success == 0;
				echo "<script>window.location.href='view_service.php'</script>";
			}
	}else{

		$success == 2;
	}
	
	}

	if(isset($_GET['delete_id'])){
	$get_image_id = $_GET['delete_id'];
	$delete_image = mysqli_query($mysqli,"delete from service_image where id='$get_image_id'");
	$service_id = $_GET['service_id'];

	if($delete_image){
		echo "<script>window.location.href='edit_product.php?service_id='".$service_id."'&data=success'</script>";
	}else{
		echo "<script>window.location.href='edit_product.php?service_id='".$service_id."'&data=error'</script>";
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
        <title>ADMIN || Edit Service</title>
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
                                <span>Edit Service</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Edit Service
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
                                        <span class="caption-subject font-dark sbold uppercase">Edit Service</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form  id="form_sample_3" class="form-horizontal" method="POST" enctype="multipart/form-data">
									<?php
										$get_user_details = mysqli_query($mysqli,"select * from service where service_id='".$service_id."'");
										$fetch_details = mysqli_fetch_array($get_user_details);
									?>
                                        <div class="form-body">
                                            <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> You have some form errors. Please check below.
											</div>
                                            <div class="alert alert-success display-hide">
                                                <button class="close" data-close="alert"></button> Your form validation is successful!
											</div>
											<div class="alert alert-success <?php if((isset($success)) && ($success == 1)) { } else { ?> display-hide <?php } ?>">
                                                <button class="close" data-close="alert"></button> You have successfully Added .
											</div>
                                            <div class="alert alert-danger <?php if((isset($success)) && ($success == 0)) { } else { ?> display-hide <?php } ?>">
                                                <button class="close" data-close="alert"></button> You have successfully Added ..
											</div>
											 <div class="alert alert-danger <?php if((isset($success)) && ($success == 2)) { } else { ?> display-hide <?php } ?>">
                                                <button class="close" data-close="alert"></button> Oops!! Something went wrong. Please try Again.
											</div>

								<div class="form-group ">
                                   <label class="control-label col-md-3">Select Category : - </label>
                                   <div class="col-md-9">
										<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-envelope"></i>
												</span>
											<select name="cat_name" data-required="1" class="form-control" onchange="choose_sub(this.value);"/>
												<?php
													$get_category_query = mysqli_query($mysqli,"select * from category");
													while($get_fetch_category = mysqli_fetch_array($get_category_query))
													{
													?>
														<option value="<?php echo $get_fetch_category['category_id'];?>" <?php echo(($get_fetch_category['category_id']==$fetch_details['category_id'])?'selected':'');?>><?php echo $get_fetch_category['category_name']?></option>
													<?php
													}
													?>
											</select>
										</div>
									</div>
								</div>  
                                      
									  <div class="form-group ">
										<label class="control-label col-md-3">Sub Category : </label>
										<div class="col-md-9">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-envelope"></i>
												</span>
												<select name="sub_cat_name" data-required="1" class="form-control subcat" required />
												<?php
												$select_sub = mysqli_query($mysqli,"select * from sub_category where sub_category_id='".$fetch_details['sub_cat_id']."'");
												$fetch_sub = mysqli_fetch_array($select_sub);
												?>
													<option value="<?php echo $fetch_sub['sub_category_id'];?>" selected><?php echo $fetch_sub['sub_category_name'];?></option>
												</select>
											</div>
										</div>
									</div>

											
											<div class="form-group">
                                                <label class="control-label col-md-3">Service Name : -
                                                </label>
                                                <div class="col-md-9">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
														</span>
														<input type="text" name="ser_name" data-required="1" class="form-control" value="<?php echo $fetch_details['service_name']?>" />
													</div>
												</div>
                                            </div>

											<div class="form-group">
                                                <label class="control-label col-md-3">Description : -
                                                </label>
                                                <div class="col-md-9">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
														</span>
														<textarea name="desc" data-required="1" class="form-control"><?php echo $fetch_details['description'];?></textarea>
													</div>
												</div>
                                            </div>

											<div class="form-group">
                                                <label class="control-label col-md-3">Service Price : -
                                                </label>
                                                <div class="col-md-9">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
														</span>
														<input type="text" name="price" data-required="1" class="form-control" value="<?php echo $fetch_details['price']?>" />
													</div>
												</div>
                                            </div>


											<div class="form-group last">
												<label class="control-label col-md-3">Service Image </label>
												<div class="col-md-9 ">
													<div class="addsz">
													<div class="fileinput fileinput-new" data-provides="fileinput">
														<?php
														if($service_id)
														{
															$select_images = mysqli_query($mysqli,"select * from service_image where service_id = '".$service_id."'");
															while($fetch_images = mysqli_fetch_array($select_images))
															{
														?>
														<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
															<img src="uploads/<?php echo $fetch_images['service_image'];?>" alt="" />
															<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
														</div>
														<div class="fileinput-preview fileinput-exists thumbnail" style="width: 335px; height: 255px;"> 
														</div>

														<div>
															<span class="btn default"  style="margin-bottom:17px !important;">
																<a href="?delete_id=<?php echo $fetch_images['id'];?>&service_id=<?php echo $service_id;?>" class="btn"> Delete </a>																	
															 </span>
															<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
														</div>
														
														<?php
															}
														}else{
														?>
														<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
															<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
														</div>
														<div class="fileinput-preview fileinput-exists thumbnail" style="width: 335px; height: 255px;"> </div>
														<div>
															<span class="btn default btn-file">
																<span class="fileinput-new" > Select image </span>
																<span class="fileinput-exists"> Change </span>
																<input type="file"  name="ser_image[]"  style="width: 335px; height: 255px;"> </span>
															<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
														</div>
														<?php
														}
														?>
														
													</div>
													</div>
												<div class="controls">
														<div class="add_somethin btn green" style="margin-top:20px;" >Add More Image</div>	
													</div>
												
												
											</div>

                                        </div>
										

                                      
										
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <input type="submit" class="btn green" name="submit_service" value="Submit Services">
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

		<script>
							function choose_sub(e){
								$.post("ajax_subcat.php", {cat_id: e}, function(result){
									//alert(result);
									$(".subcat").html(result);
								});
							}
						</script>
    </body>
	<!-- jQuery Form Validation code -->
		
</html>
