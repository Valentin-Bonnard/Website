<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" charset="utf-8">
	<title>About me | Bonnard Valentin</title>
	    <!--[if lt IE 9]>
	    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
	    <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
	    <link rel="icon" type="image/png" href="assets/pics/lg.png" />
	    <link href="http://fonts.googleapis.com/css?family=Dancing+Script:700|EB+Garamond" rel="stylesheet" type="text/css" />
	    <script src="assets/js/jquery.js" type="text/javascript"></script>
	    
	</head>
	<body>
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
			<div class="profile"></div>
			<div class="center about_container">
				<div class="text about">
					<h1>Hey I'm Valentin - A Full Stack Developper who love design  </h1>
					<span class="littleline"></span>
					<p>Niveau intermédiaire dans les langages web (Javascript/Jquery, Html 5 et CSS3), 
					Niveau intermédiaire supérieur en  c#, dot net, c++ . Adepte de la méthode Merise et POO.
					Travailleur persistant et diligent avec une capacité d’intérargir avec les clients et les membres de l’équipe</p>
					<p>Niveau intermédiaire dans les langages web (Javascript/Jquery, Html 5 et CSS3), 
					Niveau intermédiaire supérieur en  c#, dot net, c++ . Adepte de la méthode Merise et POO.
					Travailleur persistant et diligent avec une capacité d’intérargir avec les clients et les membres de l’équipe</p>
					<p>Niveau intermédiaire dans les langages web (Javascript/Jquery, Html 5 et CSS3), 
					Niveau intermédiaire supérieur en  c#, dot net, c++ . Adepte de la méthode Merise et POO.
					Travailleur persistant et diligent avec une capacité d’intérargir avec les clients et les membres de l’équipe</p>
				</div>
			</div>
			</section>
			<section class="sec-interest">
			<div class="container-a">
				<div class="info-pri">
				<div class="info">
						<h5>Tools</h5>
						<span class="line_info"></span></span><span class="line_info2"></span>
						<h1 class="fc-r8">Visual studio 2013/2015</h1>
				</div>
				<div class="info_right">
						<h5>Github</h5>
						<span class="line_info"></span></span><span class="line_info2"></span>
						<a href="https://github.com/Valentin-Bonnard" target="_blank">github.com/ValentinBonnard</a>
					</div>
			</div>
			
			
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