<?php
include("connection.php");

if(isset($_POST['submit']))
{
	$username =mysqli_real_escape_string($mysqli,$_POST['Username']);
	$password = mysqli_real_escape_string($mysqli,$_POST['Password']);
	$something_query = mysqli_query($mysqli,"select * from users where email ='".$username."' and password='".$password."' and status='active'");
	$fetch_details = mysqli_fetch_array($something_query);
	$check_rows = mysqli_num_rows($something_query);

	if($check_rows > 0)
	{
		$_SESSION['user_id']= $fetch_details['id'];
		$fetch_id = $_SESSION['user_id'];
		$cheak_users_type=mysqli_query($mysqli,"select * from users where id='".$fetch_id."'");
		$fecth_users_status = mysqli_fetch_array($cheak_users_type);

		if($fecth_users_status['user_type']=='rental'){
		echo "<script>window.location.href='index.php'</script>";
		}else{
		echo "<script>window.location.href='admin/dashboard.php'</script>";
		}	
	}else{
		$data = "error";
	}	
}
?>
<!DOCTYPE html>
<html lang="en-US"  data-menu="leftalign">
	<head>
		<title>Cart &#8211; Grand Car Rental | Limousine Car Rental WordPress</title>
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
<style>
body { padding: 2em; }


/* Shared */
.loginBtn {
  box-sizing: border-box;
  position: relative;
  /* width: 13em;  - apply for fixed size */
  margin: 0.2em;
  padding: 0 15px 0 46px;
  border: none;
  text-align: left;
  line-height: 40px;
  white-space: nowrap;
  border-radius: 0.2em;
  font-size: 16px;
  color: #FFF;
}
.loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 34px;
  height: 100%;
}
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}


/* Facebook */
.loginBtn--facebook {
  background-color: #4C69BA;
  background-image: linear-gradient(#4C69BA, #3B55A0);
  /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
  text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
  border-right: #364e92 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
  background-color: #5B7BD5;
  background-image: linear-gradient(#5B7BD5, #4864B1);
}


/* Google */
.loginBtn--google {
  /*font-family: "Roboto", Roboto, arial, sans-serif;*/
  background: #DD4B39;
}
.loginBtn--google:before {
  border-right: #BB3F30 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
}
.loginBtn--google:hover,
.loginBtn--google:focus {
  background: #E74B37;
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
		<div id="page_caption" class="hasbg parallax  withtopbar  " style="background-image:url(images/Dental.jpg);height:500px;" >
			<div class="page_title_wrapper">
				<div class="page_title_inner">
					<div class="page_title_content">
						<h1 class ="withtopbar">Log In</h1>
						<div class="page_tagline">
			    		This is sample of page tagline and you can set it up using page option			    	</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ppb_wrapper hasbg withtopbar">
			<div  class="one withsmallpadding ppb_text" style="text-align:center;padding:0px 0 0px 0;margin-top:20px;" >
				<div class="standard_wrapper">
					<div class="page_content_wrapper">
						<div class="inner">
							<div style="margin:auto;width:80%">
							</p>
							<h4 class="p1">
								<span class="s1">
									<b>Please enter your registered Email and password for log in  </b>
								</span>
							</h4>
							<div style="margin-top: 30px;">
								<div class="social_wrapper shortcode dark ">
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
							</div>
							<p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div  class="one withsmallpadding ppb_text" style="text-align:left;padding:0px 0 0px 0;margin-bottom:60px;" >
				<div class="standard_wrapper">
					<div class="page_content_wrapper">
						<div class="inner">
							<div style="margin:auto;width:60%">
								<div role="form" class="wpcf7" id="wpcf7-f2465-o1" lang="en-US" dir="ltr">
									<div class="screen-reader-response"></div>
									<form  method="post" class="wpcf7-form" novalidate="novalidate">
										<div style="display: none;">
											<input type="hidden" name="_wpcf7" value="2465" />
											<input type="hidden" name="_wpcf7_version" value="4.8" />
											<input type="hidden" name="_wpcf7_locale" value="en_US" />
											<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2465-o1" />
											<input type="hidden" name="_wpcf7_container_post" value="0" />
											<input type="hidden" name="_wpcf7_nonce" value="d8f6cb8aae" />
										</div>

										

										<button class="loginBtn loginBtn--google form-row-first">Login with Google</button>
										<button class="loginBtn loginBtn--facebook form-row-last ">Login with Facebook</button>
										<br><br><br>

										<p>
										<hr><br>
										</p>
								
										<p>
											<label> Your Email
												<br />
												<span class="wpcf7-form-control-wrap your-email">
													<input type="email" name="Username" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" />
												</span>
											</label>
										</p>
										<p>
											<label> Password
												<br />
												<span class="wpcf7-form-control-wrap your-subject">
													<input type="password" name="Password" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" />
												</span>
											</label>
										</p>
	
										
										
										<p style="text-align:right;">
											<input type="submit" name="submit" value="Log In" class="wpcf7-form-control wpcf7-submit" style="margin-top:20px;" />
										</p>
										<div class="wpcf7-response-output wpcf7-display-none"></div>
									</form>
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
?>undefined</body>undefined</html>undefined<!-- Performance optimized by W3 Total Cache. Learn more: https://www.w3-edge.com/products/

Page Caching using disk: enhanced
Content Delivery Network via themegoodsthemes-pzbycso8wng.stackpathdns.com

 Served from: themes.themegoods.com @ 2017-08-31 12:50:48 by W3 Total Cache -->