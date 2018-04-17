<?php include 'admin/conn.php'; ?> 

<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		
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
                <?php include 'header.php';  ?>				
				</div>			
			</div>	
		</nav>

		<div class="inner-banner title-area text-center image-5">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Speed Menu</h1>
			</div>
		</div>
		<div class="light-texture-01 menu" id="menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="herotext">
								<p class="box-heading animated" data-animation="fadeInUp" data-animation-delay="400">
									<span>NOS MENUS</span>
								</p>
								<div class="description animated" data-animation="fadeInUp" data-animation-delay="800"> </div>
							</div>
						</div>
					</div>
					<div class="related-recipe light-grey-bg">
				<div class="container">					
					<div class="row">					
				<?php 
				 $sql2 = "SELECT * FROM `product` ";
				 $result2 = $conn->query($sql2);
				
			     $i=1;
				 while ($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC))
				 {
                  	if($i%2==0)
					{
                      echo '<div class="col-lg-3 col-md-4 panel panel-default" style="background:red; height:200px; color:white;">';
					}
					else
					{
                      echo '<div class="col-lg-3 col-md-4 panel panel-default" style="background:green; height:200px; color:white;">';
					}	
					?>	
										<div>
										<br>
											<h3><center><?php echo $row2['name'];?></center></h3>
											<p class="line"></p>
											 <p class="price-item"><center><span><?php echo $row2['price'];?><sup></sup></span></center></p>
                                           
											<center><span class="icon"> <a href="menu-details.php?id=<?php echo $row2['id'];?>" style="color:white">EN SAVOIR PLUS</a></span></center>
										</div>									
						</div>	
						<?php $i++; } ?>			
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
				</div>
				<div class="parallax-2 testimonial">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="herotext">
								<p class="cross-line animated" data-animation="fadeInUp" data-animation-delay="400">
									<span>Témoignages</span>
								</p>
								<div class="line-2 animated" data-animation="fadeInUp" data-animation-delay="400"> Ce que les clients disent de nous
                             </div>
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
								<?php }
								?>									
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