<!DOCTYPE html>
<html lang="en-US"  data-menu="leftalign">
	<head>
		<link rel="shortcut icon" href="images/TG-Thumb.png" />
		<title>Car 4 Columns Classic &#8211; Grand Car Rental | Limousine Car Rental WordPress</title>
		<style type="text/css">
img.wp-smiley,
img.emoji {
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
	<body class="page-template page-template-car-4-classic page-template-car-4-classic-php page page-id-172">
		<input type="hidden" id="pp_menu_layout" name="pp_menu_layout" value="leftalign"/>
		<input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value="0"/>
		<input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value="0"/>
		<input type="hidden" id="pp_image_path" name="pp_image_path" value="#"/>
		<input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value="#"/>
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
		<input type="hidden" id="tg_cart_url" name="tg_cart_url" value="#"/>
		<input type="hidden" id="tg_live_builder" name="tg_live_builder" value="0"/>
		<input type="hidden" id="pp_footer_style" name="pp_footer_style" value="3"/>
		<!-- Begin mobile menu -->
		<!-- Begin template wrapper -->
		<div id="wrapper" class="hasbg transparent">
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
			<div id="page_caption" class="hasbg parallax  withtopbar  " style="background-image:url(images/sony-surgical-camera-compatible-HDMD-1080P.jpg);height:500px;" >
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
				<form id="car_search_form" name="car_search_form" method="get" action="#">
					<div class="car_search_wrapper">
						<div class="one_fourth themeborder">
							<select id="brand" name="brand">
								<option value="">Any Brand</option>
								<option value="Audi">Electronic</option>
								<option value="BMW">computer</option>
								<option value="Lexus">Electrical</option>
								<option value="Mercedes Benz">Dental</option>
								<option value="MINI">Laboratory</option>
								<option value="Porsche">Construction</option>
							</select>
							<span class="ti-angle-down"></span>
						</div>
						<div class="one_fourth themeborder">
							<select id="type" name="type">
								<option value="">Any Type</option>
								<option value="Coupe">Electronic</option>
								<option value="Sedan">computer</option>
								<option value="SUV">Laboratory</option>
							</select>
							<span class="ti-angle-down"></span>
						</div>
						<div class="one_fourth themeborder">
							<select id="sort_by" name="sort_by">
								<option value="price_low">Price Low to High</option>
								<option value="price_high">Price High to Low</option>
								<option value="model">Sort By Model</option>
								<option value="popular">Sort By Popularity</option>
								<option value="review">Sort By Review Score</option>
							</select>
							<span class="ti-exchange-vertical"></span>
						</div>
						<div class="one_fourth last themeborder">
							<input id="car_search_btn" type="submit" class="button" value="Search"/>
						</div>
					</div>
				</form>
				<!-- Begin content -->
				<div class="inner">
					<div class="inner_wrapper nopadding">
						<div id="page_main_content" class="sidebar_content full_width fixed_column">
							<div class="standard_wrapper">
								<div id="portfolio_filter_wrapper" class="gallery classic four_cols portfolio-content section content clearfix" data-columns="3">
										<?php
											$fetch_cat_id = $_GET['id'];
											$cat_details = mysqli_query($mysqli,"select * from sub_category where category_id = '$fetch_cat_id' " );
											while($fetch_details = mysqli_fetch_array($cat_details))
												{
										
										?>
									<div class="element grid classic4_cols animated2">
										
										<div class="one_fourth gallery4 classic static filterable portfolio_type themeborder" data-id="post-2">
											<a class="car_image" href="sub_product.php?id=<?php echo $fetch_details['sub_category_id'];?>">
												<img src="admin/uploads/<?php echo $fetch_details['sub_category_image'];?>" style="height:250px;"alt="BMW 3 Series" />
											</a>
											<div class="portfolio_info_wrapper" style="height:32px;">
												<div class="">													
														<h5 style="font-size:18px;"><a href="sub_product.php?id=<?php echo $fetch_details['sub_category_id'];?>"><?php echo $fetch_details['sub_category_name'];?></a></h5>
													</a>												
													<br class="clear"/>
												</div>												
											</div>
										</div>
										
									</div>
									<?php
											}
										?>	
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			
		
			<?php
include ("footer.php");
?>
		</div>
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
		</body>
	</html>
	<!-- End content -->
	<!-- Performance optimized by W3 Total Cache. Learn more: https://www.w3-edge.com/products/

Page Caching using disk: enhanced
Content Delivery Network via themegoodsthemes-pzbycso8wng.stackpathdns.com

 Served from: themes.themegoods.com @ 2017-08-30 11:54:10 by W3 Total Cache -->