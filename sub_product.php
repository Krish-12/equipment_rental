<!DOCTYPE html>
<html lang="en-US"  data-menu="leftalign">
	<head>
		<link rel="shortcut icon" href="images/TG-Thumb.png" />
		<title>Car 4 Columns Classic &#8211; Grand Car Rental | Limousine Car Rental WordPress</title>
		<style type="text/css">
img.wp-smiley,
img.emoji 
{
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<?php
	include("metalinks.php");
?>
	</head>
	<body class="page-template page-template-car-list-thumb-l page-template-car-list-thumb-l-php page page-id-204">
		<input type="hidden" id="pp_menu_layout" name="pp_menu_layout" value="leftalign"/>
		<input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value="0"/>
		<input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value="0"/>
		<input type="hidden" id="pp_image_path" name="pp_image_path" value="wp-content/themes/grandcarrental/images/"/>
		<input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value=""/>
		<input type="hidden" id="pp_fixed_menu" name="pp_fixed_menu" value="1"/>
		<input type="hidden" id="tg_smart_fixed_menu" name="tg_smart_fixed_menu" value="0"/>
		<input type="hidden" id="tg_sidebar_sticky" name="tg_sidebar_sticky" value="1"/>
		<input type="hidden" id="pp_topbar" name="pp_topbar" value="1"/>
		<input type="hidden" id="post_client_column" name="post_client_column" value="4"/>
		<input type="hidden" id="pp_back" name="pp_back" value="Back"/>
		<input type="hidden" id="pp_page_title_img_blur" name="pp_page_title_img_blur" value=""/>
		<input type="hidden" id="tg_portfolio_filterable_link" name="tg_portfolio_filterable_link" value=""/>
		<input type="hidden" id="tg_flow_enable_reflection" name="tg_flow_enable_reflection" value=""/>
		<input type="hidden" id="tg_lightbox_skin" name="tg_lightbox_skin" value="metro-black"/>
		<input type="hidden" id="tg_lightbox_thumbnails" name="tg_lightbox_thumbnails" value="horizontal"/>
		<input type="hidden" id="tg_lightbox_thumbnails_display" name="tg_lightbox_thumbnails_display" value="1"/>
		<input type="hidden" id="tg_lightbox_opacity" name="tg_lightbox_opacity" value="0.8"/>
		<input type="hidden" id="tg_cart_url" name="tg_cart_url" value="cart/"/>
		<input type="hidden" id="tg_live_builder" name="tg_live_builder" value="0"/>
		<input type="hidden" id="pp_footer_style" name="pp_footer_style" value="3"/>
		<!-- Begin mobile menu -->
		<?php
			include ("header.php");
			if(isset($_POST['search']))
			{
				$cat = mysqli_real_escape_string($mysqli,$_POST['cat']);
				$sub_cat = mysqli_real_escape_string($mysqli,$_POST['sub_cat']);
				$key_words = mysqli_real_escape_string($mysqli,$_POST['key_words']);

				echo "<script>window.location.href='sub_product.php?cat=$cat&&sub_cat=$sub_cat&&key=$key_words'</script>";
			}
		?>
		<div id="page_caption" class="hasbg parallax  withtopbar" style="background-image:url(images/t3.jpg);height:500px;" >
			<div class="page_title_wrapper">
				<div class="page_title_inner">
					<div class="page_title_content">
						<h1 class ="withtopbar">Rent or Lease Equipments</h1>
						<div class="page_tagline">
			    			This is sample of page tagline and you can set it up using page option			    	
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Begin content -->
		<div id="page_content_wrapper" class="hasbg withtopbar ">
			<form id="car_search_form" name="car_search_form" method="POST">
				<div class="car_search_wrapper">
					<div class="one_fourth themeborder">
						<select onchange="get_subcat(this)" name="cat">
							<?php
								if(isset($_GET['cat']))
								{
									$cat_id = $_GET['cat'];
								}
								if(isset($_GET['sub_cat']))
								{
									$get_query = mysqli_query($mysqli,"select * from sub_category where sub_category_id='".$_GET['sub_cat']."'");
									$fetch_get = mysqli_fetch_array($get_query);
									$cat_id = $fetch_get['category_id'];
								}
							?>
							<option 
								<?php echo((isset($cat_id))?'':'selected disabled');?>>Choose Equipment
							</option>
							<?php
								$get_category = mysqli_query($mysqli, "select * from category");
								while($fetch_category= mysqli_fetch_array($get_category))
								{
							?>
							<option value="
								<?php echo $fetch_category['category_id']?>" 
								<?php echo((isset($cat_id)) && ($cat_id == $fetch_category['category_id'])?'selected':'');?>>
								<?php echo $fetch_category['category_name']?>
							</option>
							<?php
								}
							?>
						</select>
						<span class="ti-angle-down"></span>
					</div>
					<div class="one_fourth themeborder">
						<select class="cat_id" name="sub_cat" id="value">
							<?php
								if(isset($_GET['sub_cat']))
									{
									$get_details = mysqli_query($mysqli,"select * from sub_category where sub_category_id='".$_GET['sub_cat']."'");
									$fetch_details = mysqli_fetch_array($get_details);
									$main_cat = $fetch_details['category_id'];
									}
								$select_sub = mysqli_query($mysqli,"select * from sub_category where category_id='".$main_cat."'");
								while($fetch_sub = mysqli_fetch_array($select_sub))
									{
							?>
							<option value"
								<?php echo $fetch_sub['sub_category_id'];?>" 
								<?php echo((isset($_GET['sub_cat'])) && ($_GET['sub_cat'] == $fetch_sub['sub_category_id'])?'selected':'');?>>
								<?php echo $fetch_sub['sub_category_name'];?>
							</option>
								<?php
									}
								?>
							<option 
								<?php echo((isset($_GET['sub_cat']))?'':'selected disabled');?>>Choose Equipment Type
							</option>
						</select>
						<span class="ti-angle-down"></span>
					</div>
					<div class="one_fourth themeborder">
						<input type="text" name="key_words" placeholder="Type Here" value="
							<?php echo((isset($_GET['key']))?$_GET['key']:'');?>">
						</div>
						<div class="one_fourth last themeborder">
							<input type="submit" class="button" name="search" value="Search"/>
						</div>
					</div>
				</form>
				<!-- Begin content -->
				<div class="inner">
					<div class="inner_wrapper nopadding">
						<div id="page_main_content" class="sidebar_content left_sidebar fixed_column">
							<div class="standard_wrapper">
								<div id="portfolio_filter_wrapper" class="gallery classic two_cols portfolio-content section content clearfix" data-columns="3">
											<?php
											
											if(isset($_GET['sub_cat']))
											{
												$fetch_sub_cat_id = $_GET['sub_cat'];
												$data = "select * from service where sub_cat_id = '$fetch_sub_cat_id'";
											}
											if(isset($_GET['key']))
											{
												$cat = $_GET['cat'];
												$sub_cat = $_GET['sub_cat'];
												$key = $_GET['key'];

												$data = "select * from service where category_id = '$cat' and sub_cat_id = '$sub_cat' and service_name like '%".$key."%'";
											}
											$subcat_details = mysqli_query($mysqli,$data);
											$row = mysqli_num_rows($subcat_details);
											if($row > 0)
											{
											while($fetch_details = mysqli_fetch_array($subcat_details))
												{
											?>
									<div class="car_list_wrapper floatleft themeborder">
										<div class="one_third">
											<?php
												$image_id=$fetch_details['service_id'];
												$service_image = mysqli_query($mysqli,"select * from service_image where service_id = '$image_id' " );
												$fetch_images = mysqli_fetch_array($service_image);
											?>
											<a class="car_image" href="view_product.php?id=
												<?php echo $fetch_details['service_id'];?>">
												<img src="admin/uploads/
													<?php echo $fetch_images['service_image'];?>"style="height:230px;" alt="" />
												</a>
											</div>
											<div class="two_third last">
												<div class="car_attribute_wrapper">
													<h3>
														<a href="view_product.php?id=
															<?php echo $fetch_details['service_id'];?>">
															<?php echo $fetch_details['service_name'];?>
														</a>
													</h3>
													<div class="car_attribute_rating">
														<div class="br-theme-fontawesome-stars-o">
															<div class="br-widget">
																<a href="javascript:;" class="br-selected"></a>
																<a href="javascript:;" class="br-selected"></a>
																<a href="javascript:;" class="br-selected"></a>
																<a href="javascript:;" class="br-selected"></a>
																<a href="javascript:;"></a>
															</div>
														</div>
														<div class="car_attribute_rating_count">
														4&nbsp;
														reviews					   			
												</div>
													</div>
													<br class="clear"/>
												</div>
												<div class="car_attribute_price">
													<div class="car_attribute_price_day two_cols">
														<span class="single_car_currency">$</span>
														<span class="single_car_price">
															<?php echo $fetch_details['price'];?>
														</span>
														<span class="car_unit_day">Per Day</span>
													</div>
												</div>
												<ul class="single_car_departure_wrapper themeborder">
													<li>
														<div class="single_car_departure_content full_width">
															<a href="view_product.php?id=
																<?php echo $fetch_details['service_id'];?>"  style="color:black;">
																<?php echo substr($fetch_details['description'],0,100);?>....
													
															</a>
														</div>
													</li>
												</ul>
											</div>
										</a>
									</div>
												<?php
													}
												}
												else
												{
												?>
									<div id="1504684554461393832" class="alert_box notice" style="background:white;border:2px solid red;">
										<h3 style="color:red;">
											<i class="fa fa-exclamation-triangle"></i>Oops!!!    No Services Found
										</h3>
									</a>
								</div>
											<?php
												}
											?>
							</div>
							<br class="clear"/>
						</div>
					</div>
					<div class="sidebar_wrapper left_sidebar">
						<div class="sidebar">
							<div class="content">
								<ul class="sidebar_widget">
									<li id="text-4" class="widget widget_text">
										<h2 class="widgettitle">For More Informations</h2>
										<div class="textwidget">
											<span class="ti-mobile" style="margin-right:10px;"></span>1-567-124-44227

											
											<br/>
											<span class="ti-alarm-clock" style="margin-right:10px;"></span>Mon - Sat 8.00 - 18.00
										
										</div>
									</li>
									<li id="grandcarrental_social_profiles_posts-3" class="widget grandcarrental_Social_Profiles_Posts">
										<h2 class="widgettitle">Connect with Us</h2>
										<div class="social_wrapper shortcode light small">
											<ul>
												<li class="facebook">
													<a target="_blank" title="Facebook" href="#">
														<i class="fa fa-facebook"></i>
													</a>
												</li>
												<li class="twitter">
													<a target="_blank" title="Twitter" href="https://twitter.com/#">
														<i class="fa fa-twitter"></i>
													</a>
												</li>
												<li class="youtube">
													<a target="_blank" title="Youtube" href="#">
														<i class="fa fa-youtube"></i>
													</a>
												</li>
												<li class="pinterest">
													<a target="_blank" title="Pinterest" href="https://pinterest.com/#">
														<i class="fa fa-pinterest"></i>
													</a>
												</li>
												<li class="instagram">
													<a target="_blank" title="Instagram" href="https://instagram.com/">
														<i class="fa fa-instagram"></i>
													</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
include ("footer.php");
?>
		<script>
			function get_subcat(e){
				var affiliate_id = $(e).val();

				$.ajax({
				  type: 'post',
				  url: 'ajax_subcat.php',
				  data:{
					catid:affiliate_id
				  },
				  success: function (response){
				  document.getElementById("value").innerHTML=response;
				
				 }
				});
							}
		</script>
		<script type="text/javascript">(function() {function addEventListener(element,event,handler) {
	if(element.addEventListener) {
		element.addEventListener(event,handler, false);
	} else if(element.attachEvent){
		element.attachEvent('on'+event,handler);
	}
}function maybePrefixUrlField() {
	if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
		this.value = "http://" + this.value;
	}
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if( urlFields && urlFields.length > 0 ) {
	for( var j=0; j < urlFields.length; j++ ) {
		addEventListener(urlFields[j],'blur',maybePrefixUrlField);
	}
}/* test if browser supports date fields */
var testInput = document.createElement('input');
testInput.setAttribute('type', 'date');
if( testInput.type !== 'date') {

	/* add placeholder & pattern to all date fields */
	var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
	for(var i=0; i
			
			<dateFields.length; i++) {
		if(!dateFields[i].placeholder) {
			dateFields[i].placeholder = 'YYYY-MM-DD';
		}
		if(!dateFields[i].pattern) {
			dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
		}
	}
}

})();
			
			</script>
			<script type='text/javascript'>
/* 
				
				<![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/themes.themegoods.com\/grandcarrental\/demo\/wp-json\/","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"cached":"1"};
/* ]]> */

			
			</script>
			<script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/plugins/contact-form-7/includes/js/scripts.js'></script>
			<script type='text/javascript'>
/* 
				
				<![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/grandcarrental\/demo\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/grandcarrental\/demo\/car-list-thumbnail-left-sidebar\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/themes.themegoods.com\/grandcarrental\/demo\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */

			
			</script>
		</body>
	</html>
	<!-- End content -->
	<!-- Performance optimized by W3 Total Cache. Learn more: https://www.w3-edge.com/products/

Page Caching using disk: enhanced
Content Delivery Network via themegoodsthemes-pzbycso8wng.stackpathdns.com

 Served from: themes.themegoods.com @ 2017-08-31 05:33:45 by W3 Total Cache -->