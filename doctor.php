<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Doctor</title><!-- Favicon -->
	<link href="images/favicon.ico" rel="icon" type="image/x-icon"><!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"><!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet"><!--=== Add By Designer ===-->
	<link href="css/style.css" rel="stylesheet">
	<link href="fonts/fonts.css" rel="stylesheet"><!-- Yamm Megamenu -->
	<link href="css/yamm.css" rel="stylesheet"><!-- Animation -->
	<link href="css/animate.css" rel="stylesheet"><!-- Animation -->
	<!-- Flat Icon -->
	<link href="fonts/flaticon.css" rel="stylesheet"><!-- Flat Icon -->
	<!-- Jquery Ui Date Picker -->
	<!-- Range Slider Start -->
	<link href="css/jquery-ui.css" rel="stylesheet">
	<link href="css/jquery-ui-slider-pips.css" rel="stylesheet"><!-- Range Slider End -->
	<!-- Jquery Ui Date Picker -->
	<!-- Boostrap Time Picker -->
	<link href="css/jquery.timepicker.css" rel="stylesheet"><!-- Boostrap Time Picker -->
	<!-- Selectric Start -->
	<link href="css/selectric.css" rel="stylesheet"><!-- Selectric End -->
	<!-- Multi Level Push Menu -->
	<link href="css/normalize.css" rel="stylesheet">
	<link href="css/component.css" rel="stylesheet">
	<!-- <script src="js/modernizr.custom.js"> -->
	</script><!-- Multi Level Push Menu -->
	<!-- REVOLUTION STYLE SHEETS -->
	<link href="js/revslider/settings.css" rel="stylesheet" type="text/css">
	<link href="js/revslider/layers.css" rel="stylesheet" type="text/css">
	<link href="js/revslider/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
	<!-- Slick Slider -->
	<link href="css/slick-slider/slick.css" rel="stylesheet">
	<link href="css/slick-slider/slick-theme.css" rel="stylesheet"><!-- Slick Slider -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
							$(document).ready(function(){
							$("#topdr").click(function(){
								
								$(".drdetails").fadeToggle(3000);
							});
							});
							</script>
</head>
<body>
	<!-- Header Start -->
<?php require_once('menu.php') ?>

	<!-- Header Start -->
	
	<!-- Content Start -->
	<section class="content inner-content doctor-pg clearfix">
		<!-- Banner Start -->
		<div class="banner inner-banner clearfix">
			<img alt="BANNER" class="img-responsive" src="images/medibg.jpg">
			<div class="banner-overlay"></div><!-- Banner Detail Start -->
			<div class="banner-desc clearfix">
				<div class="container">
					<h1>Physicians</h1>
					<h4>Meet our clinic staff</h4>
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
					<h2>Top Doctor's</h2>
				</div><!-- Section Title End -->
				<div class="row">


				

				<?php
				$dctr=$db->doctorListFrontend();
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

							





<div class="dctr"  style="display: none;">

					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="practice-block" >
							<img alt="NURSE" class="img-responsive" src="<?php echo $ph; ?>">
							<div class="nurse-detail">
								<h6><?php echo $dr->name; ?></h6>
								<h6><span><?php echo $dr->department; ?></span></h6>
								

								<p><a href="viewdetails.php?id=<?php echo $dr->id; ?>">View Details</a></p>
							</div><!--/.nurse-detail"-->
						</div><!--/.practice-block-->
					</div><!--/.col-sm-6 col-md-6 col-lg-3-->

					</div>
					
				<?php
				}
				?>
				</div> 	
				
				<button id="show" class="btn btn-primary">Show doctor details </button>
				<script>
$(document).ready(function(){
  
  $("#show").click(function(){
    $(".dctr").toggle(1500);
  });
});
</script>

				
				

					
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!-- Nurse Practice End -->
	</section><!-- Content End -->
	<!-- Footer Start -->
	
	
	<!-- Back To Top Start -->
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
	 <!-- Count Up 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js">-->
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