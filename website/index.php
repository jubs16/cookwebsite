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
		<div id="rev_slider_467_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic-carousel26" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
			<div id="rev_slider_467_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
				<ul>					
					<?php 
					$sql1="select * from `slider`  ";
					$q1=$conn->query($sql1);
					 while ($row1 = mysqli_fetch_array($q1,MYSQLI_ASSOC))
					 { 
					?>		
					<li data-index="rs-1596" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/slider/thumbs/1.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Grill" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
					
					<img src="admin/<?php echo $row1['pic']; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
					
						<div class="tp-caption NotGeneric-Title   tp-resizeme" 
							id="slide-1596-layer-1" 
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
							data-fontsize="['50','50','50','45']"
							data-lineheight="['55','55','55','50']"
							data-width="none"
							data-height="none"
							data-whitespace="nowrap"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[10,10,10,10]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[10,10,10,10]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 5; white-space: nowrap;text-transform:left;">
							<?php echo $row1['name'] ;?></div>
				
						<div class="tp-caption NotGeneric-SubTitle   tp-resizeme" 
							id="slide-1596-layer-4" 
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" 
							data-width="none"
							data-height="none"
							data-whitespace="nowrap"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 6; white-space: nowrap;text-transform:left;"></div>
					
						<div class="tp-caption NotGeneric-Icon   tp-resizeme" 
							id="slide-1596-layer-8" 
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" 
							data-width="none"
							data-height="none"
							data-whitespace="nowrap"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 7; white-space: nowrap;text-transform:left;cursor:default;"></div>
					</li>
					
					<?php } ?>
					
					

				</ul>
				<div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
			</div>
		</div>

		<div class="white-bg">				
			<div class="container about-us" id="about" >
				<div class="row">
				<div class="col-lg-6 col-md-6">
				
				<?php
				$sql = "SELECT * FROM `about_us`";
				$result = $conn->query($sql);
			   	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
				?>					
						<div class="herotext animated" data-animation="fadeInUp" data-animation-delay="400">
							<p class="box-heading">
								<span><?php 
								echo $row['name']; 
								?></span>
							</p>
						</div>
						<div class="description animated" data-animation="fadeInDown" data-animation-delay="800"><?php echo $row['details']; 
						?></div>
						<div class="button animated" data-animation="flipInX" data-animation-delay="1000"><a href="about.php" class="fill-orange">En savoir plus</a></div>
					<?php }
					?>			
					</div>
					<div class="col-lg-6 col-md-6 animated" data-animation="fadeIn" data-animation-delay="600"><img src="images/about-us/about-us.jpg" class="img-responsive center-block" alt=""></div>			
				</div>
			</div>
			<div class="light-texture-01 menu" id="menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="herotext">
								<p class="box-heading animated" data-animation="fadeInUp" data-animation-delay="400">
									<span>Nos Menus</span>
								</p>
								<div class="description animated" data-animation="fadeInUp" data-animation-delay="800"></div>
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
							<h3><center><?php 
							echo $row2['name'];
							?></center></h3>
								<p class="line"></p>
								 <p class="price-item"><center><span>
								 <?php 
								 echo $row2['price'];
								 ?>
								 <sup></sup></span></center></p>
								 <center><span class="icon">
								  <a href="menu-details.php?id=<?php echo $row2['id'];?>" 
								  style="color:white">EN SAVOIR PLUS</a></span></center>
								</div>								
						</div>														
					<?php  $i++; } 
					?>						
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
								<div class="line-2 animated" data-animation="fadeInUp" data-animation-delay="400">What Clients Said About Us</div>
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
									<div class="description"><?php 
									echo $row['details']; 
									?></div>
									<div class="star">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<div class="name">
									<?php 
									echo $row['name']; 
									?>										
									</div>
								</div>							
                                <?php
                                 }	
                                ?>		
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include 'footer.php'; ?>
			</body>
			
		<script src="js/jquery-1.11.3/jquery.min.js"></script>
		
		<script src="js/bootstrap.min.js"></script>				
		<script src="js/bootstrap-dropdownhover.js"></script>		
		<script src="js/ui/jquery-ui.js"></script>
		
		<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>

		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
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
		<!-- FitVids > 
		<script type="text/javascript" src="js/fitvids/jquery.fitvids.js"></script>
		< Magnific Popup core JS file -->
		<script type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.js"></script>		
		<!-- AJAX Contact Form > 			
		<script type="text/javascript" src="js/contact/contact-form.js"></script>
		< AJAX Reservation Form > 			
		<script type="text/javascript" src="js/contact/reservation.js"></script>
		< Custom JS -->
		<script src="js/custom/custom.js"></script>
	</head>
</html>

		<script type="text/javascript">
			var tpj=jQuery;
			
			var revapi1078;
			tpj(document).ready(function() {
			if(tpj("#rev_slider_467_1").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_467_1");
			}else{
			revapi1078 = tpj("#rev_slider_467_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"revolution/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
					mouseScrollReverse:"default",
				onHoverStop:"off",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style:"zeus",
					enable:true,
					hide_onmobile:true,
					hide_under:600,
					hide_onleave:true,
					hide_delay:200,
					hide_delay_mobile:1200,
					tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
					left: {
						h_align:"left",
						v_align:"center",
						h_offset:30,
						v_offset:0
					},
					right: {
						h_align:"right",
						v_align:"center",
						h_offset:30,
						v_offset:0
					}
				}
				,
				bullets: {
					enable:true,
					hide_onmobile:true,
					hide_under:600,
					style:"metis",
					hide_onleave:true,
					hide_delay:200,
					hide_delay_mobile:1200,
					direction:"horizontal",
					h_align:"center",
					v_align:"bottom",
					h_offset:0,
					v_offset:30,
					space:5,
					tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
				}
			},
			viewPort: {
				enable:true,
				outof:"pause",
				visible_area:"80%",
				presize:false
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[600,600,500,400],
			lazyType:"none",
			parallax: {
				type:"mouse",
				origo:"slidercenter",
				speed:2000,
				levels:[2,3,4,5,6,7,12,16,10,50,47,48,49,50,51,55],
				type:"mouse",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
			});
			}
			});	
		</script>