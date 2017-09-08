            <?php
			$page_name = BASENAME($_SERVER['PHP_SELF']);
			$user_id = $_SESSION['user_id'];
			$check_user_type = mysqli_query($mysqli,"select * from users where id='$user_id'");
			$fecth_details = mysqli_fetch_array($check_user_type);
			?>
			<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler"> </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
						<?php
							if($fecth_details['user_type']=='admin'){
						?>
                        <li class="nav-item start <?php if($page_name == 'dashboard.php') { ?>active open<?php } ?>">
                            <a href="dashboard.php" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                            <li class="nav-item <?php if($page_name == 'add_category.php' || $page_name == 'view_category.php') { ?>active open<?php } ?> ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-pointer"></i>
                                <span class="title">Category</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu"  style="display:block">
                                <li class="nav-item <?php if($page_name == 'add_category.php' || $page_name == 'add_category.php') { ?>open<?php } ?> ">
                                    <a href="add_category.php" class="nav-link nav-toggle">
										<i class="icon-home"></i>
                                        <span class="title">Add Category</span>
                                    </a>
                                </li>
								<li class="nav-item <?php if($page_name == 'view_category.php' || $page_name == 'view_category.php') { ?>open<?php } ?> ">
                                    <a href="view_category.php" class="nav-link nav-toggle">
										<i class="icon-compass"></i>
                                        <span class="title">View Category</span>
                                    </a>
                                </li>
								
                            </ul>
                        </li>
						 <li class="nav-item <?php if($page_name == 'add_sub_category.php' || $page_name == 'view_sub_category.php') { ?>active open<?php } ?> ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-pointer"></i>
                                <span class="title">Sub Category</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu"  style="display:block">
                                <li class="nav-item <?php if($page_name == 'add_sub_category.php' || $page_name == 'add_sub_category.php') { ?>open<?php } ?> ">
                                    <a href="add_sub_category.php" class="nav-link nav-toggle">
										<i class="icon-home"></i>
                                        <span class="title">Add Sub Category</span>
                                    </a>
                                </li>
								<li class="nav-item <?php if($page_name == 'view_sub_category.php' || $page_name == 'view_sub_category.php') { ?>open<?php } ?> ">
                                    <a href="view_sub_category.php" class="nav-link nav-toggle">
										<i class="icon-compass"></i>
                                        <span class="title">View Sub Category</span>
                                    </a>
                                </li>
								
                            </ul>
                        </li>

						<li class="nav-item <?php if($page_name == 'users.php' || $page_name == '#.php') { ?>active open<?php } ?> ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-pointer"></i>
                                <span class="title">Suppliers</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu"  style="display:block">
                                <li class="nav-item <?php if($page_name == 'active_supplier.php' || $page_name == 'active_supplier.php') { ?>open<?php } ?> ">
                                    <a href="active_supplier.php" class="nav-link nav-toggle">
										<i class="icon-home"></i>
                                        <span class="title">Active Suppliers</span>
                                    </a>
                                </li>
								<li class="nav-item <?php if($page_name == 'pending_supplier.php' || $page_name == 'pending_supplier.php') { ?>open<?php } ?> ">
                                    <a href="pending_supplier.php" class="nav-link nav-toggle">
										<i class="icon-compass"></i>
                                        <span class="title">Pending Suppliers</span>
                                    </a>
                                </li>

								<li class="nav-item <?php if($page_name == 'inactive_supplier.php' || $page_name == 'inactive_supplier.php') { ?>open<?php } ?> ">
                                    <a href="inactive_supplier.php" class="nav-link nav-toggle">
										<i class="icon-compass"></i>
                                        <span class="title">Inactive Suppliers</span>
                                    </a>
                                </li>
								
                            </ul>
                        </li>

						<li class="nav-item <?php if($page_name == 'rental.php' || $page_name == 'rental.php') { ?>open<?php } ?> ">
                              <a href="rental.php" class="nav-link nav-toggle">
									<i class="icon-compass"></i>
                                     <span class="title">Rental</span>
                                </a>
                         </li>
						
						<li class="nav-item <?php if($page_name == 'orders.php' || $page_name == 'orders.php') { ?>open<?php } ?> ">
                              <a href="orders.php" class="nav-link nav-toggle">
									<i class="icon-compass"></i>
                                     <span class="title">Orders</span>
                                </a>
                         </li>
						
						 <li class="nav-item <?php if($page_name == 'approve_service.php') { ?>open<?php } ?> ">
                                    <a href="approve_service.php" class="nav-link nav-toggle">
										<i class="icon-compass"></i>
                                        <span class="title">Approve Service</span>
                                    </a>
                                </li>

							<li class="nav-item <?php if($page_name == 'about.php') { ?>open<?php } ?> ">
                                    <a href="about.php" class="nav-link nav-toggle">
										<i class="icon-compass"></i>
                                        <span class="title">About us</span>
                                    </a>
                             </li>

							 <li class="nav-item <?php if($page_name == 'term.php') { ?>open<?php } ?> ">
                                    <a href="term.php" class="nav-link nav-toggle">
										<i class="icon-compass"></i>
                                        <span class="title">Terms</span>
                                    </a>
                             </li>

							 <li class="nav-item <?php if($page_name == 'privacy.php') { ?>open<?php } ?> ">
                                    <a href="privacy.php" class="nav-link nav-toggle">
										<i class="icon-compass"></i>
                                        <span class="title">Privacy</span>
                                    </a>
                             </li>

					 <?php
					 }else if($fecth_details['user_type']=='supplier'){
					 ?>

					 <li class="nav-item start <?php if($page_name == 'dashboard.php') { ?>active open<?php } ?>">
                            <a href="dashboard.php" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>

					<li class="nav-item <?php if($page_name == 'add_service.php' || $page_name == 'view_service.php') { ?>active open<?php } ?> ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-pointer"></i>
                                <span class="title">Service</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu"  style="display:block">
                                <li class="nav-item <?php if($page_name == 'add_service.php' || $page_name == 'add_service.php') { ?>open<?php } ?> ">
                                    <a href="add_service.php" class="nav-link nav-toggle">
										<i class="icon-home"></i>
                                        <span class="title">Add Service</span>
                                    </a>
                                </li>
								<li class="nav-item <?php if($page_name == 'view_service.php' || $page_name == 'view_service.php') { ?>open<?php } ?> ">
                                    <a href="view_service.php" class="nav-link nav-toggle">
										<i class="icon-compass"></i>
                                        <span class="title">View Service</span>
                                    </a>
                                </li>
								
                            </ul>
                        </li>

						<li class="nav-item <?php if($page_name == 'orders.php' || $page_name == 'orders.php') { ?>open<?php } ?> ">
                              <a href="orders.php" class="nav-link nav-toggle">
									<i class="icon-compass"></i>
                                     <span class="title">Orders</span>
                                </a>
                         </li>
						
					<?php 
					} 
					?>
                       <!-- <li class="heading">
                            <h3 class="uppercase">Miscellaneous</h3>
                        </li>
                     

                        <!--<li class="nav-item  ">
                            <a href="?p=" class="nav-link nav-toggle">
                                <i class="icon-wallet"></i>
                                <span class="title">Plans</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
										<i class="icon-plus"></i>
                                        <span class="title"> Add Pricing</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
										<i class="icon-eye"></i>
                                        <span class="title"> View Pricing</span>
                                    </a>
                                </li>
                            </ul>
                        </li>-->
						
						
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->