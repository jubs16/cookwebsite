<?php include 'admin/conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from creative-wp.com/demos/delicieux/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Mar 2018 06:25:34 GMT -->
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
		<div class="inner-banner title-area text-center image-7">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Nous contacter</h1>
				<!--<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">All about delicieux</h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
                <div class="bread-crumb"><a href="#">Home</a> <span>Contact</span></div>-->
			</div>
		</div>
		<!-- /. INNER BANNER STARTS
			========================================================================= -->
		<div class="white-bg">
			<!-- GET IN TOUCH STARTS
				========================================================================= -->	
			<div class="container contact-us">
				<div class="row">
				
				
						<?php
	$sql = "SELECT * FROM `contact_us`";
	$result = $conn->query($sql);
   	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
?>	
				
					<div class="col-lg-2 col-md-2 col-sm-2">
						<div class="block">
							<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
							<div class="caption">ACCESS</div>
							<div class="line"></div>
							<div class="description"><?php echo $row['address']; ?></div>
						</div>
					
					
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						<div class="block">
							<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
							<div class="caption">Téléphone</div>
							<div class="line"></div>
							<div class="description"><?php echo $row['phone']; ?><br><br><!--Mobile: 0100 8422222<br>Hot Line: 102154--></div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						<div class="block">
							<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
							<div class="caption">Email Address</div>
							<div class="line"></div>
							<div class="description"><a href="mailto:cheez@ami.com"><?php echo $row['email']; ?><br><br></a></div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row no-gutter-8">
							<div class="col-lg-6							maps animated" data-animation="fadeInUp" data-animation-delay="400">						
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.7978224212325!2d2.3505254153713375!3d48.82391887928414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6719ad2109f2b%3A0x3c3eefb69882a45b!2s79+Rue+de+la+Colonie%2C+75013+Paris%2C+France!5e0!3m2!1sen!2sin!4v1520435009922" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
											<?php }
?>
					
				</div>
				
			</div>
			<!-- Google Map Starts -->
			
			<!-- Google Map Ends -->
			<!--<div class="get-in-touch">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="herotext">
								<p class="box-heading animated" data-animation="fadeInUp" data-animation-delay="400">
									<span>Get in Touch</span>
								</p>
								<div class="description animated" data-animation="fadeInUp" data-animation-delay="600">One morning, when Gregor Samsa woke from troubled dreams, he found himself<br>transformed in his bed into a horrible vermin. </div>
							</div>
						</div>
					</div>
						<form action='http://creative-wp.com/demos/delicieux/process.php' method='post' name='ContactForm' id='ContactForm' >
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3 center">
									<div class="form-group">
										<input type="text" class="form-control" name="name" placeholder="Full Name *">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" name="email" placeholder="Email *">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="website" placeholder="Website">
									</div>
									<div class="form-group">
										<textarea rows="5" class="form-control" name="comment" placeholder="Your Message *"></textarea>
									</div>
									<div id='message_post'></div>
										<input class="btn btn-default" type='submit' value='SUBMIT' name='submitf' id="submitf">
									</div>
								</div>
								
						</form>
				</div>
			</div>-->
			<!-- /. GET IN TOUCH ENDS
				========================================================================= -->			
			<!-- NEWSLETTER STARTS
				========================================================================= -->  
			<!--<div class="container-fluid newsletter">
				<div class="row row1">
					<div class="col-lg-4 col-lg-offset-4">
						<div class="herotext animated" data-animation="fadeInUp" data-animation-delay="400">
							<h1>STAY UP TO DATE</h1>
							<div class="description">Sign up to  newsletter for the latest on all things Suitsupply</div>
						</div>
						<form class="form-inline animated" data-animation="fadeInUp" data-animation-delay="600">
							<div class="form-group">							
								<input type="email" class="form-control" id="newsletter" placeholder="Enter you e-mail Address">
							</div>
							<button type="submit" class="btn btn-default"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
						</form>
					</div>
				</div>
			</div>-->
			<!-- /. NEWSLETTER STARTS
				========================================================================= -->  
		</div>
		<!-- FOOTER STARTS
			========================================================================= -->  
		<footer>
			<?php include 'footer.php' ?>
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
		<!-- Custom JS -->
		<script src="js/custom/custom.js"></script>
	</body>


</html>