<?php include 'admin/conn.php';  ?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from creative-wp.com/demos/delicieux/reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Mar 2018 06:18:24 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title></title>
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
					 <?php include 'header.php';  ?>	
					</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<!-- /. NAVIGATION ENDS
			========================================================================= -->
		<!-- INNER BANNER STARTS
			========================================================================= -->
		<div class="inner-banner title-area text-center image-5">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Réservation</h1>
				<!--<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">All about delicieux</h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
                <div class="bread-crumb"><a href="#">Home</a> <span>Reservation</span></div>-->
			</div>
		</div>
		<!-- /. INNER BANNER STARTS
			========================================================================= -->
		<div class="white-bg">
			<!-- RESERVATION CONTACT INFO STARTS
				========================================================================= -->
			<!--<div class="container-fluid">
				<div class="row no-gutter-12">
					<div class="col-lg-12 res-contact-info animated" data-animation="fadeInUp" data-animation-delay="400">
						<div class="block">
							<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
							<div class="caption">
								Our Address<br>
								<div class="line"></div>
								<span> 79 Rue de la Colonie,<br class="visible-xs">75013 Paris</span>
							</div>
						</div>
						<div class="block">
							<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
							<div class="caption">
								Our RESERVATION NUMBER<br>
								<div class="line"></div>
								<span>  01 75 51 57 54</span>
							</div>
						</div>
					</div>
				</div>
			</div>-->
			<!-- /. RESERVATION CONTACT INFO ENDS
				========================================================================= -->
				
			<!-- RESERVATION STARTS
				========================================================================= -->
			<div class="container-fluid reservation" id="reservation">
				<div class="row">
					<!--<div class="leaf"><img src="images/reservation/leaf.png" alt=""></div>-->
					<section class="backgroundimg">
						<div class="col-lg-6 col-sm-7 col-lg-offset-6 col-sm-offset-5">
							<div class="formcontents">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2">
										<div class="row form animated" data-animation="fadeInUp" data-animation-delay="400">
											<form action='http://creative-wp.com/demos/delicieux/reservation.php' method='post' name='ReservationForm' id='ReservationForm'>
												<div class="col-lg-12">
													<center><div class="herotext">
														<p class="cross-line">
															<span>Réservation de table</span>
														</p>
													</div></center>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="form-group">
														<input type="text" class="form-control" name="fullname" placeholder="Nom *">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="form-group">
														<input type="email" class="form-control" name="uremail" placeholder="Votre adresse email *">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="form-group">
														<input type="text" id="datepicker" class="form-control" name="date1"  placeholder="Choisir une date *">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" name="time" placeholder="Un horaire *">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" name="numberofpersons" placeholder="Un nombre de personnes *">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="form-group">
														<input type="text" class="form-control" name="phonenumber" placeholder="Téléphone *">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="form-group">
														<input type="text" class="form-control" name="branchname" placeholder="Branch Name *">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="form-group">
														<textarea rows="5" class="form-control" name="urmessage" placeholder="Demandes Particuliéres *"></textarea>
													</div>
												</div>
												<div class="col-lg-12">
													<div id='r_message_post'></div>
												</div>
												<div class="col-lg-12">
													<input class="btn btn-default" type='submit' value='Réserver' name='r_submitf' id="r_submitf">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-5 img-side img-left">
							<div class="img-holder video">
								
								<img src="images/reservation/2.jpg" alt="" >
							</div>
						</div>
					</section>
				</div>
			</div>
			<!-- ./ RESERVATION ENDS
				========================================================================= -->
			
			<!-- OPENING HOURS STARTS
				========================================================================= -->	
			<!--<div class="parallax-3 opening-hours reservation padding-t-100">
				<div class="container">
					<!--<div class="row">
						<div class="col-lg-12">
							<div class="herotext">
								<p class="cross-line animated" data-animation="fadeInUp" data-animation-delay="400">
									<span>Horaires</span>
								</p>
								<div class="line-2 animated" data-animation="fadeInUp" data-animation-delay="600">Call  01 75 51 57 54</div>
							</div>
						</div>
					</div>-->
					<!--<div class="row no-gutter-3 row3 animated" data-animation="fadeInUp" data-animation-delay="800">
						<div class="row-height">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside"><img src="img/i017.jpg" class="img-responsive center-block" alt=""></div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside">
									<div class="white-block">
										<div class="icon"><i class="icon-drink"></i></div>
										<div class="caption">Déjeuner </div>
										<!--<div class="day">Morning</div> -->
										<!--<div class="timing">11.45 - 2.30pm</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside"><img src="images/reservation/new/2.jpg" class="img-responsive center-block" alt=""></div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside">
									<div class="white-block">
										<div class="icon"><i class="icon-food"></i></div>
										<div class="caption">Dessert </div>
										<!-- <div class="day">Morning</div> -->
										<!--<div class="timing">11.45 - 2.30pm</div>
									</div>
								</div>
							</div>
						</div>
					</div>-->
					<!--<div class="row no-gutter-3 row2 animated" data-animation="fadeInDown" data-animation-delay="800">
						<div class="row-height">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside">
									<div class="dark-block">
										<div class="icon"><i class="icon-breakfast"></i></div>
										<div class="caption">Boisson</div>
										<!-- <div class="day">Evening</div> -->
										<!--<div class="timing">6.30pm - 22.30pm</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside"><img src="img/i004.jpg" class="img-responsive center-block" alt=""></div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside">
									<div class="dark-block">
										<div class="icon"><i class="icon-dinner"></i></div>
										<div class="caption">Dîner </div>
									<!--	<div class="day">Evening</div> -->
										<!--<div class="timing">6.30pm - 22.30pm</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside"><img src="images/reservation/new/4.jpg" class="img-responsive center-block" alt=""></div>
							</div>
						</div>
					</div>-->
					<!--<div class="row reservation-number">
						<div class="col-lg-12 animated" data-animation="flipInX" data-animation-delay="600">
							<div class="icon"><i class="icon-divider"></i></div>
							<div class="caption">
								RESERVATION NUMBER<br>
								<span>02 0100 843 112</span>
							</div>
						</div>
					</div>-->
				</div>
			</div>
			<!-- /. OPENING HOURS ENDS
				========================================================================= -->			
			
			<div class="delivery light-grey-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="herotext">
								<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Delivery At Home, Offices, Livraison à domicile</h1>
								<!--<div class="button animated" data-animation="fadeInUp" data-animation-delay="500"><a href="#" class="fill-orange">Third Party Booking</a></div>-->
							<hr>
							<div class="row">
					
						<div class="col-lg-4 col-md-4 animated" data-animation="fadeInUp" data-animation-delay="600">
							<div class="picture">
								<img src="img/12.png" class="img-responsive" alt=""/>                       
								<!-- Picture Overlay Starts -->
								<div class="portfolio-overlay-2">
									<div class="icons">
									
									</div>
								</div>
								<!-- Picture Overlay Ends -->
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4 animated" data-animation="fadeInUp" data-animation-delay="600">
							<div class="picture">
								<img src="img/13.png" class="img-responsive" alt=""/>                       
								<!-- Picture Overlay Starts -->
								<div class="portfolio-overlay-2">
									<div class="icons">
										
									</div>
								</div>
								<!-- Picture Overlay Ends -->
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4 animated" data-animation="fadeInUp" data-animation-delay="600">
							<div class="picture">
								<img src="img/14.png" class="img-responsive" alt=""/>                       
								<!-- Picture Overlay Starts -->
								<div class="portfolio-overlay-2">
									<div class="icons">
										
									</div>
								</div>
								<!-- Picture Overlay Ends -->
							</div>
						</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--	=========================================================================  
			<div class="container-fluid newsletter">
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
		<!-- AJAX Reservation Form --> 			
		<script type="text/javascript" src="js/contact/reservation.js"></script>
		<!-- Custom JS -->
		<script src="js/custom/custom.js"></script>
	</body>


</html>