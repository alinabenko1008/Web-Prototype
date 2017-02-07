<!DOCTYPE html>
<?php
define("ABS_PATH", $_SERVER['DOCUMENT_ROOT']);
/************** Operation api *********************/
include(ABS_PATH . "/api/abc_value.php");   		    //Overall Stock
include(ABS_PATH . "/api/api_stockmanagement.php"); 	//Stock Management
include(ABS_PATH . "/api/get_stock_division_data.php");	 //stock by division												//Stock by Division
include(ABS_PATH . "/api/get_stock_gender_data.php");	//Stock by Gender
include(ABS_PATH . "/api/get_optional_data.php");   		//Optional

/************** Analysis api *********************/
include(ABS_PATH . "/api/get_four_analysis_data.php");   //Store Visitors & fitting room &..
include(ABS_PATH . "/api/get_refill_data.php");         //Refill Performance
include(ABS_PATH . "/api/get_stockage_data.php");      //Stock Age Structure Distribution
include(ABS_PATH . "/api/get_reservation_data.php");   //Reservation Performance
//include(ABS_PATH . "/api/get_visitors_data.php");   //
//include(ABS_PATH . "/api/get_visitors_data.php");   //Inbound Accuracy
//include(ABS_PATH . "/api/get_visitors_data.php");   //
//include(ABS_PATH . "/api/get_visitors_data.php");   //

$visitor_chartview_title="Number of store visitors (integer) on a particular day";
//$visitor_chartview_content=$chartview_date_area;

$fittting_chartview_title="Number of items being brought into fitting rooms on a particular day";
//$fitting_chartview_content=$chartview_date_area;

$consumer_chartview_title="percentage of consumers that actually bought something";
//$consumer_chartview_content=$chartview_date_area;

$fitting_rate_chartview_title="percentage of items that have been brought into the fitting rooms and then have been sold";
//$fitting_rate_chartview_content=$chartview_date_area;





?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Detego - Responsive Admin Dashboard Template</title>

        <link href="assets/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />
        
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" /> 
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<script src="assets/pages/jquery-3.1.1.min.js"></script>
		        <!--Morris Chart CSS -->
				
				
        <script src="assets/js/modernizr.min.js"></script>
        
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.php" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Detego</span></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="ion-navicon"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
			                     <input type="text" placeholder="Search..." class="form-control">
			                     <a href=""><i class="fa fa-search"></i></a>
			                </form>


                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="true">
                                        <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                        <li class="list-group nicescroll notification-list">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog fa-2x text-custom"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">Updates</h5>
                                                    <p class="m-0">
                                                        <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New user registered</h5>
                                                    <p class="m-0">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                                <div class="media">
                                                    <div class="pull-left p-r-10">
                                                     <em class="fa fa-cog fa-2x text-custom"></em>
                                                    </div>
                                                    <div class="media-body">
                                                      <h5 class="media-heading">New settings</h5>
                                                      <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                    </div>
                                              </div>
                                           </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="list-group-item text-right">
                                                <small class="font-600">See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect"><i class="icon-size-fullscreen"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect"><i class="icon-settings"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile waves-effect" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="index.php" id="link_1" class="waves-effect waves-light active"><i class="ti-home" ></i> <span> Operation </span> </a>
                                <!--
								<ul >
                                    <li><a href="#">Overview</a></li>
                                 	<li><a href="#">Stock Breakdown</a></li>
                                    <li><a href="#">Stock Management</a></li>
									<li><a href="#">Optional</a></li>
                                </ul>
								-->
                            </li>

                            <li class="has_sub">
                                <a href="#" id="link_2" class="waves-effect waves-light active"><i class="ti-paint-bucket" ></i> <span> Analysis </span> </a>
                                <!--
								<ul>
                                    <li><a href="#">Store Visitors</a></li>
                                    <li><a href="#">Fitting Rooms</a></li>
                                    <li><a href="#">Consumer Conversion Rate</a></li>
                                    <li><a href="#">Fitting Room Conversion Rate</a></li>
                                    <li><a href="#">Stock Age Structure Distribution</a></li>
                                    <li><a href="#">Inbound Accuracy</a></li>
                                    <li><a href="#">Refill/Replenishment</a></li>
                                    <li><a href="#">Reservation Performance</a></li>
                               </ul>
							   -->
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->

				<div id="div_2" class="content">
					<!----------------- analysis -------------------->
					
					<div  class="container"> 
						<!----------------- visitor and fitting room --------------------> 
						<div class="row">
							<div class="col-lg-6">
								<div class="card-box">
									<h4 class="m-t-0 m-b-30 header-title"><b><?php echo $visitor_chartview_title; ?></h4>
									<!--
									<form action="#" method="post">
											<input type="date" name="pick_day" data-date-inline-picker="true" value="<?php echo $pick_date; ?>"/>
											<a href="#" id="button1" ><input type="submit" name="submit" value="Submit day"></a>
										</form>
										<p class="text-muted m-b-30 font-13">
											<?php echo $visitor_chartview_content; ?>
										</p>
									-->
									<div id="line-regions"></div>
								</div>
							</div>
							
							
							<div class="col-lg-6">
								<div class="card-box">
									<h4 class="m-t-0 m-b-30 header-title"><b><?php echo $fittting_chartview_title; ?></h4>
									<!--
									<form action="index.php" method="post">
											<input type="date" name="pick_day" data-date-inline-picker="true" value="<?php echo $pick_date; ?>"/>
											<input type="submit" id="button2" name="submit" value="Submit day">
										</form>
										<p class="text-muted m-b-30 font-13">
											<?php echo $fitting_chartview_content; ?>
										</p>
									-->
									<div id="line-regions1"></div>
								</div>
							</div>
						</div>
						<!----------------- consumer and fitting room rate--------------------> 
						<div class="row">
							<div class="col-lg-6">
								<div class="card-box">
									<h4 class="m-t-0 m-b-30 header-title"><b><?php echo $consumer_chartview_title; ?></h4>
									<!--
									<form action="index.php" method="post">
										<input type="date" name="pick_day" data-date-inline-picker="true" value="<?php echo $pick_date; ?>"/>
										<input type="submit" name="submit" id="button3" value="Submit day">
									</form>
									<p class="text-muted m-b-30 font-13">
										<?php echo $consumer_chartview_content; ?>
									</p>
									-->
									<div id="line-regions2"></div>
								</div>
							</div>
							
							
							<div class="col-lg-6">
								<div class="card-box">
									<h4 class="m-t-0 m-b-30 header-title"><b><?php echo $fitting_rate_chartview_title; ?></h4>
									<!--
									<form action="index.php" method="post">
										<input type="date" name="pick_day" data-date-inline-picker="true" value="<?php echo $pick_date; ?>"/>
										<input type="submit" id="button4" name="submit" value="Submit day">
									</form>
									<p class="text-muted m-b-30 font-13">
										<?php echo $fitting_rate_chartview_content; ?>
									</p>
									-->
									<div id="line-regions3"></div>
								</div>
							</div>
						</div>
						<!--
							<div class="col-lg-6">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b><?php echo $visitor_chartview_title; ?></h4>
										<form action="index.php" method="post">
											<input type="date" name="pick_day" data-date-inline-picker="true" value="<?php echo $pick_date; ?>"/>
											<input type="submit" name="submit" value="Submit day">
										</form>
										<p class="text-muted m-b-30 font-13">
											<?php echo $visitor_chartview_content; ?>
										</p>
										
									<div id="chart-with-area1" class="ct-chart ct-golden-section"></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b><?php echo $fittting_chartview_title; ?></h4>
										<form action="index.php" method="post">
											<input type="date" name="pick_day" data-date-inline-picker="true" value="<?php echo $pick_date; ?>"/>
											<input type="submit" name="submit" value="Submit day">
										</form>
										<p class="text-muted m-b-30 font-13">
											<?php echo $fitting_chartview_content; ?>
										</p>
										
									<div id="chart-with-area2" class="ct-chart ct-golden-section"></div>
								</div>
							</div>
						
						
							<div class="col-lg-6">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b><?php echo $consumer_chartview_title; ?></h4>
										<form action="index.php" method="post">
											<input type="date" name="pick_day" data-date-inline-picker="true" value="<?php echo $pick_date; ?>"/>
											<input type="submit" name="submit" value="Submit day">
										</form>
										<p class="text-muted m-b-30 font-13">
											<?php echo $consumer_chartview_content; ?>
										</p>
										
									<div id="chart-with-area3" class="ct-chart ct-golden-section"></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b><?php echo $fitting_rate_chartview_title; ?></h4>
										<form action="index.php" method="post">
											<input type="date" name="pick_day" data-date-inline-picker="true" value="<?php echo $pick_date; ?>"/>
											<input type="submit" name="submit" value="Submit day">
										</form>
										<p class="text-muted m-b-30 font-13">
											<?php echo $fitting_rate_chartview_content; ?>
										</p>
										
									<div id="chart-with-area4" class="ct-chart ct-golden-section" ></div>
								</div>
							</div>
						
					</div>
						<!----------------- analysis end ----------------->
						
						<!----------------- Stock Age and Inbound --------------------> 
						<div class="row">
							<div class="col-lg-9">
								<div class="card-box">
									<h4 class="m-t-0 m-b-30 header-title"><b>Stock Age Distribution</b></h4>
									
									<div id="chart"></div>
									<!--<div id="roated-chart"></div>--> 
								</div>
								
							</div>
							
							<div class="col-sm-6 col-lg-3 text-center" >
								<div class="card-box">
									<!--<h4 class="m-t-0 m-b-30 header-title"><b>Inbound Accuracy</b></h4>
									<div class="p-20">
										<input class="knob" data-width="200" data-height="200" data-bgColor="#f8f8ff" data-linecap=round data-fgColor="#35a35b" value="<?= $var_inbound_accuracy; ?>" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1"/>-->
										<div id="donut-chart-inbound"></div>
									<!--</div>-->
								</div>	
							</div>
						</div>
						
						<!----------------- Refill  --------------------> 
						<div class="row">
							<div class="col-lg-12">
								<div class="card-box">
									<h4 class="m-t-0 m-b-30 header-title"><b>Refill Performance</b></h4>
									
									<div id="combine-chart3"></div>
								</div>
							</div>
						</div>
						
						<!----------------- Reservation and hit rate --------------------> 
						<div class="row">
							<div class="col-lg-9">
								<div class="card-box">
									<h4 class="m-t-0 m-b-30 header-title"><b>Reservation Performance</b></h4>
									
									<div id="chart1"></div>
									<!--<div id="roated-chart"></div>--> 
								</div>
								
							</div>
							
							<div class="col-sm-6 col-lg-3 text-center" >
								<div class="card-box">
									<!--<h4 class="m-t-0 m-b-30 header-title"><b>Hit Rate</b></h4>
									<div class="p-20">
										<input class="knob" data-width="200" data-height="200" data-bgColor="#f8f8ff" data-linecap=round data-fgColor="#35a35b" value="<?= $var_hitrate?>" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1"/>
										
									</div>-->
									<div id="donut-chart-hitrate"></div>
								</div>	
							</div>
						</div>
						
						<!----------------- content end --------------------> 
						
						
						
					<div class="container">
					
					</div>
					
                </div> <!-- content -->

                <footer class="footer">
                    2017 © Detego.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
		
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
		
        <!--C3 Chart-->
        <script type="text/javascript" src="assets/plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="assets/plugins/c3/c3.min.js"></script>
        <script src="assets/pages/jquery.c3-chart.init_index.js"></script>
        <!--C3 Chart-->
						<!--Morris Chart
		<script src="assets/plugins/chartist/dist/chartist.min.js"></script>
		<script src="assets/pages/jquery.chartist.init_analysis.js"></script>
-->
        
        <!-- EASY PIE CHART JS -->
        <script src="assets/plugins/jquery.easy-pie-chart/dist/easypiechart.min.js"></script>
        <script src="assets/plugins/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="assets/pages/easy-pie-chart.init.js"></script>
		
        <script>
            var resizefunc = [];
        </script>
		
	</body>
</html>