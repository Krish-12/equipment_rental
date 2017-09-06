<!DOCTYPE html>
<html lang="en-US"  data-menu="leftalign">
	<head>
		<link rel="shortcut icon" href="images/TG-Thumb.png" />
		<title>Grand Car Rental | Limousine Car Rental WordPress &#8211; Just another WordPress site</title>		
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
		<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
		<?php
include("metalinks.php");
?>
	</head>
	<body class="home page-template-default page page-id-3075 ppb_enable">
		<input type="hidden" id="pp_menu_layout" name="pp_menu_layout" value="leftalign"/>
		<input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value="0"/>
		<input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value="0"/>
		<input type="hidden" id="pp_image_path" name="pp_image_path" value="images/"/>
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
		<div class="ppb_wrapper  ">
			<div  class="one withsmallpadding ppb_car_search_background parallax withbg " style="padding-top: 150px !important;text-align:center;height:500px;background-image:url(images/manufacturing-slide01.jpg);background-position: center center;margin-top:40px;color:#ffffff;" >
				<div class="overlay_background" style="background:#000000;background:rgb(0,0,0,0.2);background:rgba(0,0,0,0.2);"></div>
				<div class="center_wrapper">
					<div class="inner_content">
						<div class="standard_wrapper">
							<h2 class="ppb_title" style="color:#ffffff;">Rent or Lease Equipments</h2>
							<div class="page_tagline" style="color:#ffffff;">First Class Equipments Rental Services</div>
							<form class="car_search_form" method="POST">
								<div class="car_search_wrapper">
									<div class="one_fourth themeborder">
										<select onchange="get_subcat(this)" name="cat">
											<option selected disabled>Choose Equipment</option>
											<?php
												$get_category = mysqli_query($mysqli, "select * from category");
												while($fetch_category= mysqli_fetch_array($get_category))
												{
											?>
											<option value="<?php echo $fetch_category['category_id']?>">
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
											<option selected disabled>Choose Equipment Type</option>
										</select>
										<span class="ti-angle-down"></span>
									</div>
									<div class="one_fourth themeborder">
										<input type="text" name="key_words" placeholder="Type Here">										
									</div>
									<div class="one_fourth last themeborder">
										<input type="submit" class="button" name="search" value="Search"/>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div  class="one withsmallpadding ppb_header " style="text-align:center;padding:60px 0 60px 0;" >
				<div class="standard_wrapper">
					<div class="page_content_wrapper">
						<div class="inner">
							<div style="margin:auto;width:100%">
								<h2 class="ppb_title" style="">First Class Equipments Rental &amp; Best Services</h2>
								<div class="page_tagline" style="">We offer professional Equipments rental &amp; Best services in our range of high-end Instruments</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<form method="POST">
			<div  class="ppb_car_brand_grid one nopadding " >
				<div class="page_content_wrapper page_main_content sidebar_content full_width fixed_column">
					<div class="standard_wrapper">
						<div id="15040201731700964661" class="portfolio_filter_wrapper gallery grid portrait three_cols" data-columns="3">
							<?php
							$select_query = mysqli_query($mysqli,"select * from category");
							while($fetch_query = mysqli_fetch_array($select_query)){
							?>
							<div class="element grid classic3_cols animated1">
							<a href="product.php?cat=<?php echo $fetch_query['category_id'];?>" style="color:white;">
								<div class="one_third gallery3 grid static filterable portfolio_type themeborder" style="background-image:url(admin/uploads/<?php echo $fetch_query['category_image'];?>);">									
									<div class="portfolio_info_wrapper">
										<h3><?php echo $fetch_query['category_name'];?></h3>
									</div>
								</div>
								</a>
							</div>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
			</form>
			<div  class="one withsmallpadding ppb_header " style="text-align:center;padding:60px 0 60px 0;background-color:#5856d6;color:#ffffff;" >
				<div class="standard_wrapper">
					<div class="page_content_wrapper">
						<div class="inner">
							<div style="margin:auto;width:100%">
								<h2 class="ppb_title" style="color:#ffffff;">Why Choose Us</h2>
								<div class="page_tagline" style="color:#ffffff;">Explore our first class limousine &amp; Equipment rental services</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div  class="one withsmallpadding ppb_text" style="padding-top:0 !important;text-align:center;padding:10px 0 10px 0;background-color:#5856d6;color:#ffffff !important;" >
				<div class="standard_wrapper">
					<div class="page_content_wrapper">
						<div class="inner">
							<div style="margin:auto;width:100%">
							</p>
							<div class="one_third " style="">
								<span class="ti-car" style="display: block; font-size: 50px; margin-bottom: 20px;"></span>
							</p>
							<h4 style="color: #fff;">Variety of Brands</h4>
							<p>Find the exact equipment you need and tell us when and where you need it.</p>
						</div>
						<div class="one_third " style="">
							<span class="ti-face-smile" style="display: block; font-size: 50px; margin-bottom: 20px;"></span>
						</p>
						<h4 style="color: #fff;">Best Rate Guarantee</h4>
						<p>Find the exact equipment you need and tell us when and where you need it.</p>
					</div>
					<div class="one_third last " style="">
						<span class="ti-heart" style="display: block; font-size: 50px; margin-bottom: 20px;"></span>
					</p>
					<h4 style="color: #fff;">Awesome Customer Support</h4>
					<p>Find the exact equipment you need and tell us when and where you need it.</p>
				</div>
				<p>
					<br class="clear"/>
				</p>
			</div>
		</div>
	</div>
</div>
</div>

<div  class="one withsmallpadding ppb_header " style="text-align:center;padding:60px 0 60px 0;" >
<div class="standard_wrapper">
	<div class="page_content_wrapper">
		<div class="inner">
			<div style="margin:auto;width:100%">
				<h2 class="ppb_title" style="">Who rents and leases from US?</h2>
				<div class="page_tagline" style="">Explore some of the best tips from around the world</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="standard_wrapper">
<div  class="ppb_blog_grid one nopadding" style="padding:0px 0 0px 0;margin-bottom:40px;" >
	<div class="page_content_wrapper">
		<div class="inner">
			<div class="inner_wrapper">
				<div class="blog_grid_wrapper sidebar_content full_width ppb_blog_posts">
					<div id="post-18" class="post type-post hentry status-publish ">
						<div class="post_wrapper grid_layout">
							<div class="post_img small static"style="height:235px;">
								<a href="#">
									<img src="images/forklift-parked-near-loading-dock.jpg" alt="What To Do if Your Rental Car Has Met With An Accident" class="" />
								</a>
							</div>
							<div class="post_header_wrapper">
								<div class="post_header grid">
									<div class="post_detail single_post">
										<span class="post_info_date">
											<a href="#" title="What To Do if Your Rental Car Has Met With An Accident">January 12, 2017</a>
										</span>
									</div>
									<h6>
										<a href="#" title="What To Do if Your Rental Car Has Met With An Accident">Electronics</a>
									</h6>
								</div>
								<p>Find the exact equipment you need and tell us when and where you need it....
				
										
									<div class="post_button_wrapper">
										<a class="readmore" href="#">Read More
												
											<span class="ti-angle-right"></span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div id="post-29" class="post type-post hentry status-publish ">
							<div class="post_wrapper grid_layout">
								<div class="post_img small static">
									<a href="#">
										<img src="images/Compaction.jpg" alt="On The Trail of 6 Best Foods in North America" class=""/>
									</a>
								</div>
								<div class="post_header_wrapper">
									<div class="post_header grid">
										<div class="post_detail single_post">
											<span class="post_info_date">
												<a href="#" title="On The Trail of 6 Best Foods in North America">January 10, 2017</a>
											</span>
										</div>
										<h6>
											<a href="#" title="On The Trail of 6 Best Foods in North America">On Construction</a>
										</h6>
									</div>
									<p>Find the exact equipment you need and tell us when and where you need it....
				
											
										<div class="post_button_wrapper">
											<a class="readmore" href="#">Read More
													
												<span class="ti-angle-right"></span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div id="post-36" class="post type-post hentry status-publish last">
								<div class="post_wrapper grid_layout">
									<div class="post_img small static" style="height:235px;">
										<a href="#">
											<img src="images/Product-Type_20160115-152106.jpg" alt="Car Rental Mistakes That Can Cost You Big" class=""/>
										</a>
									</div>
									<div class="post_header_wrapper">
										<div class="post_header grid">
											<div class="post_detail single_post">
												<span class="post_info_date">
													<a href="#" title="Car Rental Mistakes That Can Cost You Big">January 9, 2017</a>
												</span>
											</div>
											<h6>
												<a href="#" title="Car Rental Mistakes That Can Cost You Big">Dental</a>
											</h6>
										</div>
										<p>Find the exact equipment you need and tell us when and where you need it....
				
												
											<div class="post_button_wrapper">
												<a class="readmore" href="#">Read More
														
													<span class="ti-angle-right"></span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<br class="clear"/>
							</div>
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
	<script type='text/javascript'>
/* 
				
		<![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/grandcarrental\/demo\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/grandcarrental\/demo\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/themes.themegoods.com\/grandcarrental\/demo\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */

			
	</script>
	<script type='text/javascript'>
/* 
				
		<![CDATA[ */
var woocommerce_params = {"ajax_url":"\/grandcarrental\/demo\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/grandcarrental\/demo\/?wc-ajax=%%endpoint%%"};
/* ]]> */

			
	</script>
	<script type='text/javascript'>
/* 
				
		<![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/grandcarrental\/demo\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/grandcarrental\/demo\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
/* ]]> */

			
	</script>
	<script type='text/javascript'>
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
	<script type='text/javascript' src='admin-ajax.php?action=grandcarrental_script_demo'></script>
	<script type='text/javascript'>
/* 
				
		<![CDATA[ */
var mc4wp_forms_config = [];
/* ]]> */

			
	</script>
	<!--[if lte IE 9]>
	<script type='text/javascript' src='mailchimp-for-wp/assets/js/third-party/placeholders.min.js'></script>
	<![endif]-->
</body></html><!-- Performance optimized by W3 Total Cache. Learn more: https://www.w3-edge.com/products/

Page Caching using disk: enhanced
Content Delivery Network via themegoodsthemes-pzbycso8wng.stackpathdns.com

 Served from: themes.themegoods.com @ 2017-08-29 15:22:53 by W3 Total Cache -->