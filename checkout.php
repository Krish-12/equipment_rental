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
include("connection.php");	
	if(isset($_POST['submit_status']))
	{
		$service_name= mysqli_real_escape_string($mysqli,$_POST['service_name']);
		$price= mysqli_real_escape_string($mysqli,$_POST['price']);
		$quantity =mysqli_real_escape_string($mysqli,$_POST['quantity']);
		$total =mysqli_real_escape_string($mysqli,$_POST['total']);
		$payment_method =mysqli_real_escape_string($mysqli,$_POST['payment_method']);
		$fname =mysqli_real_escape_string($mysqli,$_POST['fname']);
		$lname =mysqli_real_escape_string($mysqli,$_POST['lname']);
		$phone =mysqli_real_escape_string($mysqli,$_POST['phone']);
		$email =mysqli_real_escape_string($mysqli,$_POST['email']);
		$country =mysqli_real_escape_string($mysqli,$_POST['country']);
		$state =mysqli_real_escape_string($mysqli,$_POST['state']);
		$town =mysqli_real_escape_string($mysqli,$_POST['town']);
		$zip =mysqli_real_escape_string($mysqli,$_POST['zip']);
		$address =mysqli_real_escape_string($mysqli,$_POST['address']);	


		if($_SESSION['user_id']!=''){
			$user_id = $_SESSION['user_id'];
		$add_order= mysqli_query($mysqli, "INSERT INTO orders
		VALUES('','".$service_name."','".$price."','".$quantity."','".$total."','".$payment_method."','".$fname."','".$lname."','".$phone."','".$email."','".$country."','".$state."','".$town."','".$zip."','".$address."','pending','$user_id')");
		}
		else
		{
		$add_order= mysqli_query($mysqli, "INSERT INTO orders
		VALUES('','".$service_name."','".$price."','".$quantity."','".$total."','".$payment_method."','".$fname."','".$lname."','".$phone."','".$email."','".$country."','".$state."','".$town."','".$zip."','".$address."','pending','guest')");
		}
	}
	include ("header.php");

?>
		<div id="page_caption" class="hasbg parallax  withtopbar " style="background-image:url(images/AcrossDeviceMockup.jpg);height:500px;" >
			<div class="page_title_wrapper">
				<div class="page_title_inner">
					<div class="page_title_content">
						<h1 class ="withtopbar">Checkout</h1>
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
							<form name="checkout" method="post" class="checkout woocommerce-checkout" enctype="multipart/form-data">
								<div class="col2-set" id="customer_details">
								<div class="col-1" >
										<div class="woocommerce-shipping-fields"></div>
										<div class="woocommerce-additional-fields">
											<h3>Your Orders</h3>
											
											<div id="order_review" class="woocommerce-checkout-review-order">
										<table class="shop_table woocommerce-checkout-review-order-table" style="padding:40px;">
										<thead>
											<tr>
												<th class="product-name">Product</th>
												<th class="product-total">Total</th>
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
											<tr class="cart_item">
												<td class="product-name">
													<?php echo $fetch_service['service_name'];?>
													<input type="text" style="display:none;" name="service_name" value="<?php echo $fetch_service['service_id'];?>"/>
													<strong class="product-quantity">&times; <?php echo $value;?>
													<input type="text" style="display:none;" name="quantity" value="<?php echo $value;?>"/>
													</strong>
												</td>
												<td class="product-total">
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">&#36;</span>
													<?php
													$total = $fetch_service['price'] * $value;
													echo $total;
													?>
													<input type="text" style="display:none;" name="price" value="<?php echo $total;?>"/>
													</span>
												</td>
											</tr>
											<?php
											$totalzz += $fetch_service['price'] * $value;
											}
											?>
										</tbody>
										<tfoot>
											<tr class="order-total">
												<th>Total</th>
												<td>
													<strong>
														<span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $totalzz;?>
															<input type="text" style="display:none;" name="total" value="<?php echo $totalzz;?>"/>
														</span>
													</strong>
												</td>
											</tr>
										</tfoot>
									</table>
									<div id="payment" class="woocommerce-checkout-payment">
										<ul class="wc_payment_methods payment_methods methods">
											<li class="wc_payment_method payment_method_bacs">
												<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="card"  checked='checked' data-order_button_text="" />
												<label for="payment_method_bacs">
													Card Payment 	
												</label>												
											</li>											
											<li class="wc_payment_method payment_method_cod">
												<input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod"  data-order_button_text="" />
												<label for="payment_method_cod">
													Cash on delivery 	
												</label>												
											</li>
										</ul>										
									</div>
								</div>
										</div>
									</div>
									
									<?php
									$select_query = mysqli_query($mysqli,"select * from users where id='".$_SESSION['user_id']."'");
									$fetch_query = mysqli_fetch_array($select_query);
									?>
									<div class="col-2">
										<div class="woocommerce-billing-fields">
											<h3>Billing details</h3>
											<div class="woocommerce-billing-fields__field-wrapper">
												<p class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="10">
													<label for="billing_first_name" class="">First name 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="text" class="input-text " name="fname" id="billing_first_name" placeholder=""  value="<?php echo $fetch_query['fname'];?>" autocomplete="given-name" autofocus="autofocus" />
												</p>
												<p class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
													<label for="billing_last_name" class="">Last name 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="text" class="input-text " name="lname" id="billing_last_name" placeholder=""  value="<?php echo $fetch_query['lname'];?>" autocomplete="family-name" />
												</p>
												<p class="form-row form-row-first validate-required validate-phone" id="billing_phone_field" data-priority="100">
													<label for="billing_phone" class="">Phone 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="tel" class="input-text " name="phone" id="billing_phone" placeholder=""  value="<?php echo $fetch_query['phone'];?>" autocomplete="tel" />
												</p>
												<p class="form-row form-row-last validate-required validate-email" id="billing_email_field" data-priority="110">
													<label for="billing_email" class="">Email address 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="email" class="input-text " name="email" id="billing_email" placeholder=""  value="<?php echo $fetch_query['email'];?>" autocomplete="email username" />
												</p>												
												<p class="form-row form-row-first validate-required validate-phone" id="billing_phone_field" data-priority="100">
													<label for="billing_phone" class="">Country 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="text" class="input-text " name="country" id="billing_phone" placeholder=""  value="" autocomplete="tel" />
												</p>
												<p class="form-row form-row-last validate-required validate-email" id="billing_email_field" data-priority="110">
													<label for="billing_email" class="">State
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="text" class="input-text " name="state" id="billing_email" placeholder=""  value="" autocomplete="email username" />
												</p>
												<p class="form-row form-row-first validate-required validate-phone" id="billing_phone_field" data-priority="100">
													<label for="billing_city" class="">Town / City 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="text" class="input-text " name="town" id="billing_city" placeholder=""  value="" autocomplete="address-level2" />
												</p>
												<p class="form-row form-row-last validate-required validate-email" id="billing_email_field" data-priority="110">
													<label for="billing_postcode" class="">Postcode / ZIP 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="text" class="input-text " name="zip" id="billing_postcode" placeholder=""  value="" autocomplete="postal-code" />
												</p>
												<p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
													<label for="billing_address_1" class="">Address 
														<abbr class="required" title="required">*</abbr>
													</label>
													<textarea type="text" class="input-text " name="address" id="billing_address_1" placeholder="Street address"  value="" autocomplete="address-line1"></textarea>
												</p>												
											</div>
										</div>
										<div class="form-row place-order" style="float:right;">																															
											<input type="submit" class="button alt" name="submit_status" id="place_order" value="Place order" data-value="Place order" />
											
										</div>
									</div>									
								</div>							
							</form>
						</div>
					</div>
				</div>
				<!-- End main content -->
			</div>
		</div>
		<?php
include ("footer.php");
?>
	</body>
</html>
<!-- Performance optimized by W3 Total Cache. Learn more: https://www.w3-edge.com/products/

Page Caching using disk: enhanced
Content Delivery Network via themegoodsthemes-pzbycso8wng.stackpathdns.com

 Served from: themes.themegoods.com @ 2017-08-31 12:50:48 by W3 Total Cache -->