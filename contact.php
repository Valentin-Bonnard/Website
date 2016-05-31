<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" charset="utf-8">
	<title>Contact | Bonnard Valentin</title>
	    <!--[if lt IE 9]>
	    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
	    <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
	    <link rel="icon" type="image/png" href="assets/pics/lg.png"/>
	    <link href="http://fonts.googleapis.com/css?family=Dancing+Script:700|EB+Garamond" rel="stylesheet" type="text/css" />
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	    <script src="assets/js/scroll.js"></script>
	</head>
<?php
include_once 'common.php'
?><body id="page">
		<div class="overlay-navigation">
			<nav role="navigation">
				<ul>
					<li><a href="index.php" data-content=<?php echo $lang['MENU_HOME_CONTENT']; ?>><?php echo $lang['MENU_HOME']; ?></a></li>
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
			<div class="center nohomepage">
				<div class="text other">
					<h1 class="fc-r3">Let's get in touch</h1>
					<span class="littleline"></span>
					<h1 class="fc-r4">Bonnard Valentin</h1>
                    <a href="#"id="opener" ><h1 class="fc-r5">dev.valentin@laposte.net</h1></a>
					<h1 class="fc-r6">0788461285</h1>
				</div>
			</div>
            <div id="box-form">
                <form id="mail-form"  method="post" action="mail.php">
                    <input name="name" type="text" class="feedback-input" placeholder="Your Name">
                    <input name="email" type="text" class="feedback-input" placeholder="Your Email">
					<input name="subject" type="text" class="feedback-input" placeholder="Subject">
                    <textarea name=="message" class="feedback-input" placeholder="Comment"></textarea>
                    <input type="submit" name="submit">
                </form>
            </div>
			<script src="assets/js/pop-up.js"></script>
			<div class="container">
				<div class="links">
					<div class="info">
						<h5>Facebook</h5>
						<span class="line_info"></span></span><span class="line_info2"></span>
						<a href="https://www.facebook.com/BonnardValentin" target="_blank">facebook.com/BonnardValentin</a>
					</div>
					<div class="info_right">
						<h5>Github</h5>
						<span class="line_info"></span></span><span class="line_info2"></span>
						<a href="https://github.com/Valentin-Bonnard" target="_blank">github.com/ValentinBonnard</a>
					</div>
					<div class="info">
						<h5>LinkedIn</h5>
						<span class="line_info"></span></span><span class="line_info2"></span>
						<a href="https://twitter.com/deathshot3" target="_blank"></a>
					</div>
					<div class="info_right_resume">
						<h5>Resume</h5>
						<span class="line_info"></span></span><span class="line_info2"></span>
						<a href="#" target="_blank">Download</a>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div id="footer-info">
				<h1 class="fc-r6">© 2016 Bonnard Valentin</h1>
			</div>
		</footer>
	</section>
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

