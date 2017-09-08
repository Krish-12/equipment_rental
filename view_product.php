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
		include("connection.php");
include("metalinks.php");
?>
	</head>
	<body class="product-template-default single single-product postid-2676 woocommerce woocommerce-page">
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
		<?php
include ("header.php");
if(isset($_POST['add_cart']))
{
	$quantity = $_POST['quantity'];
	$service_id = $_GET['id'];
	$_SESSION['yo_cart'][$service_id] = $quantity;
	echo "<script>window.location.href='view_product.php?id=$service_id'</script>";
}
?>
		<div id="page_caption" class="hasbg parallax  withtopbar  " style="background-image:url(images/Dental.jpg);height:500px;" >
			<div class="page_title_wrapper">
				<div class="page_title_inner">
					<div class="page_title_content">
						<h1 class ="withtopbar">Rent</h1>
						<div class="page_tagline">
			    		This is sample of page tagline and you can set it up using page option			    	</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Begin content -->
		<div id="page_content_wrapper" class="hasbg">
			<div class="inner ">
				<!-- Begin main content -->
				<div class="inner_wrapper">
					<div class="sidebar_content full_width">
						<div id="product-2676" class="post-2676 product type-product status-publish has-post-thumbnail product_tag-car first instock shipping-taxable purchasable product-type-simple">
							<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="">

										<?php
											$fetch_service_id = $_GET['id'];
											$service_details = mysqli_query($mysqli,"select * from service where service_id = '$fetch_service_id' " );
											$fetch_details = mysqli_fetch_array($service_details);
												
										?>

								<figure class="woocommerce-product-gallery__wrapper">
									<div>
									<?php
										$image_id=$fetch_details['service_id'];
										$service_image = mysqli_query($mysqli,"select * from service_image where service_id = '$image_id' " );
										$fetch_images = mysqli_fetch_array($service_image);
									?>
										<a href="#">
											<img width="600" height="600" src="admin/uploads/<?php echo $fetch_images['service_image'];?>" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" />
										</a>
									</div>
								</figure>
							</div>
							<div class="summary entry-summary">
								<h1 class="product_title entry-title"><?php echo $fetch_details['service_name'];?></h1>
								<div class="woocommerce-product-rating">
									<div class="star-rating">
										<span style="width:70%">
											<strong class="rating">3.50</strong> out of 
											<span>5</span>				based on 
											<span class="rating">2</span> customer ratings			
										</span>
									</div>
									<a href="#reviews" class="woocommerce-review-link" rel="nofollow">(
										<span class="count">2</span> customer reviews)
									</a>
								</div>
								<p class="price">
									<span class="woocommerce-Price-amount amount">
										<span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $fetch_details['price'];?>
									</span>
								</p>
								<div class="woocommerce-product-details__short-description">
									<p><?php echo substr($fetch_details['description'],0,100);?>....</p>
								</div>
								<form class="cart" method="post" enctype='multipart/form-data'>
									<div class="quantity">
										<input type="number" class="input-text qty text" step="1" min="1" max="" name="quantity"  value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" />
									</div>
									<button type="submit" name="add_cart" class="single_add_to_cart_button button alt">Add to cart</button>
								</form>								
							</div>
							<!-- .summary -->
							<div class="woocommerce-tabs wc-tabs-wrapper">
								<ul class="tabs wc-tabs" role="tablist">
									<li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
										<h4>Description</h4>
									</li>
								</ul>
								<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
									<p><?php echo $fetch_details['description']?></p>									
								</div>
							</div>
							<section class="related products">										
								<h2>Related products</h2>
							
								<ul class="products">
									<?php	
										$get_subcat = mysqli_query($mysqli,"select * from service where service_id='".$_GET['id']."'");
										$fetch_subcat = mysqli_fetch_array($get_subcat);
										$subcat_details = mysqli_query($mysqli,"select * from service where sub_cat_id='".$fetch_subcat['sub_cat_id']."'limit 3" );
										while($fetch_details = mysqli_fetch_array($subcat_details))
											{
										?>
									<li class="post-2680 product type-product status-publish has-post-thumbnail product-type-simple" style="height:400px;width:360px !important;">							
											<?php
												$image_id=$fetch_details['service_id'];
												$service_img = mysqli_query($mysqli,"select * from service_image where service_id = '$image_id' " );
												$fetch_img = mysqli_fetch_array($service_img);
											?>
										<a href="view_product.php?id=<?php echo $fetch_details['service_id'];?>" class="woocommerce-LoopProduct-link">
											<img src="admin/uploads/<?php echo $fetch_img['service_image'];?>" style="height:220px;"class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" />
											<h2 class="" style="font-size:15px;"><a href="view_product.php?id=<?php echo $fetch_details['service_id'];?>"><?php echo	
												$fetch_details['service_name'];?></a></h2>											
											<div class="star-rating" title="Rated 4.00 out of 5">
												<span style="width:80%">
													<strong class="rating">4.00</strong> out of 5
												</span>
											</div>
											<span class="price">
												<span class="woocommerce-Price-amount amount" >
													<span class="woocommerce-Price-currencySymbol">&#36;</span>45,000.00
												</span>
											</span>
										</a>										
									</li>
											<?php
												}
											?>
								</ul>								
							</section>
						</div>
						<!-- #product-2676 -->
					</div>
				</div>
				<!-- End main content -->
			</div>
		</div>
		<!-- End content -->
		<br class="clear"/>
		<br/>
		<?php
include ("footer.php");
?>
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
var wc_add_to_cart_params = {"ajax_url":"\/grandcarrental\/demo\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/grandcarrental\/demo\/product\/audi-a4\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/themes.themegoods.com\/grandcarrental\/demo\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */

	</script>
</body></html>