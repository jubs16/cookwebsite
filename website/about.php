 <?php 
 include 'admin/conn.php';
 ?>
 
 <!DOCTYPE html>
<html lang="en">
	

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<title>Chez AMI</title>
		<link href="css/all-stylesheets.css" rel="stylesheet">

	<body>

		<div id="left"></div>
		<div id="right"></div>
		<div id="top"></div>
		<div id="bottom"></div>
	
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

		<nav class="navbar yamm navbar-default fill-black normal">
			<div class="container-fluid">
			
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
			
				<div class="collapse navbar-collapse" id="navbar">
						 <?php include 'header.php';  ?>			
				</div>
			</div>	
		</nav>
		<div class="inner-banner title-area text-center image-6">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Nous connaître</h1>
			</div>
		</div>
		<div class="white-bg">
			<div class="blog">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="blog-post">

						<div class = "pull-right col-lg-6 col-md-6 animated" data-animation="fadeIn" data-animation-delay="600">
						<img src="images/about-us/rogan.jpg" class="img-responsive center-block" alt=""></div>

								<?php
									$sql = "SELECT * FROM `about_us1`";
									$result = $conn->query($sql);
								    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
									{
								?>																
								<div class="blog-detail animated" data-animation="fadeIn" data-animation-delay="400">
									<h1 class="post-title"><a href="#"><?php echo $row['name']; ?></a></h1>
									<div class="line"></div>
								</div>
								<div class="description animated" data-animation="fadeIn" data-animation-delay="200" style="text-align:justify">
								<p><?php echo $row['details']; ?></p>	
								<?php }
								?>
								</div>
							</div>
						</div>


					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
		</div>
		</div>
		<div class="parallax-2 testimonial">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="herotext">
								<p class="cross-line animated" data-animation="fadeInUp" data-animation-delay="400">
									<span>Témoignages</span>
								</p>
								<div class="line-2 animated" data-animation="fadeInUp" data-animation-delay="400">Ce que les clients disent de nous</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1">
							<div class="testimonial-carousel animated" data-animation="fadeInUp" data-animation-delay="800">
							<?php
							$sql = "SELECT * FROM `customer`";
							$result = $conn->query($sql);
						   	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
							{
							?>													
								<div>
									<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
									<div class="description"><?php echo $row['details']; ?></div>
									<div class="star">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<div class="name"><?php echo $row['name']; ?></div>
								</div>					
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div> 
			<?php include 'footer.php' ;?>		
		</body>
		<script src="js/jquery-1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>				
		<script src="js/bootstrap-dropdownhover.js"></script>		
		<script src="js/ui/jquery-ui.js"></script>
		<!-- Animation --> 
		<script type="text/javascript" src="js/animation/jquery.appear.js"></script>		
		<!-- Parallax >
		<script type="text/javascript" src="js/parallax/jquery.parallax-1.1.3.js"></script> 
		<script type="text/javascript" src="js/parallax/jquery.localscroll-1.2.7-min.js"></script> 
		<script type="text/javascript" src="js/parallax/jquery.scrollTo-1.4.2-min.js"></script>
		< ScrollTo --> 
		<script src="js/nav/jquery.nav.js"></script> 		
		<!-- Isotope --> 
		<script type="text/javascript" src="js/isotope/jquery.isotope.min.js"></script> 
		<script type="text/javascript" src="js/isotope/custom-isotope-mansory.js"></script>
		<!-- Retina --> 
		<script type="text/javascript" src="js/retina/retina.js"></script> 
		<!-- Owl Carousel --> 
		<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
		<!-- FitVids > 
		<script type="text/javascript" src="js/fitvids/jquery.fitvids.js"></script>
		< Magnific Popup core JS file >
		<script type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.js"></script>		
		< AJAX Contact Form > 			
		<script type="text/javascript" src="js/contact/contact-form.js"></script>
		< Custom JS -->
		<script src="js/custom/custom.js"></script>
	</head>
</html>