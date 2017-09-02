<?php
	include("connection.php");	
?>
	
	<!-- Begin template wrapper -->
		<div id="wrapper" class="hasbg transparent">
			<div class="header_style_wrapper">
				<!-- Begin top bar -->
				<div class="above_top_bar">
					<div class="page_content_wrapper">
						<div class="social_wrapper">
							<ul>
								<li class="facebook">
									<a target="_blank" href="#">
										<i class="fa fa-facebook-official"></i>
									</a>
								</li>
								<li class="twitter">
									<a target="_blank" href="http://twitter.com/#">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li class="youtube">
									<a target="_blank" title="Youtube" href="#">
										<i class="fa fa-youtube"></i>
									</a>
								</li>
								<li class="pinterest">
									<a target="_blank" title="Pinterest" href="http://pinterest.com/#">
										<i class="fa fa-pinterest"></i>
									</a>
								</li>
								<li class="instagram">
									<a target="_blank" title="Instagram" href="http://instagram.com/">
										<i class="fa fa-instagram"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="top_contact_info">
							<div class="company_address">
								<div id="top_contact_address">
									<span class="ti-location-pin"></span>184 Main Street East 8007
								</div>
							</div>
							<div>
								<div id="top_contact_number">
									<a href="tel:1.800.456.6743">
										<span class="ti-mobile"></span>1.800.456.6743
									</a>
								</div>
							</div>
							<div>
								<div id="top_contact_hours">
									<span class="ti-alarm-clock"></span>Mon-Fri 09.00 - 17.00
								</div>
							</div>
						</div>
						<br class="clear"/>
					</div>
				</div>
				<!-- End top bar -->
				<div class="top_bar hasbg">
					<div class="standard_wrapper">
						<!-- Begin logo -->
						<div id="logo_wrapper">
							<div id="logo_normal" class="logo_container">
								<div class="logo_align">
								<p style="font-size:40px";>LOGO</p>
									<!--<a id="custom_logo" class="logo_wrapper hidden" href="">
										<img src="images/logo@2x_white.png" alt="" width="175" height="24"/>
									</a>
								</div>
							</div>
							<div id="logo_transparent" class="logo_container">
								<div class="logo_align">
									<a id="custom_logo_transparent" class="logo_wrapper default" href="">
										<img src="images/logo@2x_white.png" alt="" width="175" height="24"/>
									</a>-->
								</div>
							</div>
							<!-- End logo -->
							<div id="menu_wrapper">
								<div id="nav_wrapper">
									<div class="nav_wrapper_inner">
										<div id="menu_border_wrapper">
											<div class="menu-main-menu-container">
												<ul id="main_menu" class="nav">
													<li class="">
														<a href="index.php">Home</a>														
													</li>
													<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children arrow menu-item-8">
														<a href="#">Renters</a>														
														<ul  class="sub-menu">
															<li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-134">
																<a href="signup.php">Sign Up</a>
															</li>
															<li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-162">
																<a href="contact.php">Contact Us</a>
															</li>
															<li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-158">
																<a href="about.php">About Us</a>
															</li>															
														</ul>
													</li>


													<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children arrow menu-item-9">
														<a href="#">Suppliers</a>
														<ul  class="sub-menu">
															<li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-134">
																<a href="signup.php">Sign Up</a>
															</li>
															<li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-162">
																<a href="contact.php">Contact Us</a>
															</li>
															<li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-158">
																<a href="about.php">About Us</a>
															</li>															
														</ul>
													</li>
													<?php
														if(isset($_SESSION['user_id']))
															{
															?>
															<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  menu-item-10"><a href="logout.php">Logout</a></li>
															<?php
															}
															else
															{
															?>
															<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  menu-item-10">
																<a href="login.php">Login</a>														
															</li>
															<?php
															}
															?>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Begin right corner buttons -->
									<div id="logo_right_button">										
										<div class="header_cart_wrapper">
											<a href="cart.php" title="View Cart">
												<span class="ti-shopping-cart"></span>
											</a>
										</div>
									</div>
									<!-- End right corner buttons -->
								</div>
								<!-- End main nav -->
							</div>
						</div>
					</div>
				</div>
			</div>