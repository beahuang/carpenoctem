<?php
	session_start();
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="taxi-game/taxi.js" type="text/javascript"></script>
	<title>Coffee Shop</title>
</head>
<link rel="stylesheet" href="styles.css" />
<body>
<img id="coffeeImg" class="illustration" src="img/cafe_warp_big.png" alt="" />
<!-- the coffee shop should always have the cashier there-->
<div class="character barista"><h4>Want your usual coffee and scones?</h4></div>
<div class="character sadguy"><h4>...Oh, hey</h4></div>	
	<div id="container">
		<div id="story">
		<h2>Coffee</h2>
		<p id="cs">
		You are buying coffee and donuts, and you listen to a news report about a guy getting bitten. 
		The details are unclear but the it has been reported that the incident has taken place in the 
		nearby park.
		</p>
		
		<p id="ip-cs" class='kid'>
		You arrive at the coffee shop with your new friend and as promised he buys you a hot cup of coffee and a pretty hefty breakfast sandwich. You drink the coffee but save the sandwich for later from fear of vomiting it up, too. When the guy hears about your determination to have a really kickass night, he agrees excitedly and offers to come with you.
		</p>
		
		<p id="ps-cs" class='kid'>
		Talking with the prisoner has you parched. You decide to get an iced coffee from your favorite 
		coffee shop. You meet a kid who invites you to a party at his rich friend's mansion. You get to 
		the party and have a few drinks and get pretty drunk. There’s word that the cops are coming so 
		you decide to bail.
		</p>
		
		<p id="hp-cs" class='kid'>
		That long conversation with the patient has you parched. You decide to get an iced coffee from 
		your favorite coffee shop. You meet a kid who invites you to a party at his rich friend's mansion. 
		You get to the party and have a few drinks and get pretty drunk. There’s word that the cops are 
		coming so you decide to bail.
		</p>
		
		<p id="pk-cs" class='kid'>
		Walking through the park worked up quite a thirst so you decide to get an iced coffee from your 
		favorite coffee shop. You meet a kid who invites you to a party at his rich friend's mansion. 
		You get to the party and have a few drinks and get pretty drunk. There’s word that the cops are 
		coming so you decide to bail.
		</p>
		<!-- 		5 stories -->
		
		
		
		
		
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
			<h2>Where to next?</h2>
			<h3 data-initialText=" "></h3>
		
		</div>
	
	</div>
		<embed src="coffee.mp3" autostart="true" loop="true"
		width="2" height="0">
		</embed>
		<noembed>
		<bgsound src="coffee.mp3" loop="infinite">
		</noembed>
	
</script>
</body>
</html>