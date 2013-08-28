<!DOCTYPE html>
<html lang="de">
<head>
<title>DeinBus - <?php echo $title; ?></title>

<!-- Meta Tags -->
<meta charset="utf-8" />
<meta name="description" content="<?php echo $desc; ?>" />
	<!-- Setup of the viewport for mobile devices -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Stylesheet & Favicon -->
<link rel="stylesheet" type="text/css" href="/style.css" />
<link rel="icon" href="favicon.ico" type="image/x-icon" />

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<div id="wrap">
<div id="header">
	<div id="social-bar">
		<div class="fb-like-box" data-href="https://www.facebook.com/DeinBus" data-width="200" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>
		<div class="g-plusone" data-size="tall" data-href="http://int02.10100.de"></div>
	</div>
	<div class="logo clearfix">
		<div id="main">
			<a href="/" title="Hier geht's zur Startseite"><img class="logo" 
            alt="DeinBus.de Logo" 
            src="/img/deinbus_transparent.png"/></a>
		</div>
	</div>  
	<div id="nav">
		<ul>
        	<li><a href="/" title="Startseite">Start</a></li>
			<li class="sub"><a href="/reiseziele" title="Übersicht über die angebotenen Reiseziele">Reiseziele</a>
				<ul>
					<li>In Deutschland...</li>
					<li><a href="/reiseziele/berlin" title="Beeindruckendes Berlin">Berlin</a></li>
					<li><a href="/reiseziele/muenchen" title="Mein München">München</a></li>
					<li><a href="/reiseziele/hamburg" title="Hübsches Hamburg">Hamburg</a></li>
					<li><a href="/reiseziele/castropbrauxel" title="Culinasches Castrop-Brauxel">Castrop-Brauxel</a></li>					
					<li>...oder europaweit</li>
					<li><a href="/reiseziele/amsterdam" title="Atemberaubendes Amsterdam">Amsterdam</a></li>
					<li><a href="/reiseziele/paris" title="Paris persönlich">Paris</a></li>
					<li><a href="/reiseziele/london" title="Luminiertes London">London</a></li>
					<li><a href="/reiseziele/barcelona" title="Beeindruckendes Barcelona">Barcelona</a></li>
					
				</ul>
			</li>
            <li><a href="/busse" title="In unseren Bussen reisen Sie mit allem Komfort">Die Busse</a></li>
			<li><a href="/wirueberuns" title="Lernen Sie Ihre Reisebegleitung kennen">Über uns</a></li>
			<li><a href="/kontakt" title="Gerne beantworten wir Ihre Fragen">Kontakt</a></li>
		</ul>
		<span class="corner-left"></span>
		<span class="corner-right"></span>
	</div>
</div>
