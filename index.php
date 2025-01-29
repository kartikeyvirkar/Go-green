﻿<!DOCTYPE html>
<html lang="en">
<head>
<title>Plant Nursery Managment</title>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Germinate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href="css/mislider.css" rel="stylesheet" type="text/css" />
<link href="css/mislider-custom.css" rel="stylesheet" type="text/css" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="w3_agileits_banner_main_grid">
				<div class="w3_agile_logo">
					<h1><a href="index.php"><span>G</span> o Green<i>Grow healthy products</i></a></h1>
				</div>
				<div class="agile_social_icons_banner">
					<ul class="agileits_social_list">

						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
						
					</ul>
				</div>
				<div class="agileits_w3layouts_menu">
					<div class="shy-menu">
						<a class="shy-menu-hamburger">
							<span class="layer top"></span>
							<span class="layer mid"></span>
							<span class="layer btm"></span>
						</a>
						<div class="shy-menu-panel">
							<nav class="menu menu--horatio link-effect-8" id="link-effect-8">
								<ul class="w3layouts_menu__list">
									<li class="active"><a href="index.php">Home</a></li>
									<li><a href="about.html">About Us</a></li> 
									<li><a href="services.html">Services</a></li>
									<li><a href="gallery.html">Gallery</a></li> 
									<li><a href="contact.html">Contact Us</a></li>
									<li><a href="login.php">Login</a></li>
                                    <li><a href="buy.php">Buy</a></li>
									<li style="list-style: none;"><a href="logout.php" style="color: inherit; text-decoration: none;" onmouseover="this.style.color='red'" onmouseout="this.style.color='inherit'">Log out</a></li>
								</ul>
							</nav>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3_banner_info">
				<div class="w3_banner_info_grid">
					<h3 class="test">#					<?php
						session_start();
						if(isset($_SESSION['user_id'])) {
							echo '<li style="font-weight: 400; color: #ffffff; font-size: 24px;">Welcome ' . htmlspecialchars($_SESSION['user_id']) . '!</li>';
						}
					?></h3>
					<p>Aenean congue vitae mauris sed tristique. Mauris quis nulla at sapien blandit 
						sollicitudin. Nunc tortor lorem, viverra sed diam ut, blandit efficitur leo.</p>
					<ul>
						<li><a href="contact.html" class="w3l_contact">Contact Us</a></li>
						<li><a href="#" class="w3ls_more" data-toggle="modal" data-target="#myModal">Read More</a></li>
					</ul>
				</div>
			</div>
			<div class="thim-click-to-bottom">
				<a href="#welcome_bottom" class="scroll">
					<i class="fa  fa-chevron-down"></i>
				</a>
			</div>
		</div>
	</div>
<!-- banner -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					#Go_Green
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/4.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="col-md-4 agileits_banner_bottom_left">
			<div class="agileinfo_banner_bottom_pos">
				<div class="w3_agileits_banner_bottom_pos_grid">
					<div class="col-xs-4 wthree_banner_bottom_grid_left">
						<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
							<i class="fa fa-pagelines" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_banner_bottom_grid_right">	
						<h4>Free Consultation</h4>
						<p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="col-md-4 agileits_banner_bottom_left1">
			<div class="agileinfo_banner_bottom_pos">
				<div class="w3_agileits_banner_bottom_pos_grid">
					<div class="col-xs-4 wthree_banner_bottom_grid_left">
						<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
							<i class="fa fa-certificate" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_banner_bottom_grid_right">	
						<h4>Certified Products</h4>
						<p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="col-md-4 agileits_banner_bottom_left2">
			<div class="agileinfo_banner_bottom_pos">
				<div class="w3_agileits_banner_bottom_pos_grid">
					<div class="col-xs-4 wthree_banner_bottom_grid_left">
						<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
							<i class="fa fa-yelp" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_banner_bottom_grid_right">	
						<h4>Free Helpline</h4>
						<p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //banner-bottom -->
<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head">Welcome to our <span>Plantation</span> 
			<?php 
				if(isset($_SESSION['user_id'])) {
					echo htmlspecialchars($_SESSION['user_id']);
				}
			?>!</h3>
			<div class="w3_agile_image">
				<img src="images/1.png" alt=" " class="img-responsive" />
			</div>
			<p class="agile_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
		</div>
		<div class="mis-stage w3_agileits_welcome_grids"> 
			<!-- The element to select and apply miSlider to - the class is optional -->
			<ol class="mis-slider">
				<li class="mis-slide"> 
					<figure> 
						<img src="images/2.png" alt=" " class="img-responsive" />
						<figcaption>Strawberry</figcaption>
					</figure>
				</li>
				<li class="mis-slide"> 
					<figure> 
						<img src="images/3.png" alt=" " class="img-responsive" />
						<figcaption>Orange</figcaption>
					</figure>
				</li>
				<li class="mis-slide"> 
					<figure> 
						<img src="images/4.png" alt=" " class="img-responsive" />
						<figcaption>Pomegranates</figcaption>
					</figure>
				</li>
				<li class="mis-slide"> 
					<figure> 
						<img src="images/5.png" alt=" " class="img-responsive" />
						<figcaption>Lemon</figcaption>
					</figure>
				</li>
				<li class="mis-slide"> 
					<figure> 
						<img src="images/6.png" alt=" " class="img-responsive" />
						<figcaption>Kiwi Fruits</figcaption>
					</figure>
				</li>
				<li class="mis-slide"> 
					<figure> 
						<img src="images/7.png" alt=" " class="img-responsive" />
						<figcaption>Apples</figcaption>
					</figure>
				</li>
			</ol>
		</div>
	</div>
<!-- //welcome -->
<!-- welcome-bottom -->
	<div id="welcome_bottom" class="welcome-bottom">
		<div class="col-md-6 wthree_welcome_bottom_left">
			<h3>we work hard and make our country <span>greenery</span></h3>
			<p>Nullam pretium euismod orci ac porta. Interdum et malesuada fames ac ante
				ipsum primis in faucibus. Donec at scelerisque dolor, vel placerat mi.</p>
			<div class="col-md-6 wthree_welcome_bottom_left_grid">
				<div class="w3l_social_icon_gridl">
					<img src="images/8.png" alt=" " class="img-responsive" />
				</div>
				<div class="w3l_social_icon_gridr">
					<h4 class="counter">23,536</h4>
				</div>
				<div class="clearfix"> </div>
				<div class="w3l_social_icon_grid_pos">
					<label>-</label>
				</div>
			</div>
			<div class="col-md-6 wthree_welcome_bottom_left_grid">
				<div class="w3l_social_icon_gridl">
					<img src="images/9.png" alt=" " class="img-responsive" />
				</div>
				<div class="w3l_social_icon_gridr">
					<h4 class="counter">53,234</h4>
				</div>
				<div class="clearfix"> </div>
				<div class="w3l_social_icon_grid_pos">
					<label>-</label>
				</div>
			</div>
			<div class="col-md-6 wthree_welcome_bottom_left_grid">
				<div class="w3l_social_icon_gridl">
					<img src="images/10.png" alt=" " class="img-responsive" />
				</div>
				<div class="w3l_social_icon_gridr">
					<h4 class="counter">43,568</h4>
				</div>
				<div class="clearfix"> </div>
				<div class="w3l_social_icon_grid_pos">
					<label>-</label>
				</div>
			</div>
			<div class="col-md-6 wthree_welcome_bottom_left_grid">
				<div class="w3l_social_icon_gridl">
					<img src="images/11.png" alt=" " class="img-responsive" />
				</div>
				<div class="w3l_social_icon_gridr">
					<h4 class="counter">12,432</h4>
				</div>
				<div class="clearfix"> </div>
				<div class="w3l_social_icon_grid_pos">
					<label>-</label>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 wthree_welcome_bottom_right">
			<div class="agileinfo_grid">
				<figure class="agileits_effect_moses">
					<img src="images/4.jpg" alt=" " class="img-responsive" />
					<figcaption>
						<h4>Plantation <span>For Future Growth</span></h4>
						<p>Nullam in luctus lectus. Mauris lobortis dui mauris, non vestibulum 
							magna blandit at scelerisque tellus ipsum nec ipsum.</p>
					</figcaption>			
				</figure>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //welcome-bottom -->
<!-- news -->
	<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head">Latest <span>News</span> from plantation</h3>
			<div class="w3_agile_image">
				<img src="images/1.png" alt=" " class="img-responsive">
			</div>
			<p class="agile_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
			<div class="w3ls_news_grids">
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="images/3.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text"><h3>plantation</h3></div>
						</div>
					</div>
					<div class="agileits_w3layouts_news_grid">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>25 March 2017</li>
							<li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
						</ul>
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Design & Planting</a></h4>
						<p>Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et 
							magnis dis parturient montes.</p>
					</div>
				</div>
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="images/6.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text"><h3>plantation</h3></div>
						</div>
					</div>
					<div class="agileits_w3layouts_news_grid">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>28 March 2017</li>
							<li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
						</ul>
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Quality & Reliability</a></h4>
						<p>Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et 
							magnis dis parturient montes.</p>
					</div>
				</div>
				<div class="col-md-4 w3ls_news_grid">
					<div class="w3layouts_news_grid">
						<img src="images/5.jpg" alt=" " class="img-responsive" />
						<div class="w3layouts_news_grid_pos">
							<div class="wthree_text"><h3>plantation</h3></div>
						</div>
					</div>
					<div class="agileits_w3layouts_news_grid">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>30 March 2017</li>
							<li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
						</ul>
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Satisfied Customers</a></h4>
						<p>Vivamus lacinia odio ut euismod eleifend. Cum sociis natoque penatibus et 
							magnis dis parturient montes.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //news -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<h3 class="agileits_w3layouts_head agileinfo_head"><span>Subscribe</span> to our newsletter</h3>
			<div class="w3_agile_image">
				<img src="images/12.png" alt=" " class="img-responsive">
			</div>
			<p class="agile_para agileits_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
			<div class="w3ls_news_grids w3ls_newsletter_grids">
				<form action="#" method="post">
					<input name="Your Name" placeholder="Your Name" type="text" value="<?php 
					if(isset($_SESSION['user_id'])) {
						echo htmlspecialchars($_SESSION['user_id']);
					}
					?>" required="">

					<input name="Your Email" placeholder="Your Email" type="email" required="" value="			<?php 
					if(isset($_SESSION['user_id'])) {
						echo htmlspecialchars($_SESSION['email']);
					}
					?>" required="true">	
					<input type="submit" value="Subscribe">
				</form>
			</div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3agile_footer_grids">
				<div class="col-md-3 agileinfo_footer_grid">
					<div class="agileits_w3layouts_footer_logo">
						<h2><a href="index.php"><span>G</span> o Green<i>Grow healthy products</i></a></h2>
					</div>
				</div>
				<div class="col-md-4 agileinfo_footer_grid">
					<h3>Contact Info</h3>
					<h4>Call Us <span>+91 XXXXXXXXXX</span></h4>
					<p>XXXXX <span>XXXXX</span></p>
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-2 agileinfo_footer_grid agileinfo_footer_grid1">
					<h3>Navigation</h3>
					<ul class="w3layouts_footer_nav">
						<li><a href="index.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Home</a></li>
						<li><a href="icons.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Web Icons</a></li>
						<li><a href="typography.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Typography</a></li>
						<li><a href="contact.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-3 agileinfo_footer_grid">
					<h3>Find Us Here</h3>
					<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15256.6722041727!2d74.28247475!3d17.06443065!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1504606466177" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/2.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/5.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/3.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="w3_agileits_footer_copy">
			<div class="container">
				<p>© 2020 Germinate. All rights reserved | Design by <a href="">XXXXXXXXXX.</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!-- mislider -->
	<script src="js/mislider.js" type="text/javascript"></script>
	<script type="text/javascript">
        jQuery(function ($) {
            var slider = $('.mis-stage').miSlider({
                //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
                stageHeight: 380,
                //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
                slidesOnStage: false,
                //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
                slidePosition: 'center',
                //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
                slideStart: 'mid',
                //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
                slideScaling: 150,
                //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
                offsetV: -5,
                //  Center slide contents vertically - Boolean. Default: false
                centerV: true,
                //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
                navButtonsOpacity: 1,
            });
        });
    </script>
<!-- //mislider -->
<!-- text-effect -->
		<script type="text/javascript" src="js/jquery.transit.js"></script> 
		<script type="text/javascript" src="js/jquery.textFx.js"></script> 
		<script type="text/javascript">
			$(document).ready(function() {
					$('.test').textFx({
						type: 'fadeIn',
						iChar: 100,
						iAnim: 1000
					});
			});
		</script>
<!-- //text-effect -->
<!-- menu -->
	<script>
		$(function() {
			
			initDropDowns($("div.shy-menu"));

		});

		function initDropDowns(allMenus) {

			allMenus.children(".shy-menu-hamburger").on("click", function() {
				
				var thisTrigger = jQuery(this),
					thisMenu = thisTrigger.parent(),
					thisPanel = thisTrigger.next();

				if (thisMenu.hasClass("is-open")) {

					thisMenu.removeClass("is-open");

				} else {			
					
					allMenus.removeClass("is-open");	
					thisMenu.addClass("is-open");
					thisPanel.on("click", function(e) {
						e.stopPropagation();
					});
				}
				
				return false;
			});
		}
	</script>
<!-- //menu -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
