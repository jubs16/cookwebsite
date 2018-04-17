<div class="our-team" id="team">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 animated" data-animation="fadeIn" data-animation-delay="800">
							<div class="block" style="text-align:left">		
						<?php
						$sql = "SELECT * FROM `know_us` limit 1";
						$result = $conn->query($sql);
					   	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
						{
						?>	
								<div class="name"><a href="#"><?php echo $row['name']; ?></a></div>
								<div class="horaires" style="text-align:justify"><br><?php echo $row['details']; ?></div>
						<?php }
						?>		
							</div>
						</div>
	
						<div class="col-lg-4 col-md-4 col-sm-6 animated" data-animation="fadeIn" data-animation-delay="1000">
							<div class="block" style="text-align:left">
								<div class="name" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Horaires</a></div><br>		
						<?php
						$sql = "SELECT * FROM `hours`";
						$result = $conn->query($sql);
					   	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
						{
						?>
						<div>	
						<ul class="list-group list-group-flush">
						  <li class="list-group-item"><b><?php echo $row['place']; ?></b>&nbsp;&nbsp;<?php echo $row['time']; ?></li>
						</ul>		
						</div>
						<?php }
                        ?>
						</div>
						</div>					
						<div class="col-lg-3 col-md-3 col-sm-6 animated "data-animation="fadeIn" data-animation-delay="1200">
							<div class="block" style="text-align:left">							
						<?php
						$sql = "SELECT * FROM `contact_us`";
						$result = $conn->query($sql);
					   	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
						{
						?>			
						<div class="name"><a href="#">Nous contacter</a></div>
							<ul class="list-group list-group-flush">
						   	 <li class="list-group-item borderless"><i class="fa fa-map-marker"></i><p class="arrange">
						   	 <?php echo $row['address']; ?></p>
						   	  <li class="list-group-item borderless"><i class="fa fa-phone"></i><p class="arrange">
						   	  <?php echo $row['phone']; ?></p>
						   	   <li class="list-group-item borderless"><i class="fa fa-envelope"></i><p class="arrange">
						   	   <?php echo $row['email']; ?></p>
						  </li>														
								<?php }
								?>	
								</ul>
							</div>
						</div>				
						<div class="col-lg-2 col-md-2 col-sm-6 animated" data-animation="fadeIn" data-animation-delay="1400">
							<div class="block">
								<iframe class="embed-responsive-item" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fchezamiresturent%2F&tabs=timeline&width=340&height=200&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=false&appId=346126415489455"></iframe>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div> 
		<footer>			
			<div class="dark-texture-02">
				<div class="container">
					<div class="row row2">
						<div class="col-lg-6 col-md-6">
							<ul class="links">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About us</a></li>
								<li><a href="use_of_terms.php">Use of Terms</a></li>
								<li><a href="privacy_policy.php">Privacy Policy</a></li>
								<li><a href="contact-us.php">Contact us</a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="copyright">© 2018 CHEZ AMI Powered By &nbsp;&nbsp;&nbsp; <a href="https://www.arptouch.com">ARP Touch</a></div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<style type="text/css">
			li.borderless { border: 0 none; }
			p.arrange { align-content: center; }
		</style>