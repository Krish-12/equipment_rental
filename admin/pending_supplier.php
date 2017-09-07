<?php
include('config.php');
	$user_id = $_SESSION['user_id'];
	$get_type = mysqli_query($mysqli,"select * from users where id='".$user_id."'");
	$get_count = mysqli_num_rows($get_type);
	$get_fetch_type = mysqli_fetch_array($get_type);

	if(isset($_GET['delete_id']))
	{
		$user_id = $_GET['delete_id'];
		
		$change_status = mysqli_query($mysqli,"DELETE FROM users where id='".$user_id."'");
		if($delete_user)
		{
			echo "<script>window.location.href='users.php'</script>";
		}
	}

$id = mysqli_query($mysqli,"select * from users");
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
		<title>Admin || Users</title>
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
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">Users</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>View</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Users -
                        <small>View</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-home font-dark"></i>
                                        <span class="caption-subject bold uppercase">View Users</span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                                        <thead>
                                            <tr>
												<th >Sl.No.</th>
                                                <th >Name</th>
                                                <th >Email</th>
												<th >Password</th>
												<th >Phone</th>
												<th >Category</th>
												<th >Status</th>
												<th >Action</th>
												<th >Action</th>
                                            </tr>
                                        </thead>
										<tbody id="all_data">
										<?php
												$i= 1;
												$query = mysqli_query($mysqli,"select * from users where user_type !='admin'and user_type='supplier' and status='pending'");
												while($fetch_details = mysqli_fetch_array($query))
												{
												?>
											<tr>
												
												<td><?php echo $i;?></td>
												<td><?php echo $fetch_details['fname'];?>&nbsp;&nbsp;<?php echo $fetch_details['lname'];?></td>
												<td><?php echo $fetch_details['email'];?></td>
												<td><?php echo $fetch_details['password'];?></td>
												<td><?php echo $fetch_details['phone'];?></td>
												<td><?php echo $fetch_details['category'];?></td>
												<td><?php echo $fetch_details['status'];?></td>
												<td>
												<?php
												$function = "change_status('".$fetch_details['id']."','".$fetch_details['status']."')";
												?>
													<button class="btn green btn-outline sbold uppercase" onclick="<?php echo $function;?>"><?php echo (($fetch_details['status']=='pending')?'active':'inactive');?></button>
												</td>
												<td >
													<a href="?delete_id=<?php echo $fetch_details['id']?>" class="btn red btn-outline sbold uppercase">Delete</a>
												</td>
												
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
		<script>
		function change_status(val1,val2)
		{
			$.post("ajax_status2.php", {status: val2,user_id: val1}, function(result){
				$("#all_data").html(result);
			});
		}
		</script>
    </body>

</html>