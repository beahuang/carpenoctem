<?php
	session_start();
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="taxi.js" type="text/javascript"></script>
	<title>Pub</title>
</head>
<link rel="stylesheet" href="styles.css" />
<body>
<img id="pubImg" class="illustration" src="img/pub_warp_big.png" alt="" />
<!-- pub should always have the bartender-->
<div class="character bartender"><h4>So what can I get you tonight?</h4></div>
<div class="character fighter"><h4>What are you looking at broksi?!</h4></div>

	<div id="container">
		<div id="story">
		<h2>Pub</h2>
			<p id="ip">
				You figure, what better way to start off your night than by hitting up the local pub? You start off by having a couple of drinks, but not too far in you start feeling extremely nauseous. It must have been the allergy medication you took earlier in the night, you didn’t let it digest long enough! A guy notices you throwing up in the bathroom, and you explain that it (ironically) has nothing to do with the alcohol. He sympathetically offers to get you some food and coffee from the nearby coffee shop, which, he claims, has always made him feel better when ill.
			</p>
	
			<p id="ps-ip" class='bigguy'>
				What a night! You get free chinese food and meet some cool cops! You decide to keep it going and get a few drinks at the local irish pub. But one guy there keeps calling you (rather indecent) names and won’t leave you alone, and you get tired of his BS. When you confront him he swings at you, and you end up in a fight.
			</p>
			<p id="hp-ip" >
				You decide to head to the nearby Irish Pub for some drinks. You order Jack with Coke and tell yourself 
				you will only have two drinks for the night. You end up drinking way more than you should and you get 
				really drunk. At this point, you are so drunk that you can go anywhere and have the time of your life!
			</p>
			<p id="pk-ip">
				You decide to head to the nearby Irish Pub for some drinks. You order Jack with Coke and tell yourself 
				you will only have two drinks for the night. You end up drinking way more than you should and you get 
				really drunk. At this point, you are so drunk that you can go anywhere and have the time of your life!
			</p>
			
			<p id="cs-ip">
				Now that you have some food in your stomach its time to have some fun! You decide to head to 
				the nearby Irish Pub for some drinks. You order Jack with Coke and tell yourself you will only 
				have two drinks for the night. You end up drinking way more than you should and you get really 
				drunk. At this point, you are so drunk that you can go anywhere and have the time of your life!
			</p>
			<p id="ps-cs-ip">
				Everyone from the party heads to the nearest Pub. You are so drunk from the party, you stumble 
				over a truck driver at a pub while trying to order your drink. He shoves you and you both get into 
				a fight. The police are contacted and you are arrested.
			</p>
			<p id="pk-cs-ip">
				Everyone from the party heads to the nearest Pub. You are so drunk from the party, you stumble 
				over a truck driver at a pub while trying to order your drink. He shoves you and you both get into 
				a fight. The police are contacted and you are arrested.
			</p>
			<p id="cs-ps-ip">
				What a night! You get free chinese food and meet some cool cops! You decide to keep it going and 
				get a few drinks at the local Irish Pub. You see a guy you don’t like, get in a fight; and get 
				sent back to police 
			</p>
			<p id="hp-ps-ip">
				What a night! You get free chinese food and meet some cool cops! You decide to keep it going and 
				get a few drinks at the local Irish Pub. You see a guy you don’t like, get in a fight; and get 
				sent back to police 
			</p>
			<p id="pk-ps-ip">
				What a night! You get free chinese food and meet some cool cops! You decide to keep it going and 
				get a few drinks at the local Irish Pub. You see a guy you don’t like, get in a fight; and get 
				sent back to police 
			</p>
			<p id="cs-hp-ip" class='bigguy'>
				You decide to head to the local irish pub for a few drinks. You trip over a mean-lookin’ guy’s foot on your way to the counter to order, and he shoves you in response. The two of you get into a fight, and soon enough the police show up to bring you both in.
			</p>
			<p ip="ps-hp-ip" >
				You decide to head to the local Irish Pub for a few drinks. You stumble over a truck driver at a 
				pub while trying to order your drink. He shoves you and you both get into a fight. The police are 
				contacted and you are arrested.
			</p>
			<p id="pk-hp-ip">
				You decide to head to the local Irish Pub for a few drinks. You stumble over a truck driver at a 
				pub while trying to order your drink. He shoves you and you both get into a fight. The police are 
				contacted and you are arrested.
			</p>
			<p id="cs-pk-ip">
				You drown your sorrows with a few- no a lot of drinks. You stumble over a truck driver at a pub 
				while trying to order your drink. He shoves you and you both get into a fight. The police are 
				contacted and you are arrested.
			</p>
	
			<p id="ps-cs-ip" >
				Everyone from the party heads to the nearest Pub. You are so drunk from the party, you stumble 
				over a truck driver at a pub while trying to order your drink. He shoves you and you both get 
				into a fight. The police are contacted and you are arrested.
			</p>
			<p id="hp-cs-ip">
				Everyone from the party heads to the nearest Pub. You are so drunk from the party, you stumble 
				over a truck driver at a pub while trying to order your drink. He shoves you and you both get 
				into a fight. The police are contacted and you are arrested.
			</p>
			</div>
						
		
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
	<embed src="pub.mp3" autostart="true" loop="true"
	width="2" height="0">
	</embed>
	<noembed>
	<bgsound src="pub.mp3" loop="infinite">
	</noembed>
	
</script>
</body>
</html>