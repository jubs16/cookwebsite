	<ul class="nav navbar-nav" data-hover="dropdown" data-animations="fadeIn fadeIn fadeInUp fadeInLeft">
						<li class="pull-left"><a class="navbar-brand hidden-sm hidden-xs light-logo" href="#"><img src="images/logos/logo-nav.png" alt=""></a> <a class="navbar-brand hidden-sm hidden-xs dark-logo" href="#"><img src="images/logos/logo-nav-dark.png" alt=""></a></li>
						
			
						<li class="social-header pull-right hidden-xs hidden-sm hidden-md">
						<a href="https://www.facebook.com/chezamiresturent/" class="transparent-grey"><i class="fa fa-facebook"></i></a>  
						<a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.tripadvisor.com%2FRestaurant_Review-g187147-d13833777-Reviews-Chez_Ami-Paris_Ile_de_France.html&h=ATOhHUHyzknyKSiOzgwR3wwkw7JfgMXkPuWVVaK8zLGsINsJFZEOE1QX0laErb56E6r3-KfuPH1-7B6YqjYLXCbwe_4q74xvlQAXowqYjA" class="transparent-grey">
						<i class="fa fa-tripadvisor"></i></a>
						</li>
						
						<li><a href="index.php" class="dropdown-toggle nav-menu" >Accueil</a></li>
	
						
						<li>
							<a href="about.php"class="dropdown-toggle nav-menu" >Nous connaître</a>
		
						</li>
						<li><a href="reservation.php">Réservation</a>
		
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle nav-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nos menus</a>
							<ul class="dropdown-menu">
								
								<li class="dropdown-submenu"><a href="#">cuisine indienne</a>
								   <ul class="dropdown-menu">
												<?php $sql1="select * from `menu_category` ";
												$q1=$conn->query($sql1);
							  while ($row1 = mysqli_fetch_array($q1,MYSQLI_ASSOC))
							  { 
						  ?>
								  
										<li><a href="menu1.php?menu_name=<?php echo $row1['category_name'];    ?>"><?php echo $row1['category_name']; ?></a></li>
										
									
									<?php
							  }
							 ?>
									</ul>
								</li>
								
								<li><a href="speed_menu.php">Speed Menu</a></li>
									<li><a href="menu.pdf">Menu Card</a></li>
								
							</ul>
						</li>
						
							<li class="dropdown">
						<a href="gallery.php"class="dropdown-toggle nav-menu" >Gallery</a>
	
						</li>
						<li class="dropdown">
						<a href="contact-us.php" class="nav-menu">Nous contacter</a>
						</li>
					</ul>
			