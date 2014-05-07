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
	<title>The end</title>
</head>
<link rel="stylesheet" href="styles.css" />
<body>

<img id="endImg" class="illustration" src="img/endPage.png" alt="" />

	<div id="container">
	
		<div id="story" class="coffee">
		<h2>YOUR NIGHT HAS ENDED</h2>
		<p class="active">Your night has come to an end, but there is so much more to discover. Click the phone to play again.</p>
		
		</div>
		
		
		<a href="index.php">
			<div id="phone">
				<img src="./img/iphone.png"/>
			</div>
		</a> <!--end phone-->
		<div id="overlay"></div>
		<div id="whereTo">
			<h2>Where to?</h2>
			<h3 data-initialText=" "></h3>
		
		</div>
	
	</div>

	
</body>
</html>