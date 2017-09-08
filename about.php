<!DOCTYPE html>
<html lang="en-US"  data-menu="leftalign">
	<head>
		<title>Rentalz</title>
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
	<body class="page-template-default page page-id-129 woocommerce-cart woocommerce-page">
		<input type="hidden" id="pp_menu_layout" name="pp_menu_layout" value="leftalign"/>
		<input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value="0"/>
		<input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value="0"/>
		<input type="hidden" id="pp_image_path" name="pp_image_path" value=""/>
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
		<input type="hidden" id="tg_cart_url" name="tg_cart_url" value=""/>
		<input type="hidden" id="tg_live_builder" name="tg_live_builder" value="0"/>
		<input type="hidden" id="pp_footer_style" name="pp_footer_style" value="3"/>
		<!-- Begin mobile menu -->
		<?php
include ("header.php");
$about= mysqli_query($mysqli,"select * from about");
$fetch_terms= mysqli_fetch_array($about);
?>
		<div class="ppb_wrapper  ">
			<div id="page_caption" class="hasbg parallax  withtopbar  " style="background-image:url(images/Dental.jpg);height:500px;">
				<div class="page_title_wrapper">
					<div class="page_title_inner">
						<div class="page_title_content">
							<h1 class ="withtopbar">About Us</h1>
							<div class="page_tagline">
			    							    	
							</div>
						</div>
					</div>
				</div>
			</div>
			<div  class="one withsmallpadding ppb_header " style="text-align:center;padding:50px 0 50px 0;background-color:white;color:#ffffff;margin-top:-50px;" >
				<div class="standard_wrapper" style="background-color:white;">
					<div class="page_content_wrapper" style="color:black;">
						<div class="inner">
							<div style="margin:auto;width:50%">
								<h2 class="ppb_title" style="color:black;"><?php echo $fetch_terms['header'] ?></h2>
								<div class="ppb_header_content">
									<p><?php echo $fetch_terms['body'] ?></p>
									<p></p>	
									<p>
										<br class="clear"/>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br class="clear"/>
		<?php
include ("footer.php");
?>
	</body>
</html>
<!-- Performance optimized by W3 Total Cache. Learn more: https://www.w3-edge.com/products/

Page Caching using disk: enhanced
Content Delivery Network via themegoodsthemes-pzbycso8wng.stackpathdns.com

 Served from: themes.themegoods.com @ 2017-08-31 12:50:48 by W3 Total Cache -->