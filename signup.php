<?php
include("connection.php");

if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	$category=$_POST['category'];
	$status = $_POST['status'];


	if($category=='supplier')
	{
		$status='pending';
	}
	else if($category=='rental')
	{
		$status='active';
	}
	$select_email = mysqli_query($mysqli,"select * from users where email='".$email."'");
	$fetch_details = mysqli_num_rows($select_email);
	if($fetch_details=='0')
	 {
	
	$insert_details = mysqli_query($mysqli,"insert users values('','".$fname."','".$lname."','".$phone."','".$email."','".$password."','".$category."','".$status."','".$category."')");
	if($insert_details)
	{
		$data = "success";
		echo "<script>window.location.href='login.php'</script>";
	}
	else
	{
		$data = "error";
	}
	}
	else
		 {
		$data = "email_exist";
		 }
	 
}

?>

<!DOCTYPE html>
<html lang="en-US"  data-menu="leftalign">
	<head>
		<link rel="shortcut icon" href="http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/uploads/2017/01/TG-Thumb.png" />
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
  line-height: 34px;
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
						<h1 class ="withtopbar">Sign Up</h1>
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
										if(isset($data) && $data == "success")
								{
								?>
								<p style="text-align:center;background:#5cb85c;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Added Successfully </p>
								<?php
								}else if(isset($data) && $data == "error"){
								?>
								<p style="text-align:center;background:#e54e53;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Error in Insertion </p>
								<?php
								}else if(isset($data) && $data == "email_exist"){
								?>
								<p style="text-align:center;background:#4a89dc;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Email Already Exist </p>
								<?php
								}
								?>
							<form name="checkout" method="post" class="checkout woocommerce-checkout" enctype="multipart/form-data">



							<div class="ppb_wrapper hasbg withtopbar">
			<div  class="one withsmallpadding ppb_text" style="text-align:center;padding:0px 0 0px 0;margin-top:20px;" >
				<div class="standard_wrapper">
					<div class="page_content_wrapper">
						<div class="inner">
							<div style="margin:auto;">
							</p>
							<h4 class="p1">
								<span class="s1">
									<b>Registrations Form </b>
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
				<div class="standard_wrapper responsive">
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

										<button class="loginBtn loginBtn--facebook form-row-last ">
													 Login with Facebook
										</button>

										<button class="loginBtn loginBtn--google form-row-first">
													  Login with Google
										</button><br><br><br>

										<p>
										<hr><br>
										</p>
								
										<p class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="10">
													<label class="">First name 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="text" class="input-text " name="fname" id="fname" placeholder="Enter Your First Name"  value="" autocomplete="given-name" autofocus="autofocus" />
												</p>
												<p class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
													<label class="">Last name 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="text" class="input-text " name="lname" id="lname" placeholder="Enter Your Last Name"  value="" autocomplete="family-name" />
												</p>

												<p class="form-row form-row-first validate-required validate-phone" id="billing_phone_field" data-priority="100">
													<label class="">Phone 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="tel" class="input-text " name="phone" id="phone" placeholder="Enter Your Phone No."  value="" autocomplete="tel" />
												</p>
												<p class="form-row form-row-last validate-required validate-email" id="billing_email_field" data-priority="110">
													<label  class="">Email address 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="email" class="input-text " name="email" id="email" placeholder="Enter Your Email"  value="" autocomplete="email username" />
												</p>

												<p class="form-row form-row-first" id="" data-priority="100">
													<label  class="">Password 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="password" class="input-text " name="password" id="password" placeholder="Enter Your Password"  value="" autocomplete="tel" />
												</p>

												<p class="form-row form-row-last validate-required validate-email" id="" data-priority="110">
													<label  class="">I want to:
														<abbr class="required" title="required">*</abbr>
													</label>
													<!--<select name="category" REQUIRED>
															<option selected disabled>Choose Category...</option>
															<option value="supplier">Suppliers</option>
															<option value="rental">Rental</option>
													</select>-->
													<input type="radio" name="type" value="supplier">Sell my services
													<input type="radio" name="type" value="rental">Buy services
												</p>
	
										
										
										<p style="text-align:right;">
											<input type="submit" name="submit" value="Sign Up" class="wpcf7-form-control wpcf7-submit" style="margin-top:20px;" />
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




								<!--<div class="col2-set" id="customer_details">
									<div class="">
										<div class="woocommerce-billing-fields">
											<h3>Registration :</h3>
											<div class="woocommerce-billing-fields__field-wrapper">
												<p class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="10">
													<label class="">First name 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="text" class="input-text " name="fname" id="fname" placeholder="Enter Your First Name"  value="" autocomplete="given-name" autofocus="autofocus" />
												</p>
												<p class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
													<label class="">Last name 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="text" class="input-text " name="lname" id="lname" placeholder="Enter Your Last Name"  value="" autocomplete="family-name" />
												</p>
												<!--<p class="form-row form-row-wide" id="billing_company_field" data-priority="30">
													<label for="billing_company" class="">Company name</label>
													<input type="text" class="input-text " name="billing_company" id="billing_company" placeholder=""  value="" autocomplete="organization" />
												</p>
												<p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field" data-priority="40">
													<label for="billing_country" class="">Country 
														<abbr class="required" title="required">*</abbr>
													</label>
													<select name="billing_country" id="billing_country" class="country_to_state country_select " autocomplete="country">
														<option value="">Select a country&hellip;</option>
														<option value="AX" >&#197;land Islands</option>
														<option value="AF" >Afghanistan</option>
														<option value="AL" >Albania</option>
														<option value="DZ" >Algeria</option>
														<option value="AS" >American Samoa</option>
														<option value="AD" >Andorra</option>
														<option value="AO" >Angola</option>
														<option value="AI" >Anguilla</option>
														<option value="AQ" >Antarctica</option>
														<option value="AG" >Antigua and Barbuda</option>
														<option value="AR" >Argentina</option>
														<option value="AM" >Armenia</option>
														<option value="AW" >Aruba</option>
														<option value="AU" >Australia</option>
														<option value="AT" >Austria</option>
														<option value="AZ" >Azerbaijan</option>
														<option value="BS" >Bahamas</option>
														<option value="BH" >Bahrain</option>
														<option value="BD" >Bangladesh</option>
														<option value="BB" >Barbados</option>
														<option value="BY" >Belarus</option>
														<option value="PW" >Belau</option>
														<option value="BE" >Belgium</option>
														<option value="BZ" >Belize</option>
														<option value="BJ" >Benin</option>
														<option value="BM" >Bermuda</option>
														<option value="BT" >Bhutan</option>
														<option value="BO" >Bolivia</option>
														<option value="BQ" >Bonaire, Saint Eustatius and Saba</option>
														<option value="BA" >Bosnia and Herzegovina</option>
														<option value="BW" >Botswana</option>
														<option value="BV" >Bouvet Island</option>
														<option value="BR" >Brazil</option>
														<option value="IO" >British Indian Ocean Territory</option>
														<option value="VG" >British Virgin Islands</option>
														<option value="BN" >Brunei</option>
														<option value="BG" >Bulgaria</option>
														<option value="BF" >Burkina Faso</option>
														<option value="BI" >Burundi</option>
														<option value="KH" >Cambodia</option>
														<option value="CM" >Cameroon</option>
														<option value="CA" >Canada</option>
														<option value="CV" >Cape Verde</option>
														<option value="KY" >Cayman Islands</option>
														<option value="CF" >Central African Republic</option>
														<option value="TD" >Chad</option>
														<option value="CL" >Chile</option>
														<option value="CN" >China</option>
														<option value="CX" >Christmas Island</option>
														<option value="CC" >Cocos (Keeling) Islands</option>
														<option value="CO" >Colombia</option>
														<option value="KM" >Comoros</option>
														<option value="CG" >Congo (Brazzaville)</option>
														<option value="CD" >Congo (Kinshasa)</option>
														<option value="CK" >Cook Islands</option>
														<option value="CR" >Costa Rica</option>
														<option value="HR" >Croatia</option>
														<option value="CU" >Cuba</option>
														<option value="CW" >Cura&ccedil;ao</option>
														<option value="CY" >Cyprus</option>
														<option value="CZ" >Czech Republic</option>
														<option value="DK" >Denmark</option>
														<option value="DJ" >Djibouti</option>
														<option value="DM" >Dominica</option>
														<option value="DO" >Dominican Republic</option>
														<option value="EC" >Ecuador</option>
														<option value="EG" >Egypt</option>
														<option value="SV" >El Salvador</option>
														<option value="GQ" >Equatorial Guinea</option>
														<option value="ER" >Eritrea</option>
														<option value="EE" >Estonia</option>
														<option value="ET" >Ethiopia</option>
														<option value="FK" >Falkland Islands</option>
														<option value="FO" >Faroe Islands</option>
														<option value="FJ" >Fiji</option>
														<option value="FI" >Finland</option>
														<option value="FR" >France</option>
														<option value="GF" >French Guiana</option>
														<option value="PF" >French Polynesia</option>
														<option value="TF" >French Southern Territories</option>
														<option value="GA" >Gabon</option>
														<option value="GM" >Gambia</option>
														<option value="GE" >Georgia</option>
														<option value="DE" >Germany</option>
														<option value="GH" >Ghana</option>
														<option value="GI" >Gibraltar</option>
														<option value="GR" >Greece</option>
														<option value="GL" >Greenland</option>
														<option value="GD" >Grenada</option>
														<option value="GP" >Guadeloupe</option>
														<option value="GU" >Guam</option>
														<option value="GT" >Guatemala</option>
														<option value="GG" >Guernsey</option>
														<option value="GN" >Guinea</option>
														<option value="GW" >Guinea-Bissau</option>
														<option value="GY" >Guyana</option>
														<option value="HT" >Haiti</option>
														<option value="HM" >Heard Island and McDonald Islands</option>
														<option value="HN" >Honduras</option>
														<option value="HK" >Hong Kong</option>
														<option value="HU" >Hungary</option>
														<option value="IS" >Iceland</option>
														<option value="IN"  selected='selected'>India</option>
														<option value="ID" >Indonesia</option>
														<option value="IR" >Iran</option>
														<option value="IQ" >Iraq</option>
														<option value="IE" >Ireland</option>
														<option value="IM" >Isle of Man</option>
														<option value="IL" >Israel</option>
														<option value="IT" >Italy</option>
														<option value="CI" >Ivory Coast</option>
														<option value="JM" >Jamaica</option>
														<option value="JP" >Japan</option>
														<option value="JE" >Jersey</option>
														<option value="JO" >Jordan</option>
														<option value="KZ" >Kazakhstan</option>
														<option value="KE" >Kenya</option>
														<option value="KI" >Kiribati</option>
														<option value="KW" >Kuwait</option>
														<option value="KG" >Kyrgyzstan</option>
														<option value="LA" >Laos</option>
														<option value="LV" >Latvia</option>
														<option value="LB" >Lebanon</option>
														<option value="LS" >Lesotho</option>
														<option value="LR" >Liberia</option>
														<option value="LY" >Libya</option>
														<option value="LI" >Liechtenstein</option>
														<option value="LT" >Lithuania</option>
														<option value="LU" >Luxembourg</option>
														<option value="MO" >Macao S.A.R., China</option>
														<option value="MK" >Macedonia</option>
														<option value="MG" >Madagascar</option>
														<option value="MW" >Malawi</option>
														<option value="MY" >Malaysia</option>
														<option value="MV" >Maldives</option>
														<option value="ML" >Mali</option>
														<option value="MT" >Malta</option>
														<option value="MH" >Marshall Islands</option>
														<option value="MQ" >Martinique</option>
														<option value="MR" >Mauritania</option>
														<option value="MU" >Mauritius</option>
														<option value="YT" >Mayotte</option>
														<option value="MX" >Mexico</option>
														<option value="FM" >Micronesia</option>
														<option value="MD" >Moldova</option>
														<option value="MC" >Monaco</option>
														<option value="MN" >Mongolia</option>
														<option value="ME" >Montenegro</option>
														<option value="MS" >Montserrat</option>
														<option value="MA" >Morocco</option>
														<option value="MZ" >Mozambique</option>
														<option value="MM" >Myanmar</option>
														<option value="NA" >Namibia</option>
														<option value="NR" >Nauru</option>
														<option value="NP" >Nepal</option>
														<option value="NL" >Netherlands</option>
														<option value="NC" >New Caledonia</option>
														<option value="NZ" >New Zealand</option>
														<option value="NI" >Nicaragua</option>
														<option value="NE" >Niger</option>
														<option value="NG" >Nigeria</option>
														<option value="NU" >Niue</option>
														<option value="NF" >Norfolk Island</option>
														<option value="KP" >North Korea</option>
														<option value="MP" >Northern Mariana Islands</option>
														<option value="NO" >Norway</option>
														<option value="OM" >Oman</option>
														<option value="PK" >Pakistan</option>
														<option value="PS" >Palestinian Territory</option>
														<option value="PA" >Panama</option>
														<option value="PG" >Papua New Guinea</option>
														<option value="PY" >Paraguay</option>
														<option value="PE" >Peru</option>
														<option value="PH" >Philippines</option>
														<option value="PN" >Pitcairn</option>
														<option value="PL" >Poland</option>
														<option value="PT" >Portugal</option>
														<option value="PR" >Puerto Rico</option>
														<option value="QA" >Qatar</option>
														<option value="RE" >Reunion</option>
														<option value="RO" >Romania</option>
														<option value="RU" >Russia</option>
														<option value="RW" >Rwanda</option>
														<option value="ST" >S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option>
														<option value="BL" >Saint Barth&eacute;lemy</option>
														<option value="SH" >Saint Helena</option>
														<option value="KN" >Saint Kitts and Nevis</option>
														<option value="LC" >Saint Lucia</option>
														<option value="SX" >Saint Martin (Dutch part)</option>
														<option value="MF" >Saint Martin (French part)</option>
														<option value="PM" >Saint Pierre and Miquelon</option>
														<option value="VC" >Saint Vincent and the Grenadines</option>
														<option value="WS" >Samoa</option>
														<option value="SM" >San Marino</option>
														<option value="SA" >Saudi Arabia</option>
														<option value="SN" >Senegal</option>
														<option value="RS" >Serbia</option>
														<option value="SC" >Seychelles</option>
														<option value="SL" >Sierra Leone</option>
														<option value="SG" >Singapore</option>
														<option value="SK" >Slovakia</option>
														<option value="SI" >Slovenia</option>
														<option value="SB" >Solomon Islands</option>
														<option value="SO" >Somalia</option>
														<option value="ZA" >South Africa</option>
														<option value="GS" >South Georgia/Sandwich Islands</option>
														<option value="KR" >South Korea</option>
														<option value="SS" >South Sudan</option>
														<option value="ES" >Spain</option>
														<option value="LK" >Sri Lanka</option>
														<option value="SD" >Sudan</option>
														<option value="SR" >Suriname</option>
														<option value="SJ" >Svalbard and Jan Mayen</option>
														<option value="SZ" >Swaziland</option>
														<option value="SE" >Sweden</option>
														<option value="CH" >Switzerland</option>
														<option value="SY" >Syria</option>
														<option value="TW" >Taiwan</option>
														<option value="TJ" >Tajikistan</option>
														<option value="TZ" >Tanzania</option>
														<option value="TH" >Thailand</option>
														<option value="TL" >Timor-Leste</option>
														<option value="TG" >Togo</option>
														<option value="TK" >Tokelau</option>
														<option value="TO" >Tonga</option>
														<option value="TT" >Trinidad and Tobago</option>
														<option value="TN" >Tunisia</option>
														<option value="TR" >Turkey</option>
														<option value="TM" >Turkmenistan</option>
														<option value="TC" >Turks and Caicos Islands</option>
														<option value="TV" >Tuvalu</option>
														<option value="UG" >Uganda</option>
														<option value="UA" >Ukraine</option>
														<option value="AE" >United Arab Emirates</option>
														<option value="GB" >United Kingdom (UK)</option>
														<option value="US" >United States (US)</option>
														<option value="UM" >United States (US) Minor Outlying Islands</option>
														<option value="VI" >United States (US) Virgin Islands</option>
														<option value="UY" >Uruguay</option>
														<option value="UZ" >Uzbekistan</option>
														<option value="VU" >Vanuatu</option>
														<option value="VA" >Vatican</option>
														<option value="VE" >Venezuela</option>
														<option value="VN" >Vietnam</option>
														<option value="WF" >Wallis and Futuna</option>
														<option value="EH" >Western Sahara</option>
														<option value="YE" >Yemen</option>
														<option value="ZM" >Zambia</option>
														<option value="ZW" >Zimbabwe</option>
													</select>
													<noscript>
														<input type="submit" name="woocommerce_checkout_update_totals" value="Update country" />
													</noscript>
												</p>
												<p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
													<label for="billing_address_1" class="">Address 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Street address"  value="" autocomplete="address-line1" />
												</p>
												<p class="form-row form-row-wide address-field" id="billing_address_2_field" data-priority="60">
													<input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)"  value="" autocomplete="address-line2" />
												</p>
												<p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-priority="70">
													<label for="billing_city" class="">Town / City 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="text" class="input-text " name="billing_city" id="billing_city" placeholder=""  value="" autocomplete="address-level2" />
												</p>
												<p class="form-row form-row-wide address-field validate-required validate-state" id="billing_state_field" data-priority="80">
													<label for="billing_state" class="">State / County 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="text" class="input-text " name="" id="" placeholder=""  value="" autocomplete="address-level2" />
												</p>
												<p class="form-row form-row-wide address-field validate-required validate-postcode" id="billing_postcode_field" data-priority="90">
													<label for="billing_postcode" class="">Postcode / ZIP 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder=""  value="" autocomplete="postal-code" />
												</p>
												<p class="form-row form-row-first validate-required validate-phone" id="billing_phone_field" data-priority="100">
													<label class="">Phone 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="tel" class="input-text " name="phone" id="phone" placeholder="Enter Your Phone No."  value="" autocomplete="tel" />
												</p>
												<p class="form-row form-row-last validate-required validate-email" id="billing_email_field" data-priority="110">
													<label  class="">Email address 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="email" class="input-text " name="email" id="email" placeholder="Enter Your Email"  value="" autocomplete="email username" />
												</p>

												<p class="form-row form-row-first" id="" data-priority="100">
													<label  class="">Password 
														<abbr class="required" title="required">*</abbr>
													</label>
													<input type="password" class="input-text " name="password" id="password" placeholder="Enter Your Password"  value="" autocomplete="tel" />
												</p>

												<p class="form-row form-row-last validate-required validate-email" id="" data-priority="110">
													<label  class="">Choose Category 
														<abbr class="required" title="required">*</abbr>
													</label>
													<select name="category" REQUIRED>
															<option value="">Choose Category...</option>
															<option value="suppliers">Suppliers</option>
															<option value="rental">Rental</option>
													</select>
												</p>
												<p><label>or</label></p>
												<button class="loginBtn loginBtn--facebook form-row-last col-md-4">
													 Login with Facebook
													</button>
												<button class="loginBtn loginBtn--facebook form-row-last col-md-6">
													OR
													</button>
													<button class="loginBtn loginBtn--google form-row-first col-md-4">
													  Login with Google
													</button>
												<p class="form-row form-row-last" style="text-align:right;" id="" data-priority="110">
													<label  class="">Click to Sign up  
														
													</label>
													<input type="submit" name="submit" value="Sign Up" class="" style="margin-top:10px;" />
												</p>
											</div>
										</div>
										
									</div>									
								</div>-->							
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