<?php 
include 'admin/conn.php'; 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<title>Chesz AMI</title>
	
		<link href="css/all-stylesheets.css" rel="stylesheet">

	</head>
	<body>
	
		<div id="left"></div>
		<div id="right"></div>
		<div id="top"></div>
		<div id="bottom"></div>

		<div id="preloader">
			<div id="status">
				<div class="logo"><img src="images/logos/logo-nav.png" alt=""></div>
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
		<div class="inner-banner title-area text-center image-6">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Cuisine Indienne</h1>		
			</div>
		</div>
		<div class="white-bg">
			<div class="menu-grid">
				<div class="container">					
					<div class="row">					
						<?php $sql1="select * from `menu_upload` where `category_name`='".$_REQUEST['menu_name']."' limit 1";
							  $q1=$conn->query($sql1);
							 while ($row1 = mysqli_fetch_array($q1,MYSQLI_ASSOC))
							  { 
						  ?>
						<div class="herotext animated" data-animation="fadeInUp" data-animation-delay="400">
							<p class="box-heading">
								<span><?php echo $row1['category_name']; ?></span>
							</p>
						</div>
						<?php
							  }
							 ?>											
					</div>						
		</div>
<ul class="list-group list-group-flush">  
	<?php  $sql1="select * from `menu_upload` where `category_name`='".$_REQUEST['menu_name']."' ";
		$q1=$conn->query($sql1);
		 while ($row1 = mysqli_fetch_array($q1,MYSQLI_ASSOC))
			{ ?>
		<li class="list-group-item"> 
   <div class="row">
       <h4><a class="col-sm-8" href="gallery7.php?menu_name=<?php echo $_REQUEST['menu_name'];?>"><?php echo $row1['food_item_name']; ?></a>
      <p class="col-sm-2" align="right"><?php  echo $row1['price']; ?></p></h4>
    </div>
   </li>
 <?php } ?>
	</ul>
			</div>
			</div>
			</div>			
		<footer>
			<?php
			 include 'footer.php'
			 ?>
		</footer>
		<script src="js/jquery-1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>				
		<script src="js/bootstrap-dropdownhover.js"></script>		
		<script src="js/ui/jquery-ui.js"></script>

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
		<script src="js/custom/custom.js"></script>
	</body>
</html>