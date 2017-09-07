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
$user_id = $_POST['user_id'];
$update_query = mysqli_query($mysqli,"update users set status='$result' where id='$user_id'");
if($update_query)
{
	$i= 1;
	$query = mysqli_query($mysqli,"select * from users where user_type != 'admin'and user_type='supplier' and status='inactive'");

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
		<button class="btn green btn-outline sbold uppercase" onclick="<?php echo $function;?>"><?php echo (($fetch_details['status']=='active')?'inactive':'active');?></button>
	</td>
	<td >
		<a href="?delete_id=<?php echo $fetch_details['id']?>" class="btn red btn-outline sbold uppercase">Delete</a>
	</td>
	
</tr>
	<?php
	$i++;
		}
		?>
<?php
}
?>