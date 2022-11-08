<?php
error_reporting(1);
require_once('Admin/class/class.dbClass.php');
require_once('Admin/class/class.mainClass.php');
$db=new mainClass();

?>

<header class="header clearfix">
		<!-- Header Top Start -->
		<div class="h-top clearfix">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-4">
						<div class="h-left">
							<p><span><i aria-hidden="true" class="fa fa-clock-o"></i> OPENED ON WEEKDAYS FROM</span> 8:30 AM TO 6:30 PM</p>
						</div>
					</div>
					<div class="col-sm-8 col-md-8">
						<div class="h-right">
							<!-- History Policy Start -->
							<div class="h-history-policy clearfix">
								<div class="burger hidden-lg">
									<a href="#"><span></span> <span></span> <span></span></a>
								</div>
								<ul>
									<li>
										<a href="./Admin/resgister-doctor.php">Register as a Doctor</a>
									</li>
                                    <li>
										<a href="./admin/register-hospital.php">Register as a Hospital</a>
									</li>
									<li>
										<a href="./admin/index.php">Loig In</a>
									</li>
									
									
								</ul>
							</div><!-- History Policy End -->
							
						</div><!--/.h-right-->
					</div><!--/.col-sm-8 col-md-8"-->
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!-- Header Top End -->
		<!-- Header Bottom Start -->
		<div class="h-bottom clearfix">
			<div class="container">
				<div class="navigation-menu">
					<div class="navbar yamm navbar-default">
						<div class="navbar-header">
							<a class="navbar-brand" href="index.php"><img alt="" class="hidden-xs hidden-sm" src="images/lo.jpg" style="height:50px;"> <img alt="" class="visible-xs visible-sm" src="images/lo.jpg"></a>
						</div><!-- Desktop Navigation List Start -->
						<div class="navbar-collapse collapse hidden-xs" id="navbar-collapse-1">
							<div class="background"></div>
							<ul class="nav navbar-nav">
								<li class="dropdown active">
									<a  href="hospitals.php">HOSPITALS</a>
									
								</li><!--/.dropdown-->
                                <li>
									<a href="doctor.php">DOCTORS</a>
									
								</li>
								<li>
									<a href="service.php">SERVICES</a>
									
								</li><!--/.dropdown yamm-fw active-->
								
								
								
								
                                
								<li>
									<a href="contact.php">CONTACT</a>
								</li>
							</ul><!--/.nav navbar-nav-->
						</div><!-- Desktop Navigation List End -->
						<!-- Mobile Navigation List Start -->
						<div class="dl-menuwrapper visible-xs" id="dl-menu">
							<button class="dl-trigger">Open Menu</button>
							<div class="background"></div>
							<ul class="dl-menu">
								<li class="active">
									<a href="index.php">Home</a>
							
								</li>
								<li class="active">
									<a href="hospitals.php">Hospitals</a>
						
								</li>
								<li>
									<a href="doctor.php">DOCTORS</a>
								</li>
								<li>
									<a href="service.php">Service</a>
								</li>
								
								<li>
									<a href="contact.php">Contact</a>
								</li>
							
							</ul><!--/.dl-menu-->
						</div><!-- /dl-menuwrapper -->
						<!-- Mobile Navigation List End -->
						<!-- Cart Right Start -->
						
					</div><!--/.navbar yamm navbar-default-->
				</div><!--/.navigation-menu-->
			</div><!--/.container-->
		</div><!-- Header Bottom End -->
	</header><!-- Header End -->