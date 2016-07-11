<?php
include_once 'common.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" charset="utf-8">
    <title>Bonnard Valentin | Developper + Designer</title>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="icon" type="image/png" href="assets/pics/lg.png" />
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="assets/js/scroll.js"></script>
</head>
<body id="black-apparition">

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
<section class="homepage">
    <header class="top-header">
        <a href="index.php" title="Valentin Bonnard" >
            <img id="logo" src="assets/pics/lg.png">
        </a>
        <div class="menu">

            <div class="icon_so">
                <div class="open-overlay white">
                    <span class="bar-top"></span>
                    <span class="bar-middle"></span>
                    <span class="bar-bottom"></span>
                </div>
            </div>
        </div>
    </header>
    <div class="center">
        <div class="text">
            <h1 class="fc-r1">Bonnard Valentin</h1>
            <span class="littleline"></span>
            <h1 class="fc-r2">Developer</h1>
        </div>
    </div>
    <a class="arrow bounce" href="#recent_portfolio"></a>
    <div class="line"></div>
</section>
<section class="recent_portfolio" id="recent_portfolio" >
    <div class="center">
        <div class="text">
            <h1 class="fc-r1">Coming soon</h1>

        </div>
    </div>
    <a class="Up bounceUp" href="#homepage"></a>
</section>


<script type="text/javascript">
    $('.open-overlay').click(function() {
        var overlay_navigation = $('.overlay-navigation'),
            nav_item_1 = $('nav li:nth-of-type(1)'),
            nav_item_2 = $('nav li:nth-of-type(2)'),
            nav_item_3 = $('nav li:nth-of-type(3)'),
            nav_item_4 = $('nav li:nth-of-type(4)'),
            nav_item_5 = $('nav li:nth-of-type(5)'),
            top_bar = $('.bar-top'),
            middle_bar = $('.bar-middle'),
            bottom_bar = $('.bar-bottom');

        overlay_navigation.toggleClass('overlay-active');
        if (overlay_navigation.hasClass('overlay-active')) {

            top_bar.removeClass('animate-out-top-bar').addClass('animate-top-bar');
            middle_bar.removeClass('animate-out-middle-bar').addClass('animate-middle-bar');
            bottom_bar.removeClass('animate-out-bottom-bar').addClass('animate-bottom-bar');
            overlay_navigation.removeClass('overlay-slide-up').addClass('overlay-slide-down')
            nav_item_1.removeClass('slide-in-nav-item-reverse').addClass('slide-in-nav-item');
            nav_item_2.removeClass('slide-in-nav-item-delay-1-reverse').addClass('slide-in-nav-item-delay-1');
            nav_item_3.removeClass('slide-in-nav-item-delay-2-reverse').addClass('slide-in-nav-item-delay-2');
            nav_item_4.removeClass('slide-in-nav-item-delay-3-reverse').addClass('slide-in-nav-item-delay-3');
            nav_item_5.removeClass('slide-in-nav-item-delay-4-reverse').addClass('slide-in-nav-item-delay-4');
        } else {
            top_bar.removeClass('animate-top-bar').addClass('animate-out-top-bar');
            middle_bar.removeClass('animate-middle-bar').addClass('animate-out-middle-bar');
            bottom_bar.removeClass('animate-bottom-bar').addClass('animate-out-bottom-bar');
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