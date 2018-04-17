 <?php include 'admin/conn.php' ?>
 
 <!DOCTYPE html>
<html lang="en">
	

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Chez AMI</title>
		<!-- All Stylesheets -->
		<link href="css/all-stylesheets.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- PAGE BORDER STARTS
			========================================================================= -->
		<div id="left"></div>
		<div id="right"></div>
		<div id="top"></div>
		<div id="bottom"></div>
		<!-- /. PAGE BORDER ENDS
			========================================================================= -->
		<!-- PRELOADER STARTS
			========================================================================= --> 
		<div id="preloader">
			<div id="status">
				<div class="logo"><img src="images/logos/logo-nav-dark.png" alt=""></div>
				<div class="sk-cube-grid">
					<div class="sk-cube sk-cube1"></div>
					<div class="sk-cube sk-cube2"></div>
					<div class="sk-cube sk-cube3"></div>
					<div class="sk-cube sk-cube4"></div>
					<div class="sk-cube sk-cube5"></div>
					<div class="sk-cube sk-cube6"></div>
					<div class="sk-cube sk-cube7"></div>
					<div class="sk-cube sk-cube8"></div>
					<div class="sk-cube sk-cube9"></div>
				</div>
			</div>
		</div>
		<!-- /. PRELOADER ENDS
			========================================================================= -->
		<!-- NAVIGATION STARTS
			========================================================================= -->
		<nav class="navbar yamm navbar-default fill-black normal">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand visible-sm visible-xs light-logo" href="index.php"><img src="images/logos/logo-nav.png" alt=""></a>
					<a class="navbar-brand visible-sm visible-xs dark-logo" href="index.php"><img src="images/logos/logo-nav-dark.png" alt=""></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar">
					 <?php include 'header.php';  ?>		</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<!-- /. NAVIGATION ENDS
			========================================================================= -->
		<!-- INNER BANNER STARTS
			========================================================================= -->
		<div class="inner-banner title-area text-center image-4">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Photos</h1>
				<!--<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">Discover our memories</h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
                <div class="bread-crumb"><a href="#">Home</a> <span>Galery</span></div>-->
			</div>
		</div>
		<!-- /. INNER BANNER STARTS
			========================================================================= -->
		<div class="white-bg">
			<!-- GALLERY STARTS
				========================================================================= -->	
			<div class="portfolio no-padding-top" id="gallery">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<!-- Portfolio Nav Starts -->
							<div id="options" class="animated dark-grey-bg" data-animation="fadeInUp" data-animation-delay="800">
								<ul id="filters" class="option-set clearfix" data-option-key="filter">
									<!--<li><a href="#filter" data-option-value="*" class="selected">tout </a></li>-->
													<?php $sql1="select distinct category_name from `photo_upload` where category_name='".$_REQUEST['menu_name']."'   ";
												$q1=$conn->query($sql1);
							  while ($row1 = mysqli_fetch_array($q1,MYSQLI_ASSOC))
							  { 
						  ?>
									<li><a href="#filter" data-option-value=".<?php echo $row1['category_name']; ?>" ><?php echo $row1['category_name']; ?></a></li>
									<?php
							  }
							 ?>
									
									
									<!--<li><a href="#filter" data-option-value=".Ambience">Ambiance </a></li>
									<li><a href="#filter" data-option-value=".Food">Carte</a></li>
									<li><a href="#filter" data-option-value=".Lunch">Le déjeuner </a></li>
									<li><a href="#filter" data-option-value=".Dinner">Dîner</a></li>
									<li><a href="#filter" data-option-value=".Drinks">Boisson </a></li>
									<li><a href="#filter" data-option-value=".Dessert">Dessert </a></li>
									<li><a href="#filter" data-option-value=".Dessert">Entrées </a></li>
									<li><a href="#filter" data-option-value=".Dessert">Pain Indien </a></li>
									<li><a href="#filter" data-option-value=".Dessert">Salades</a></li>
									<li><a href="#filter" data-option-value=".Dessert">Apéritifs </a></li>
									<li><a href="#filter" data-option-value=".Dessert">Kourma </a></li>
									<li><a href="#filter" data-option-value=".Dessert">Curry Indien </a></li>
									<li><a href="#filter" data-option-value=".Dessert">Vindaloo</a></li>
									<li><a href="#filter" data-option-value=".Dessert">Curry Madras</a></li>
									<li><a href="#filter" data-option-value=".Dessert">Végétarien </a></li>
									<li><a href="#filter" data-option-value=".Dessert">Biriyani </a></li>
									<li><a href="#filter" data-option-value=".Dessert">Desserts maison </a></li>
									<li><a href="#filter" data-option-value=".Dessert">Palak / tikka masala </a></li>-->
									
								</ul>
							</div>
							<!-- Portfolio Nav Ends -->
							<!-- Portfolio Thumbs Starts -->
							<div class="make4columns mansory-effect nospace animated" data-animation="fadeInUp" data-animation-delay="800">
								<!-- Project 1 Starts -->
								
										<?php  $sql1="select * from `photo_upload` where category_name='".$_REQUEST['menu_name']."'  ";
												$q1=$conn->query($sql1);
							  while ($row1 = mysqli_fetch_array($q1,MYSQLI_ASSOC))
							  { 
						  ?>
								
								<figure class="item <?php echo $row1['category_name'];?>  ">
									<div class="picture">
										<img src="admin/<?php echo $row1['pic']; ?>" alt=""/>                       
										<!-- Picture Overlay Starts -->
								  <div class="portfolio-overlay">
											<div class="icons">
												<div><span class="icon"><a class="image-popup-vertical-fit" href="admin/<?php echo $row1['pic']; ?>" title="">[ View Large ]</a></span></div>
											</div>
										</div>
										<!-- Picture Overlay Ends -->
									</div>
								</figure>
											<?php
							  }
							 ?>
								
																 				  
							</div>
							<!-- Portfolio Thumbs Ends -->	
						</div>
					</div>
					<!--<div class="row">
						<div class="col-lg-12">
							<div class="button"><a href="#" class="fill-orange">View All</a></div>
						</div>
					</div> -->
				</div>
			</div>
			<!-- /. GALLERY ENDS
				========================================================================= -->			
			<!-- NEWSLETTER STARTS
				========================================================================= -->  
			
			<!-- /. NEWSLETTER STARTS
				========================================================================= -->  
		</div>
		<!-- FOOTER STARTS
			========================================================================= -->  
		<footer>
			<div class="container-fluid">
				
			</div>
			<?php include'footer.php'; ?>
			
			
		</footer>
		<!-- /. FOOTER ENDS
			========================================================================= -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>				
		<script src="js/bootstrap-dropdownhover.js"></script>		
		<script src="js/ui/jquery-ui.js"></script>
		<!-- Animation --> 
		<script type="text/javascript" src="js/animation/jquery.appear.js"></script>		
		<!-- Parallax -->
		<script type="text/javascript" src="js/parallax/jquery.parallax-1.1.3.js"></script> 
		<script type="text/javascript" src="js/parallax/jquery.localscroll-1.2.7-min.js"></script> 
		<script type="text/javascript" src="js/parallax/jquery.scrollTo-1.4.2-min.js"></script>
		<!-- ScrollTo --> 
		<script src="js/nav/jquery.nav.js"></script> 		
		<!-- Isotope --> 
		<script type="text/javascript" src="js/isotope/jquery.isotope.min.js"></script> 
		<script type="text/javascript" src="js/isotope/custom-isotope-mansory.js"></script>
		<!-- Retina --> 
		<script type="text/javascript" src="js/retina/retina.js"></script> 
		<!-- Owl Carousel --> 
		<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
		<!-- FitVids --> 
		<script type="text/javascript" src="js/fitvids/jquery.fitvids.js"></script>
		<!-- Magnific Popup core JS file -->
		<script type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.js"></script>		
		<!-- AJAX Contact Form --> 			
		<script type="text/javascript" src="js/contact/contact-form.js"></script>
		<!-- AJAX Reservation Form --> 			
		<script type="text/javascript" src="js/contact/reservation.js"></script>
		<!-- Custom JS -->
		<script src="js/custom/custom.js"></script>
	</body>


</html>