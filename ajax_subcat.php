<?php
	include("connection.php");
	$catid = $_POST['catid'];

	$query_z = mysqli_query($mysqli,"SELECT * FROM sub_category WHERE category_id='$catid'");
	?>

	<option selected disabled>Choose Equipment Type</option>

	<?php
	while($fetch_all_subcat = mysqli_fetch_array($query_z)){
	?>
		<option value="<?php echo $fetch_all_subcat['sub_category_id'];?>">
			<?php echo $fetch_all_subcat['sub_category_name'];?>
		</option>
	<?php
	}
?>