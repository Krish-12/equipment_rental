<?php
include("config.php");
$status = $_POST['status'];
if($status == 'ACTIVE')
{
	$result = "INACTIVE";
}
else if($status == 'INACTIVE')
{
	$result = "ACTIVE";
}
$user_id = $_POST['user_id'];
$update_query = mysqli_query($mysqli,"update users set status='$result' where id='$user_id'");
if($update_query)
{
?>
<tr>
	<?php
	$i= 1;
	$query = mysqli_query($mysqli,"select * from users where user_type != 'ADMIN'");

		while($fetch_details = mysqli_fetch_array($query))
		{
		?>
		<td><?php echo $i;?></td>
		<td><?php echo $fetch_details['fname'];?>&nbsp;&nbsp;<?php echo $fetch_details['lname'];?></td>
		<td><?php echo $fetch_details['email'];?></td>
		<td><?php echo $fetch_details['password'];?></td>
		<td><?php echo $fetch_details['phone'];?></td>
		<td><?php echo $fetch_details['category'];?></td>
		<td><?php echo $fetch_details['status'];?></td>
		<td>
			<button class="btn green btn-outline sbold uppercase" onclick="change_status();"><?php echo (($fetch_details['status']=='ACTIVE')?'INACTIVE':'ACTIVE');?></button>
			<input type="hidden" value="<?php echo $fetch_details['status']?>" class="stat">
			<input type="hidden" value="<?php echo $fetch_details['id']?>" class="user_id">
		</td>
		<td >
			<a href="?delete_id=<?php echo $fetch_details['id']?>" class="btn red btn-outline sbold uppercase">Delete</a>
		</td>
		<?php
	$i++;
		}
		?>
	</tr>
<?php
}
?>