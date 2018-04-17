<?php 
include 'admin/conn.php'; 
?>

<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Chez AMI</title>
		<link href="css/all-stylesheets.css" rel="stylesheet">
	</head>
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
                <?php
                 include 'header.php';  
                 ?>				
				</div>
			</div>
		
		</nav>
		<div class="inner-banner title-area text-center image-5">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Menu</h1>
			</div>
		</div>

		<div class="white-bg">
		 
			<div class="container menu-details">
				<div class="row">
				
				<?php 
				 $sql2 = "SELECT * FROM `product` where id='".$_REQUEST['id']."'";
				$result2 = $conn->query($sql2);                
				while ($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC))
				{	
					?>

					<div class="col-lg-6 col-md-6 pics-gallery" data-animation="fadeInUp" data-animation-delay="200">
						<div id="slider" class="flexslider">
							<ul class="slides">
								<li>
									<img src="admin/<?php echo $row2['pic'];?>" alt="" >
									<a class="image-popup-vertical-fit" href="admin/<?php echo $row2['pic'];?>" title="" >
										<div class="picture-overlay">
											<div class="icons">
												<div><span class="icon"><i class="fa fa-search"></i></span></div>
											</div>
										</div>
									</a>
								</li>		
							</ul>
						</div>						
					</div>				
					<div class="col-lg-6 col-md-6 animated" data-animation="fadeInUp" data-animation-delay="400">
						<div class="herotext clearfix">
							<div class="pull-left">
								<h1><?php echo $row2['name'];?></h1>
								<div class="line"></div>
								<div class="star">
									
								</div>
							</div>
							<div class="price pull-right"><?php echo $row2['price'];?></div>
						</div>
						<div class="description">
						<?php echo $row2['details'];?>
                        </div>
						<?php } ?>
							</div>
						<div class="clearfix"></div>
						<hr>
						<div class="row add-to-cart">
							<div class="col-lg-12">								
								<center><div class="button"><a href="../reservation.php" class="fill-orange">Contact Now</a></div></center>
							</div>					
						</div>
					</div>
				</div>
				
			</div> 
		</div>		
			<?php 
			include 'footer.php';
			?>

		<script src="js/jquery-1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>				
		<script src="js/bootstrap-dropdownhover.js"></script>		
		<script src="js/ui/jquery-ui.js"></script>

		<script type="text/javascript" src="js/animation/jquery.appear.js"></script>			
		<script type="text/javascript" src="js/parallax/jquery.parallax-1.1.3.js"></script> 
		<script type="text/javascript" src="js/parallax/jquery.localscroll-1.2.7-min.js"></script> 
		<script type="text/javascript" src="js/parallax/jquery.scrollTo-1.4.2-min.js"></script>
		<script src="js/nav/jquery.nav.js"></script> 			
		<script type="text/javascript" src="js/isotope/jquery.isotope.min.js"></script> 
		<script type="text/javascript" src="js/isotope/custom-isotope-mansory.js"></script>
		<script type="text/javascript" src="js/retina/retina.js"></script> 
		<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="js/fitvids/jquery.fitvids.js"></script>
		<script type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.js"></script>				
		<script type="text/javascript" src="js/contact/contact-form.js"></script>		
		<script type="text/javascript" src="js/contact/reservation.js"></script>
		<script defer src="js/flexslider/jquery.flexslider.js"></script>
		<script src="js/custom/custom.js"></script>
		<script>
			$(window).load(function() {
				// The slider being synced must be initialized first
				$('#carousel').flexslider({
					animation: "slide",
					controlNav: false,
					animationLoop: false,
					slideshow: false,
					itemWidth: 100,
					itemMargin: 5,
					asNavFor: '#slider'
				});

				$('#slider').flexslider({
					animation: "slide",
					controlNav: false,
					animationLoop: false,
					slideshow: false,
					pausePlay: false,
					mousewheel: true,
					sync: "#carousel"
				});
			});
		</script>		
	</body>
</html>