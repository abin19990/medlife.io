<?php require_once('header.php') ?>
<?php require_once('menu.php') ?>

<!-- Header Start -->
	
	<!-- Content Start -->
	<section class="content inner-content doctor-pg clearfix">
		<!-- Banner Start -->
		<div class="banner inner-banner clearfix" style="background-image:url('images/hospi.jpg'); width:100%;height:250px;background-size:cover;">
			<img alt="BANNER" class="img-responsive" src="" >
			<div class="banner-overlay"></div><!-- Banner Detail Start -->
			<div class="banner-desc clearfix">
				<div class="container">
					<h1>Hospitals</h1>
					<h4>Booking</h4>
				</div>
			</div><!-- Banner Detail End -->
		</div><!-- Banner End -->
		<!-- Scroll To Section Start -->
		<!-- Scroll To Section End -->
		<!-- Phisician Md Start -->
		<!-- Phisician Md End -->
		<!-- Clinic Staff Start -->
		<!-- Clinic Staff End -->
		<!-- Medlife Clinic Number Start -->
		<!-- Medlife Clinic Number End -->
		<!-- Nurse Practice Start -->
		<div class="nurse-practice clearfix">
			<div class="container">
				<!-- Section Title Start -->
				<div class="section-title">
					<h2>Hospitals
                        
                    </h2>
				</div><!-- Section Title End -->
				<div class="row">


				<?php
				$dctr=$db->hospitalListFrontend();
				while($dr=$db->getObject($dctr))
				{
					
					if($dr->photo=="")
					{
						$ph="images/noimg.jpg";
					}
					else{
						$ph="Admin/".$dr->photo;
					}
				?>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="practice-block">
							<img alt="NURSE" class="img-responsive" src="<?php echo $ph; ?>">
							<div class="nurse-detail">
								<h6><?php echo $dr->name; ?></h6>
								<h6><span><?php echo $dr->place; ?></span></h6>
								

								<p><a href="hospitalviewdetails.php?id=<?php echo $dr->uid; ?>">View Details</a></p>
							</div><!--/.nurse-detail"-->
						</div><!--/.practice-block-->
					</div><!--/.col-sm-6 col-md-6 col-lg-3-->
					
				<?php
				}
				?>	
					
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!-- Nurse Practice End -->
	</section><!-- Content End -->
	
	<!-- Modal Start -->
	<!-- Login Modal Start -->
	
	<div class="back-to-top clearfix">
		<a href="#"><span><i aria-hidden="true" class="fa fa-chevron-up"></i> Top</span></a>
	</div><!-- Back To Top End -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-3.1.1.min.js">
	</script> <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	 <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js">
	</script> <!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Parallax Start -->
	<script src="js/parallax.js">
	</script> <!-- Parallax End -->
	<!-- Slick Sider -->
	<script src="js/slick.js">
	</script> <!-- Slick Sider -->
	 <!-- Count Up -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js">
	</script>
	<script src="js/jquery.counterup.js">
	</script> <!-- Count Up -->
	 <!-- Rellex Start -->
	<script src="js/rellax.js">
	</script> <!-- Rellex End -->
	 <!-- Ofi-Script -->
	<script src="js/ofi.js">
	</script> <!-- Ofi-Script -->
	 <!-- Mobile Menu Js Start -->
	<script src="js/jquery.dlmenu.js">
	</script> <!-- Mobile Menu Js End -->
	<!-- Selectric Start -->
	<script src="js/jquery.selectric.js">
	</script> <!-- Selectric End -->
	<script src="js/jquery-ui.js">
	</script> <!-- Range Slide -->
	<!-- Jquery Ui Date Picker -->
	<!-- Bootstrap Time Picker -->
	<script src="js/jquery.timepicker.js">
	</script> <!-- Bootstrap Time Picker -->
	<!-- Main Js script -->
	<script src="js/script.js">
	</script>   



<?php require_once('footer.php') ?>