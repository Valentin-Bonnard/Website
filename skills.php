<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" charset="utf-8">
	<title>Skills | Bonnard Valentin</title>
	    <!--[if lt IE 9]>
	    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
	    <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
	    <link rel="icon" type="image/png" href="assets/pics/lg.png" />
	    <link href="http://fonts.googleapis.com/css?family=Dancing+Script:700|EB+Garamond" rel="stylesheet" type="text/css" />
	    <script src="assets/js/jquery.js" type="text/javascript"></script>
	    <script src="assets/js/scroll.js"></script>
	</head>
	<body id="white">
		<div class="overlay-navigation">
			<nav role="navigation">
				<ul>
					<li><a href="index.php" data-content="The beginning">Home</a></li>
					<li><a href="about.php" data-content="Curious?">About</a></li>
					<li><a href="skills.php" data-content="Am I a Jedi ?">Skills</a></li>
					<li><a href="portfolio.php" data-content="You can judge my works">Portfolio</a></li>
					<li><a href="contact.php" data-content="Don't hesitate">Contact</a></li>
				</ul>
			</nav>
		</div>
		<section class="homepage2">
			<header class="top-header">
				<a href="index.php" title="Valentin Bonnard" >
					<img id="logo" src="assets/pics/lg.png">
				</a>
				<div class="menu">

					<div class="icon_so">
						<div class="open-overlay black">
							<span class="bt "></span>
							<span class="bm "></span>
							<span class="btm"></span>
						</div>
					</div>	
				</div>
			</header>
			<div class="center about_container">
				<div class="text about">
					<h1>Hey I'm Valentin - A Full Stack c#/web Developper</h1>
					<span class="littleline"></span>
					<p>As an art director, designer and front-end developer, I have been building interactive experiences, creating brands and designing print materials for over eight years. I’m a fan of structure and simplicity in both design and code; organization and consistency are very important to me.</p>
					<p>As an art director, designer and front-end developer, I have been building interactive experiences, creating brands and designing print materials for over eight years. I’m a fan of structure and simplicity in both design and code; organization and consistency are very important to me.</p>
					<p>As an art director, designer and front-end developer, I have been building interactive experiences, creating brands and designing print materials for over eight years. I’m a fan of structure and simplicity in both design and code; organization and consistency are very important to me.</p>
				</div>
			</div>
			<div class="container">
				<div class="links">
					<div class="info">
						<h5>Tools</h5>
						<span class="line_info"></span></span><span class="line_info2"></span>
						<h1 class="fc-r8">Visual studio 2013/2015</h1>
						<h1 class="fc-r8">Sublime Text 3</h1>
						<h1 class="fc-r8">Photoshop/Illustrator</h1>
						<h1 class="fc-r8">Blender</h1>
						<h1 class="fc-r8">Unity 3d</h1>
						
					</div>
					<div class="info_right">
						<h5>Framework and other</h5>
						<span class="line_info"></span></span><span class="line_info2"></span>
						<h1 class="fc-r8">Jquery</h1>
						<h1 class="fc-r8">Node js</h1>
						<h1 class="fc-r8">Mysql</h1>
					</div>
				</div>
			</div>
		</div>
		<a class="arrow2 bounce" href="#circlessec"></a>
	</section>
	<section class="circlessec" id="circlessec">
		<div id="skills" class="skills">
			<div class="container_secondary">
				<div class="skills-grids">
					<div class="skill-section text-center">
						<h1 class="fc-r5"><span> </span>Languages<span> </span><h1 class="fc-r5">
						</div>
						<div class="services_grids">
							<div id="canvas">
								<div class="skill-grids text-center">
									<div class="col-md-3">	
										<div class="skill-grid">
											<div class="circle" id="circles-1"></div>									
											<h3>C#</h3>	
										</div>								  
									</div>
									<div class="col-md-3">	
										<div class="skill-grid">
											<div class="circle" id="circles-2"></div>									
											<h3>C/C++</h3>	
										</div>								  
									</div>
									<div class="col-md-3">	
										<div class="skill-grid">
											<div class="circle" id="circles-3"></div>									
											<h3>JAVASCRIPT</h3>	
										</div>								  
									</div>
									<div class="col-md-3">	
										<div class="skill-grid">
											<div class="circle" id="circles-4"></div>									
											<h3>HTML5/CSS</h3>	
										</div>								  
									</div>
									<div class="col-md-3">	
										<div class="skill-grid">
											<div class="circle" id="circles-5"></div>									
											<h3>SQL</h3>	
										</div>								  
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>

						<script type="text/javascript" src="assets/js/circles.js"></script>
						<script>
							var colors = [
							['#181115', '#D3F8E2'], ['#181115', '#D3F8E2'], ['#181115', '#E4C1F9'], ['#181115', '#F694C1'],['#181115', '#EDE7B1'],['#181115', '#A9DEF9']
							];
							var i = 1;
							var child1 = document.getElementById('circles-' + i);
							var child2 = document.getElementById('circles-' + (i + 1));
							var child3 = document.getElementById('circles-' + (i + 2));
							var child4 = document.getElementById('circles-' + (i + 3));
							var child5 = document.getElementById('circles-' + (i + 4));

							percentage = null;

							Circles.create({
								id:         child1.id,
								percentage: 50,
								radius:     80,
								width:      15,
								number:   	percentage / 1,
								text:       '%',
								colors:     colors[1]
							});

							Circles.create({
								id:         child2.id,
								percentage: 55,
								radius:     80,
								width:      15,
								number:   	percentage / 1,
								text:       '%',
								colors:     colors[2]
							});

							Circles.create({
								id:         child3.id,
								percentage: 55,
								radius:     80,
								width:      15,
								number:   	percentage / 1,
								text:       '%',
								colors:     colors[3]
							});

							Circles.create({
								id:         child4.id,
								percentage: 55,
								radius:     80,
								width:      15,
								number:   	percentage / 1,
								text:       '%',
								colors:     colors[4]
							});

							Circles.create({
								id:         child5.id,
								percentage: 55,
								radius:     80,
								width:      15,
								number:   	percentage / 1,
								text:       '%',
								colors:     colors[5]
							});
						</script>
					</section>
					<footer>
						<div id="footer-info">
							<h1 class="fc-r6">© 2016 Bonnard Valentin</h1>
						</div>
					</footer>
					<script type="text/javascript">
						$('.open-overlay').click(function() {
							var overlay_navigation = $('.overlay-navigation'),
							nav_item_1 = $('nav li:nth-of-type(1)'),
							nav_item_2 = $('nav li:nth-of-type(2)'),
							nav_item_3 = $('nav li:nth-of-type(3)'),
							nav_item_4 = $('nav li:nth-of-type(4)'),
							nav_item_5 = $('nav li:nth-of-type(5)'),
							top_bar = $('.bt'),
							middle_bar = $('.bm'),
							bottom_bar = $('.btm');

							overlay_navigation.toggleClass('overlay-active');
							if (overlay_navigation.hasClass('overlay-active')) {

								top_bar.removeClass('animate-out-bt').addClass('animate-bt');
								middle_bar.removeClass('animate-out-bm').addClass('animate-bm');
								bottom_bar.removeClass('animate-out-btm').addClass('animate-btm');
								overlay_navigation.removeClass('overlay-slide-up').addClass('overlay-slide-down')
								nav_item_1.removeClass('slide-in-nav-item-reverse').addClass('slide-in-nav-item');
								nav_item_2.removeClass('slide-in-nav-item-delay-1-reverse').addClass('slide-in-nav-item-delay-1');
								nav_item_3.removeClass('slide-in-nav-item-delay-2-reverse').addClass('slide-in-nav-item-delay-2');
								nav_item_4.removeClass('slide-in-nav-item-delay-3-reverse').addClass('slide-in-nav-item-delay-3');
								nav_item_5.removeClass('slide-in-nav-item-delay-4-reverse').addClass('slide-in-nav-item-delay-4');
							} else {
								top_bar.removeClass('animate-bt').addClass('animate-out-bt');
								middle_bar.removeClass('animate-bm').addClass('animate-out-bm');
								bottom_bar.removeClass('animate-btm').addClass('animate-out-btm');
								overlay_navigation.removeClass('overlay-slide-down').addClass('overlay-slide-up')
								nav_item_1.removeClass('slide-in-nav-item').addClass('slide-in-nav-item-reverse');
								nav_item_2.removeClass('slide-in-nav-item-delay-1').addClass('slide-in-nav-item-delay-1-reverse');
								nav_item_3.removeClass('slide-in-nav-item-delay-2').addClass('slide-in-nav-item-delay-2-reverse');
								nav_item_4.removeClass('slide-in-nav-item-delay-3').addClass('slide-in-nav-item-delay-3-reverse');
								nav_item_5.removeClass('slide-in-nav-item-delay-4').addClass('slide-in-nav-item-delay-4-reverse');
							}
						})
					</script>
				</body>
				</html>