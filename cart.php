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
?>
		<div id="page_caption" class="hasbg parallax  withtopbar  " style="background-image:url(images/Dental.jpg);height:500px;">
			<div class="page_title_wrapper">
				<div class="page_title_inner">
					<div class="page_title_content">
						<h1 class ="withtopbar">Cart</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- Begin content -->
		<div id="page_content_wrapper" class="hasbg withtopbar">
			<div class="inner">
				<!-- Begin main content -->
				<div class="inner_wrapper">
					<div class="sidebar_content full_width">
						<div class="woocommerce">
						<?php
							if(sizeof($_SESSION['yo_cart']) > 0)
							{
						?>
							<form class="woocommerce-cart-form" action="" method="post">
								<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
									<thead>
										<tr>
											<th class="product-remove">&nbsp;</th>
											<th class="product-thumbnail">&nbsp;</th>
											<th class="product-name">Product</th>
											<th class="product-price">Price</th>
											<th class="product-quantity">Quantity</th>
											<th class="product-subtotal">Total</th>
											<th class="product-action">Action</th>
										</tr>
									</thead>
									<tbody>
									<?php
									$totalzz = 0;
									foreach($_SESSION['yo_cart'] As $key => $value)
									{
										if(isset($_POST['cart_update'.$key.'']))
										{
											$quantity = $_POST['qty'.$key.''];
											$_SESSION['yo_cart'][$key]=$quantity;

											echo "<script>window.location.href='cart.php'</script>";
										}

										$select_service = mysqli_query($mysqli,"select * from service join service_image where service.service_id=service_image.service_id and service.service_id='$key'");
										$fetch_service = mysqli_fetch_array($select_service);
									?>
										<tr class="woocommerce-cart-form__cart-item cart_item">
											<td class="product-remove">
												<a href="view_product.php" class="remove" aria-label="Remove this item" data-product_id="2676" data-product_sku="">&times;</a>
											</td>
											<td class="product-thumbnail">
												<a href="#">
													<img src="admin/uploads/<?php echo $fetch_service['service_image'];?>" style="height:100px;width:100px;"class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" />
												</a>
											</td>
											<td class="product-name" data-title="Product">
												<a href="#"><?php echo $fetch_service['service_name'];?></a>
											</td>
											<td class="product-price" data-title="Price">
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $fetch_service['price'];?>
												</span>
											</td>
											<td class="product-quantity" data-title="Quantity">
												<div class="quantity">
													<input type="number" class="input-text qty text" step="1" min="0" max="" name="qty<?php echo $key;?>" value="<?php echo $value;?>" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" />
												</div>
											</td>
											<td class="product-subtotal" data-title="Total">
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">&#36;</span>
													<?php
													$total = $fetch_service['price'] * $value;
													echo $total;
													?>
												</span>
											</td>
											<td class="product-action">
												<input type="submit" class="button" name="cart_update<?php echo $key;?>" value="Update" />
											</td>
										</tr>
									<?php
										$totalzz += $fetch_service['price'] * $value;
									}
									?>
									</tbody>
								</table>
							</form>
							<div class="cart-collaterals">
								<div class="cart_totals ">
									<h2>Cart totals</h2>
									<table cellspacing="0" class="shop_table shop_table_responsive">
										<tr class="cart-subtotal">
											<th>Subtotal</th>
											<td data-title="Subtotal">
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $totalzz;?>
												</span>
											</td>
										</tr>
										<tr class="order-total">
											<th>Total</th>
											<td data-title="Total">
												<strong>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $totalzz;?>
													</span>
												</strong>
											</td>
										</tr>
									</table>
									<div class="wc-proceed-to-checkout">
										<a href="checkout.php" class="checkout-button button alt wc-forward">
											Proceed to checkout
										</a>
									</div>
								</div>
							</div>
							<?php
									}
									else{
										?>
										<div id="1504684554461393832" class="alert_box notice" style="padding-bottom:20px !important;background:white;border:2px solid red;">
										<h3 style="color:red;">
											<i class="fa fa-exclamation-triangle"></i>Oops!!!    No Services Found
										</h3>
									</a>
								</div>
								<?php
									}
								?>
						</div>
					</div>
				</div>
				<!-- End main content -->
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