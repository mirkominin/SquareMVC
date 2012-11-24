<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Mirko Minin sida</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/stilmal.css">

		<script type="text/javascript" src="js/main.js"></script>
	
		
		<!--loading the jquery library-->		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script src="js/vendor/modernizr-2.6.1.min.js"></script>
		<script type="text/javascript" src="js/sidemenu.js"></script>
		<script type="text/javascript" src="js/picture.js"></script>
		<!--implementing google maps-->
		<script type="text/javascript" src="js/map.js"></script>
    </head>
    <body>

	<div id ="wrap">
		<div id = "header">
			<div><h1>PHP och MVC</h1><a href="http://www.bth.se/" target="_blank">  Blekinge Teckniska Högskola</a></div>
			<a href="http://edu.bth.se/utbildning/utb_kurstillfalle.asp?KtAnmkod=KP900&KtTermin=20131" target="_blank"> Kurs DV1440 -  </a>		
		</div><!--end header-->
	<div id="sidebar">
			<p><a href="index.php?index" title="Hem">Me Sidan</a></p>
			<p id = "menu"><a href="#">Redovisningar</a></p>
			<div class ="menu">
			<p><a href="index.php?redovisning&redovisning=redovisning1">Moment 1 - Boilingplate</a></p>
			<p><a href="index.php?redovisning&redovisning=redovisning2">Moment 2 - MVC ramverk </a></p>
			<p><a href="index.php?redovisning&redovisning=redovisning3">Moment 3 - MVC Guestbook</a></p>
			<p><a href="index.php?redovisning&redovisning=redovisning4">Moment 4 - MVC Login</a></p>
			</div>
			<p><a href="#" title = "klick för att visa karta" onclick ="initialize(); exitPic()">Här bor jag</p>
			<p><a href="#" title = "klick igen för att visa en till bild" onclick ="initPicture(); exitMap()">Bild</p>
			<p><a href="index.php?blog" title="Hem">Blog</a></p>
			<p><a href="index.php?login" title="Hem">Login</a></p>
			<div id="map_canvas"></div>
				 <div id="exitMap"><p><a href="https://maps.google.se/maps?q=Caf%C3%A9+dello+Sport,+P%C3%A5lsundsgatan+8,+Stockholm&hl=it&ie=UTF8&ll=59.317185,18.043928&spn=0.012417,0.042272&sll=59.318322,18.035212&sspn=0.010161,0.024848&oq=cafe+dello+sport&t=h&hq=Caf%C3%A9+dello+Sport,&hnear=P%C3%A5lsundsgatan+8,+117+31+Stockholm&z=15" 
				 target ="_blank" title="till google maps">Större karta</a> | <a href="#" onclick ="closeMap()" >Stäng karta</a></p></div>
				 <div id="picture_canvas"><img src="#" id="image" /></div>
				 <div id="exitPic"><p><a href="#" onclick ="closePic()" >Stäng bild</a></p></div>	
	</div><!--end sidebar-->
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
		