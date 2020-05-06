<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
    
	<title>Servicio Local de Trabajo || Página de Inicio</title>
	
    <!--================================BOOTSTRAP STYLE SHEETS================================-->
        
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
		
		<!--================================Revolution SLIDER SECTION==========================================-->
		
		<section id="slider-revolution">
			<div class="fullwidthbanner-container">
				<div class="revolution-slider tx-center">
					<ul><!-- SLIDE  -->
								
						<!-- Slide1 -->
						<li data-transition="slideright" data-slotamount="5" data-masterspeed="1000">
						<!-- MAIN IMAGE -->
							<img src="images/banner2.jpg" alt="item slide">
						<!-- LAYERS -->	
						
						
							
					
							
						</li>
						
						
						
					</ul>
				</div>
			</div>
		</section>
		
		<section id="search-form">
			<div class="container">
				<div class="search-form-wrap">
					<form class="clearfix" name="search" action="serviceman-search.php" method="post">
						
						<div class="select-field-wrap pull-left">
		
							<input class="input-field" type="text" placeholder="Ubicación" name="location" style="height:55px;" required="required">	
							</select>
						</div>
						<div class="select-field-wrap pull-left">
							<select class="search-form-select" name="categories" >
								<option class="options" value="all-categories">Todas las Categorías</option>
								<?php 

$sql2 = "SELECT * from   tblcategory ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);

foreach($result2 as $row)
{          
    ?>  
<option value="<?php echo htmlentities($row->Category);?>"><?php echo htmlentities($row->Category);?></option>
 <?php } ?> 
							</select>
						</div>
						<div class="submit-field-wrap pull-right">
							<input class="search-form-submit bgyallow-1 white" name="search" type="submit"/>
						</div>
					</form>
				</div>
			</div>
		</section>
		
		<section class="categories-section padding-top-20 padding-bottom-40">
			<div class="container"><!-- section container -->
				<div class="section-title-wrap margin-bottom-50"><!-- section title -->
					<h4>Categorías</h4>
					<div class="title-divider">
						<div class="line"></div>
						<i class="fa fa-star-o"></i>
						<div class="line"></div>
					</div>
				</div><!-- section title end -->
				<div class="row category-section-wrap cat-style-2">
					<div class="col-md-12 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">
							
							<h5><i class="fa fa-heart bgblue-1 white"></i>Categorías de Trabajo Local </h5>
							<div class="cat-list-wrap">
								<ul class="cat-list">
									<?php
$sql="SELECT Category, count(ID) as total from tblperson group by Category";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
									<li><a href="view-category-detail.php?viewid=<?php echo htmlentities ($row->Category);?>"><?php  echo htmlentities($row->Category);?> <span>(<?php  echo htmlentities($row->total);?>)</span></a></li>
									<?php $cnt=$cnt+1;}} ?>
									
								</ul>
							</div>
						</div>
						
						<div class="listing-border-bottom bgblue-1"></div>
					</div><!-- category column end -->
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
	
	<!--================================ testimonial ===========================================-->
	<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			
			<div class="rg-image-wrapper">
				<div class="rg-image"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
						<h5></h5>
						<div class="caption-metas">
							<p class="position"></p>
							<p class="orgnization"></p>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</script>	
	<script type="text/javascript" src="assets/testimonial/js/jquery.tmpl.min.js"></script>
	<script type="text/javascript" src="assets/testimonial/js/jquery.elastislide.js"></script>
	<script type="text/javascript" src="assets/testimonial/js/gallery.js"></script>
	
	<!--================================custom script===========================================-->
		
	<script type="text/javascript" src="js/custom.js"></script>
    
</body>
</html>