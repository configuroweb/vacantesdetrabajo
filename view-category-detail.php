<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
   
	<title>ConfiguroWeb | Categoría</title>
	
    
	
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
	
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
		
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
		<!--================================HEADER==========================================-->
	<?php include_once('includes/header.php');?>
		
		<!--================================PAGE TITLE==========================================-->
		<div class="page-title-wrap bgorange-1 padding-top-30 padding-bottom-30"><!-- section title -->
<?php
if($_GET['viewid']!='')
{
$_SESSION['vid']=$_GET['viewid'];
}
$vid=$_SESSION['vid'];
?>

			<h4 class="white">Categoría - <?php echo $vid; ?></h4>
		</div><!-- section title end -->
		
		
		
		<section class="aside-layout-section padding-top-20 padding-bottom-40">
			<div class="container"><!-- section container -->
				<div class="row"><!-- row -->
					<div class="col-md-12 col-sm-8 col-xs-12 main-wrap"><!-- content area column -->
						<div class="listing-section padding-bottom-40">
							<div class=""><!-- section container -->
								<div class="add-listing-wrapper">
									<div class="listing-main gridview tab-content">
											<div id="latest-listing" class="tab-pane active">
												<div class="listing-wrapper three-column row">
<?php

//Getting default page number
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }

// Formula for pagination  
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;
// Getting total number of pages
$total_pages_sql = "SELECT COUNT(*) FROM tblperson where Category=:vid";
$ret= $dbh -> prepare($total_pages_sql);
$ret->bindParam(':vid',$vid,PDO::PARAM_STR);
$ret->execute();
$total_rows = $ret->fetchColumn();
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql="SELECT * from  tblperson where Category=:vid LIMIT $offset, $no_of_records_per_page";
$query = $dbh -> prepare($sql);
$query->bindParam(':vid',$vid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
													<div class="item col-md-4 col-sm-6 col-xs-12">
														<!-- .ITEM -->
														<div class="listing-item clearfix">
	
															<div class="figure">
																<img src="admin/images/<?php echo $row->Picture;?>" alt="listing item" height="200" width="200"/>
																
															</div>
															<div class="listing-content clearfix">
																
																<div class="listing-title">
																	<h6><a href="single-person-detail.php?viewid=<?php echo htmlentities ($row->ID);?>"><?php  echo $row->Name;?></a></h6>
																</div>
																
																<div class="listing-location pull-left"><!-- location-->
																	<i class="fa fa-mobile"></i> : 
																	<?php  echo $row->MobileNumber;?>
																</div><!-- location end-->
																
															</div>
														
														</div>
														<div class="listing-border-bottom bgyallow-1"></div>
													</div>
	<?php $cnt=$cnt+1;}} ?>
												</div>
											</div>
									</div>
								</div>
							</div><!-- section container end -->
						</div>
						<div style="margin-left:30%" >

    <ul class="body pagination pagination-primary">
<li class="page-item"><a class="page-link" href="?pageno=1">Previo</a></li>

      <li class="page-item active <?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>  

  <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Próximo</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link"> Último</a></li>
   
                            </ul>
</div>
						
					
					</div>
							
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
	<script type="text/javascript" src="js/map.js"></script>
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