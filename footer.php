		<div id="footer" class=" ppb_wrapper">
			<ul class="sidebar_widget three">
				<li id="text-2" class="widget widget_text">
					<h2 class="widgettitle">About Us</h2>
					<div class="textwidget">
						<p>Find the exact equipment you need and tell us when and where you need it. </p>
						<p style="font-size:50px";>
							LOGO
							<!--<img src="images/logo@2x_white.png" alt="" width="175" height="24">-->
							</p>
						</div>
					</li>
					<li id="text-3" class="widget widget_text">
						<h2 class="widgettitle">Contact Info</h2>
						<div class="textwidget">
							<p>
								<span class="ti-mobile" style="margin-right:10px;"></span>1-567-124-44227
							</p>
							<p>
								<span class="ti-location-pin" style="margin-right:10px;"></span>184 Main Street East Perl Habour 8007
							</p>
							<p>
								<span class="ti-alarm-clock" style="margin-right:10px;"></span>Mon - Sat 8.00 - 18.00 Sunday CLOSED
							</p>
							<div style="margin-top:20px;">
								<div class="social_wrapper shortcode dark ">
									<ul>
										<li class="facebook">
											<a target="_blank" title="Facebook" href="#">
												<i class="fa fa-facebook"></i>
											</a>
										</li>
										<li class="twitter">
											<a target="_blank" title="Twitter" href="#">
												<i class="fa fa-twitter"></i>
											</a>
										</li>
										<li class="youtube">
											<a target="_blank" title="Youtube" href="#">
												<i class="fa fa-youtube"></i>
											</a>
										</li>
										<li class="pinterest">
											<a target="_blank" title="Pinterest" href="#">
												<i class="fa fa-pinterest"></i>
											</a>
										</li>
										<li class="instagram">
											<a target="_blank" title="Instagram" href="#">
												<i class="fa fa-instagram"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li id="mc4wp_form_widget-5" class="widget widget_mc4wp_form_widget">
						<h2 class="widgettitle">Newsletter</h2>
						<script type="text/javascript">(function() {
	if (!window.mc4wp) {
		window.mc4wp = {
			listeners: [],
			forms    : {
				on: function (event, callback) {
					window.mc4wp.listeners.push({
						event   : event,
						callback: callback
					});
				}
			}
		}
	}
})();
</script>
					<?php
					if(isset($_POST['submit_email']))
					{
					$email =$_POST['email'];
					$add_eamil= mysqli_query($mysqli, "insert Newsletter values('','".$email."')");
					}
					?>
						<form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-27" method="post" data-id="27" data-name="Newsletter" >
							<div class="mc4wp-form-fields">Subscribe to receive daily deals


								<input type="email" name="email" placeholder="Your Email Address" required />
								<br/>
								<input type="submit" name="submit_email" value="Subscribe" />
								
						</form>
						<!-- / MailChimp for WordPress Plugin -->
					</li>
				</ul>
			</div>
			<div class="footer_bar  ppb_wrapper ">
				<div class="footer_bar_wrapper ">
					<div class="menu-footer-menu-container">
						<ul id="footer_menu" class="footer_nav">
							<li id="menu-item-3138" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3138">
								<a href="about.php">About Us</a>
							</li>																			
							<li id="menu-item-3136" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3136">
								<a href="contact.php">Contact Us</a>
							</li>
							<li id="menu-item-3136" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3136">
								<a href="privacy.php">Privacy Policy</a>
							</li>
							<li id="menu-item-3136" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3136">
								<a href="terms.php">Terms and Conditions</a>
							</li>
						</ul>
					</div>
					<div id="copyright">Copyright &copy; 2017 ClickRstop All Rights Reserved. Designed By ClickRstop</div>
					<br class="clear"/>
					<a id="toTop" href="javascript:;">
						<i class="fa fa-angle-up"></i>
					</a>
				</div>
			</div>