<?php 
include 'admin/conn.php'; 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title></title>
		
		<link href="css/all-stylesheets.css" rel="stylesheet">
		<style type="text/css">
			#opt-col {
				 background-color: lightblue;
			}
			 #opt-col:hover {
			    color: lightgreen;
			}
		</style>

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
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Réservation</h1>
		
			</div>
		</div>
	
		<div class="white-bg">

			<div class="container-fluid reservation" id="reservation">
				<div class="row">
					<!--<div class="leaf"><img src="images/reservation/leaf.png" alt=""></div>-->
					<section class="backgroundimg">
						<div class="col-lg-6 col-sm-7 col-lg-offset-6 col-sm-offset-5">
							<div class="formcontents">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2">
										<div class="row form animated" data-animation="fadeInUp" data-animation-delay="400">

<?php


if ( isset ( $_POST [ 'buttonPressed' ] )){

$to = 'contact@chezami.fr' ;
$subject = 'Please reserve table for me' ;

$message = 'Mr/Mrs: ' . $_POST[ "name" ] . ' Request table reservation time-> ' . $_POST[ "time" ]. '. His contact number-> ' . $_POST[ "contact" ]  . ' Email-id: '. $_POST[ "from" ] . ' Mr/Mrs: ' . $_POST[ "name" ] . ' has placed order for ' . $_POST[ "people" ]  . ' number of people with the following message for you: ' . $_POST [ "message" ] ;
$headers = 'Table Reservation Nom: ' . $_POST[ "name" ] . ' Time: ' . $_POST[ "time" ] . ' Email-id: '. $_POST[ "from" ] . PHP_EOL ;
mail ( $to, $subject, $message, $headers ) ;


echo "Your reservation has been placed";
echo "<br>";
echo "votre réservation est réservée";
echo "<br>";
echo "Merci  " . $_POST[ "name" ];
echo "<br>";

?><button onclick="location.href=''">Back/ Retour</button> <?php
}


else{
?>

											<form method= "post" action= "<?php echo $_SERVER [ 'PHP_SELF' ] ;?>" />
												<div class="col-lg-12">
													<center><div class="herotext">
														<p class="cross-line">
															<span>Réservation de table</span>
														</p>
													</div></center>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="form-group">
														    <label for="yourname">Name</label>
    														<input type="text" name= "name" class="form-control" placeholder="Votre Nom">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="form-group">
														    <label for="Email">Email address</label>
    														<input type="email" name= "from" class="form-control" placeholder="Votre adresse Email">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="form-group">
														    <label for="contact">Contact</label>
   															<input type="tel" name= "contact" class="form-control"  placeholder="Numero téléphone">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="form-group">
														    <label for="message">Time/ Un Horaire</label>
															  <select class="form-control" name= "time" >
 																 <option id='opt-col'>12:00</option>
 																 <option id='opt-col'>12:30</option>
 																 <option id='opt-col'>13:00</option>
															     <option id='opt-col'>13:30</option>
 																 <option id='opt-col'>14:00</option>
 																 <option id='opt-col'>14:30</option>
 																 <option id='opt-col'>18:30</option>
 																 <option id='opt-col'>19:00</option>
 																 <option id='opt-col'>19:30</option>
 																 <option id='opt-col'>20:00</option>
																 <option id='opt-col'>20:30</option>
 																 <option id='opt-col'>21:00</option>
 																 <option id='opt-col'>21:30</option>
 																 <option id='opt-col'>22:00</option>
 																 <option id='opt-col'>22:30</option>
																</select>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="form-group">
														    <label for="people">No. of people</label>
    														<input type="number" min="1" max="10" name= "people" class="form-control"  placeholder="Un nombre de personnes">
													</div>
												</div>												
												<div class="col-lg-12">
													<div class="form-group">
														    <label for="message">Message</label>
   															 <textarea class="form-control" name= "message" rows="4" placeholder="Demandes Particuliéres"></textarea>
													</div>
												</div>
												<div class="col-lg-12">
													<input class="btn btn-default" type='submit' value='Réserver' name= "buttonPressed" class="btn btn-default">
												</div>
											</form>
											<?php } ?>
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

				</div>
			</div>
				
			
			<div class="delivery light-grey-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="herotext">
								<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Delivery At Home, Offices, Livraison à domicile</h1>
						
							<hr>
							<div class="row">
					
						<div class="col-lg-4 col-md-4 animated" data-animation="fadeInUp" data-animation-delay="600">
							<div class="picture">
								<img src="img/12.png" class="img-responsive" alt=""/>                       
							
								<div class="portfolio-overlay-2">
									<div class="icons">
									
									</div>
								</div>
							
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4 animated" data-animation="fadeInUp" data-animation-delay="600">
							<div class="picture">
								<img src="img/13.png" class="img-responsive" alt=""/>                       
								
								<div class="portfolio-overlay-2">
									<div class="icons">
										
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4 animated" data-animation="fadeInUp" data-animation-delay="600">
							<div class="picture">
								<img src="img/14.png" class="img-responsive" alt=""/>                       
						
								<div class="portfolio-overlay-2">
									<div class="icons">
										
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
 
		<footer>
			<?php include 'footer.php' ?>
		</footer>

		<script src="js/jquery-1.11.3/jquery.min.js"></script>
	
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