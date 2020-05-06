<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
    
	<title>ConfiguroWeb|| Person Detail</title>
	
   
        
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	
    <!--================================ Main STYLE SHEETs====================================-->
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/color/color.css">
	<link rel="stylesheet" type="text/css" href="assets/testimonial/css/style.css" />
	<link rel="stylesheet" type="text/css" href="assets/testimonial/css/elastislide.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<!--================================FONTAWESOME==========================================-->
		
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        
	<!--================================GOOGLE FONTS=========================================-->
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700,900'>  
		
	<!--================================SLIDER REVOLUTION =========================================-->
	
	<link rel="stylesheet" type="text/css" href="assets/revolution_slider/css/revslider.css" media="screen" />
		
</head>
<body>
	<div class="preloader"><span class="preloader-gif"></span></div>
	<div class="theme-wrap clearfix">
		<!--================================responsive log and menu==========================================-->
		<div class="wsmenucontent overlapblackbg"></div>
		<div class="wsmenuexpandermain slideRight">
			<a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
			<a href="#" class="smallogo"><img src="images/logo.png" width="120" alt="" /></a>
		</div>
	<?php include_once('includes/header.php');?>
		
		<!--================================PAGE TITLE==========================================-->
		<div class="page-title-wrap bgorange-1 padding-top-30 padding-bottom-30"><!-- section title -->
			<h4 class="white">Single Person Detail</h4>
		</div><!-- section title end -->
		
		<!--================================listing SECTION==========================================-->
		
		<section class="aside-layout-section padding-top-70 padding-bottom-40">
			<div class="container"><!-- section container -->
				<div class="row">
					<?php
$vid=$_GET['viewid'];
$sql="SELECT * from  tblperson where ID=:vid";
$query = $dbh -> prepare($sql);
$query->bindParam(':vid',$vid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?><!-- row -->
					<div class="col-md-9 col-sm-8 col-xs-12 main-wrap"><!-- content area column -->
						<div class="listing-single padding-bottom-40">
							<div class="single-listing-wrap">
								
								<div class="listing-contact-detail-wrap">
									<div class="listing-contact-section-title">
										<h5>contact</h5>
									</div>
									<div class="listing-contact-section-table">
										<div class="listing-contact-table-field">
											<ul>
												<li class="info">Name</li>
												<li class="details"><?php  echo $row->Name;?> </li>
											</ul>
										</div>
										<div class="listing-contact-table-field">
											<ul>
												<li class="info">Mobile Number</li>
												<li class="details"><?php  echo $row->MobileNumber;?></li>
											</ul>
										</div>
										<div class="listing-contact-table-field">
											<ul>
												<li class="info">Address</li>
												<li class="details"><?php  echo $row->Address;?></li>
											</ul>
										</div>
										
									</div>
								</div>
							
							
							</div>
						</div>

					</div><!-- content area end -->
					<div class="col-md-3 col-sm-4 col-xs-12" style="padding-top: 30px"><!-- sidebar column -->
						<div class="sidebar sidebar-wrap">
							
							
							<div class="sidebar-widget shadow-1">
								<div class="sidebar-widget-title">
									<h5><span class="bgblue-1"></span>Profile Pics</h5>
								</div>
								<div class="sidebar-widget-content advertise  clearfix">
									<div class="sidebar-image-ads">
										<img src="admin/images/<?php echo $row->Picture;?>" height="195" width="300" alt="listing item"/>
									</div>
								</div>
							</div>
							
						</div>
					</div>

					<?php $cnt=$cnt+1;}} ?>	

				</div>

			</div><!-- section container end -->
		</section>
		
	
	<?php include_once('includes/footer.php');?>
	</div>

	<!--================================JQuery===========================================-->
        
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery.js"></script><!-- jquery 1.11.2 -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	
	<!--================================BOOTSTRAP===========================================-->
        
	<script src="bootstrap/js/bootstrap.min.js"></script>	
	
	<!--================================NAVIGATION===========================================-->
	
	<script type="text/javascript" src="js/menu.js"></script>
	
	<!--================================SLIDER REVOLUTION===========================================-->
		
	<script type="text/javascript" src="assets/revolution_slider/js/revolution-slider-tool.js"></script>
	<script type="text/javascript" src="assets/revolution_slider/js/revolution-slider.js"></script>
	
	<!--================================MAP===========================================-->
		
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBueyERw9S41n4lblw5fVPAc9UqpAiMgvM&amp;sensor=false"></script>
	<script type="text/javascript" src="js/map-2.js"></script>
	<!-- map with geo locations -->
	
	<script type="text/javascript" src="js/jquery.mapit.js"></script>
	<script src="js/initializers.js"></script>
	
	<!--================================OWL CARESOUL=============================================-->
		
	<script src="js/owl.carousel.js"></script>
    <script src="js/triger.js" type="text/javascript"></script>
		
	<!--================================FunFacts Counter===========================================-->
		
	<script src="js/jquery.countTo.js"></script>
	
	<!--================================jquery cycle2=============================================-->
	
	<script src="js/jquery.cycle2.min.js" type="text/javascript"></script>	
	
	<!--================================waypoint===========================================-->
		
	<script type="text/javascript" src="js/jquery.waypoints.min.js"></script><!-- Countdown JS FILE -->
	
	<!--================================RATINGS===========================================-->	
	
	<script src="js/jquery.raty-fa.js"></script>
	<script src="js/rate.js"></script>
	
	<!--================================ video===========================================-->
	<script src="assets/html5lightbox/html5lightbox.js"></script>
	
	<!--================================custom script===========================================-->
		
	<script type="text/javascript" src="js/custom.js"></script>
    
</body>
</html>
