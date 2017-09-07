<?php
include("config.php");
$status = $_POST['status'];
if($status == 'active')
{
	$result = "inactive";
}
else if($status == 'inactive')
{
	$result = "active";
}
$user_id = $_POST['ser_id'];
$update_query = mysqli_query($mysqli,"update service set status='$result' where service_id='$user_id'");
if($update_query)
{
?>
<?php
$i= 1;
$get_details = mysqli_query($mysqli,"select * from service");
while($fetch_details = mysqli_fetch_array($get_details))
{
?>
	<tr>
												<td><?php echo $i;?></td>
												<td>
											<?php
												$category_id = $fetch_details['category_id'];
												$get_category_query = mysqli_query($mysqli,"select * from category where category_id='".$category_id."'");
												$get_fetch_category_name = mysqli_fetch_array($get_category_query);
												echo $get_fetch_category_name['category_name']
											?>		
												</td>

												<td>
											<?php
												$sub_cat_id = $fetch_details['sub_cat_id'];
												$get_subcategory_query = mysqli_query($mysqli,"select * from sub_category where sub_category_id='".$sub_cat_id."'");
												$get_fetch_subcategory_name = mysqli_fetch_array($get_subcategory_query);
												echo $get_fetch_subcategory_name['sub_category_name']
											?>		
												</td>

												<td><?php echo $fetch_details['service_name'];?></td>
												
												<td><?php echo substr($fetch_details['description'],0,50);?></td>
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
											
												
												<td><?php echo $fetch_details['price'];?></td>
												<td><?php echo $fetch_details['status'];?></td>
												<td>
												<?php
												$function = "change_status('".$fetch_details['service_id']."','".$fetch_details['status']."')";
												?>
													<button class="btn green btn-outline sbold uppercase" onclick="<?php echo $function;?>"><?php echo (($fetch_details['status']=='active')?'inactive':'active');?></button>
												</td>
												<td><a href="?delete_id=<?php echo $fetch_details['service_id']?>"" class="btn red btn-outline sbold uppercase">Delete</a></td>
                                        
											</tr>
	<?php
	$i++;
}
?>
<?php
}
?>