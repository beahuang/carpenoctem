<?php
	session_start();
	if(isset($_SESSION['path']))
		session_destroy();
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="taxi.js" type="text/javascript"></script>
	<title>Carpe Noctem</title>
</head>
<link rel="stylesheet" href="styles.css" />
<body>

<img id="introImg" class="illustration" src="img/intro.png" alt="" />

	<div id="container"
	>
	
		<div id="story" class="coffee">
		<p class="active">
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		Welcome to Carpe Noctem. You're in the back of a taxicab, it's only 8:30PM, and you're looking for something to do. Use your phone to determine where you want to go. Have fun!
		</p>
		</div>
		
		
		<!--<div id="phone">
			<img src="./img/iphone.png"/>
			<div id="map">-->
		
		<?php
		include("map.php");
		echo'<div id="phone">';
		getPhone();
		echo'<div id="map">';
		
		newMap();
		echo'</div> </div>';
		?>

		<div id="overlay"></div>
		<div id="whereTo">
			<h2>Where to?</h2>
			<h3 data-initialText=" "></h3>
		
		</div>
	
	</div>

	<embed src="audio/intro.mp3" autostart="true" loop="true"
	width="2" height="0">
	</embed>
	<noembed>
	<bgsound src="audio/intro.mp3" loop="infinite">
	</noembed>


	
</body>
</html>