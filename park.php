<?php
	session_start();
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="taxi.js" type="text/javascript"></script>
	<title>Park</title>
</head>
<link rel="stylesheet" href="styles.css" />
<body>
<img id="parkImg" class="illustration" src="img/park_warp_big.png" alt="" />
<div class="character mugger"><h4>HEY! Gimmie all your money, and no sudden movements!</h4></div>
<div class="character couple"><h4>This is so exciting, I feel so adventurous!</h4></div>

	<div id="container">
		<div id="story">
		<h2>Park</h2>
		
		<p id="pk">
			You decide to take a stroll in the park on this nice autumn night. You stumble upon a backpack and there's
			a pistol inside. You decide to take the backpack and leave the park before the person who left it comes 
			looking for it.
		</p>
		<p id="ps-pk">
			After your conversation with the prisoner, he tells you his friend left him a bag of money in the 
			park for him and asks you to get it for him offering you $200 from it. You find it but all of a sudden, 
			a hooded guy comes out of nowhere and mugs you of all of your money and stabs you in the arm, but 
			the wound isn’t too bad.
		</p>
		<p id="hp-pk">
			All of a sudden, a hooded guy comes out of nowhere and mugs you of all of your money and stabs you 
			in the arm. Luckily you have the pocket first aid kit from your mom to fix yourself up!
		</p>
		<p id="cs-pk" class='mugger'>
			You leave the coffee shop and your curiosity leads you to check at all of the commotion at the park. But there doesn’t seem to be anything going on anymore. It seems quiet. Too quiet… You’re about to leave when a hooded guy with a knife comes out of nowhere and demands all of your money. You have nothing to defend yourself with, but you try to run anyway, and he stabs you in the arm before you get away.

		</p>
		<p id="cs-ip-pk" class='girl'>
			You decide to take a drunken stroll in the park to see if all the commotion from the news report is still going on. You see a pretty girl sitting on a bench and you slur out a pretty awful pickup line. She slaps you before leaving, so you drunkenly follow her, begging forgiveness.
		</p>
		<p id="ip-cs-pk" class='girl'>
			The two of you are both nature enthusiasts, so you go for a walk in the local park and hope the nausea will wear off soon. There’s a girl sitting alone on a park bench, and she gets a little freaked out seeing two guys walking towards her in the dark, so she takes off long before you get to her. That’s a bummer.
		</p>
		<p id="ps-cs-pk">
			You decide to take a drunken stroll in the park to see if all the commotion from the news report 
			is still going on. You see a pretty girl sitting on a bench and you hit on her but she turns you 
			down. You no longer want to be in the park after such failure so you decide to leave.
		</p>
		<p id="ps-ip-pk">
			You decide to take a drunken stroll in the park to see if all the commotion from the news report 
			is still going on. You see a pretty girl sitting on a bench and you hit on her but she turns you 
			down. You no longer want to be in the park after such failure so you decide to leave.
		</p>
		<p id="hp-cs-pk">
			You decide to take a drunken stroll in the park to see if all the commotion from the news report 
			is still going on. You see a pretty girl sitting on a bench and you hit on her but she turns you 
			down. You no longer want to be in the park after such failure so you decide to leave.
		</p>
		<p  id="hp-ip-pk">
			You decide to take a drunken stroll in the park to see if all the commotion from the news report 
			is still going on. You see a pretty girl sitting on a bench and you hit on her but she turns you 
			down. You no longer want to be in the park after such failure so you decide to leave.
		</p>
		<p id="hp-cs-pk">
			You decide to take a drunken stroll in the park to see if all the commotion from the news report 
			is still going on. You see a pretty girl sitting on a bench and you hit on her but she turns you 
			down. You no longer want to be in the park after such failure so you decide to leave.
		</p>
		<p id="hp-ip-pk">
			You decide to take a drunken stroll in the park to see if all the commotion from the news report 
			is still going on. You see a pretty girl sitting on a bench and you hit on her but she turns you 
			down. You no longer want to be in the park after such failure so you decide to leave.
		</p>
		<p id="hp-ip-pk">
			You decide to take a drunken stroll in the park to see if all the commotion from the news report 
			is still going on. You see a pretty girl sitting on a bench and you hit on her but she turns you 
			down. You no longer want to be in the park after such failure so you decide to leave.
		</p>
		
		<p id="cs-ps-pk" class='girl'>
			You decide to walk of all of the Chinese food you just ate by taking a stroll in the park. You see a pretty girl sitting on a bench and you are about to hit on her, until you realize she’s crying. She explains that she just received a call, and her uncle, a policeman, was killed in the line of duty, and she’s not allowed to see him. You explain that you know how to get into the morgue.
		</p>
		<p id="cs-pk">
			You leave the coffee shop and your curiosity leads you to check at all of the commotion at 
			the park since you are looking for some excitement tonight and you have nothing to do. Once 
			you are at the park, all of the commotion has already died down and the area seems deserted. 
			All of a sudden, a hooded guy comes out of nowhere and mugs you of all of your money and stabs 
			you in the abdomen.
		</p>
		<p id="ps-hp-pk"  class="end">
			You decide to take a stroll in the park. You see a pretty girl sitting on a bench and you hit on 
			her but she turns you down. You no longer want to be in the park after such failure so you decide 
			to leave.
		</p>
		<p id="hp-ps-pk" class="end">
			You decide to take a stroll in the park. You see a pretty girl sitting on a bench and you hit on 
			her but she turns you down. You no longer want to be in the park after such failure so you decide 
			to leave.
		</p>
		<p id="cs-hp-pk" class='girl'>
			You decide to take a stroll in the park, a little curious about the news report you heard earlier. You see a pretty girl sitting on a bench alone, and you pop a pretty sweet pick-up line on her, but she turns you down in a huff and leaves. You no longer want to be in the park after such failure so you decide to leave, but not before expressing your annoyance...
		</p>
		<p id="cs-ip-ps-pk" class="end" class="couple">
			You tire of trying to shoot at boring targets and wander to the park to see about offing some squirrels. You stumble upon a couple making out, probably gearing up for some pretty illegal PDA. They invite you to have a threesome! Everything is going pretty well until, glancing up from giving the girl a pretty serious hickey, you notice a pretty pale guy stumbling towards you, a not-entirely-human look in his bloodshot eyes… You are about to run off until you remember you still have a gun!
		</p>
		<p id="cs-ip-hp-pk" class="end" class="couple">
			You go for a stroll in the park and you find a couple having sex in underbrush. They are feeling experimental and you are still drunk and high, and they invite you to join them! The three of you are having a wonderful time in the dark until you all notice a fourth presence. You recognize the zombie from the news report earlier stumbling towards the three of you. You are butt naked, heavily impaired, and have nothing to defend yourself with…
		</p>
		<p id="cs-ps-hp-pk" class='couple' class="end">
			Never one to listen to your mother, you directly disobey her wishes and go for a stroll in the park. You stumble upon a couple having sex in underbrush. They are feeling experimental and invite you to join them! The menage-a-trois goes off without a hitch, presumably because those great cops from earlier took care of the incident on the news.
		</p>
		<p id="ip-cs-hp-pk" class="end">
			You are feeling wonderfully high, so you decide to leave the hospital and go for a stroll in the park. The two of you stumble upon a couple having sex in underbrush, and you’re just high enough to think that a 3-guy 1-girl outdoor foursome is a great idea. Not long into the debauchery, however, you notice a fifth presence - a guy shambling towards the group, groaning, bleeding. You’re a bit tangled up in the limbs, really high, and don’t have anything to defend yourself with...
		</p>
		<p id="ip-cs-ps-pk" class="end">
			You two get tired of shooting at the targets and decide to head to the park to aim at some innocent squirrels, but you both stumble upon a couple having sex in underbrush. They were feeling experimental, but three guys on one girl feels a little too sausage-festy to you. While walking away you spot a drunk guy shambling by the other direction and groaning. Weird.
		</p>
		<p  id="ps-cs-hp-pk" class="end">
			You go for a stroll in the park and you find a couple having sex in underbrush. They are feeling 
			experimental and you are still drunk and high, time to have a threesome! The three of you are 
			having a wonderful time in the dark until you all notice a fourth presence. You recognize the 
			zombie from the news report earlier on coming after the three of you. You are butt naked and 
			have nothing to defend yourself with…
		</p>
		<p  id="ps-ip-hp-pk" class="end">
			You go for a stroll in the park and you find a couple having sex in underbrush. They are feeling 
			experimental and you are still drunk and high, time to have a threesome! The three of you are 
			having a wonderful time in the dark until you all notice a fourth presence. You recognize the 
			zombie from the news report earlier on coming after the three of you. You are butt naked and 
			have nothing to defend yourself with…
		</p>
		<p id="hp-cs-ps-pk" class="end">
			You go for a stroll in the park and you find a couple having sex in underbrush. They are feeling 
			experimental and you are still drunk and high, time to have a threesome! The three of you are 
			having a wonderful time in the dark until you all notice a fourth presence. You recognize the 
			zombie from the news report earlier on coming after the three of you. You are butt naked and 
			have nothing to defend yourself with…
		</p>
		<p id="hp-ip-ps-pk" class="end">
			You go for a stroll in the park and you find a couple having sex in underbrush. They are feeling 
			experimental and you are still drunk and high, time to have a threesome! The three of you are 
			having a wonderful time in the dark until you all notice a fourth presence. You recognize the 
			zombie from the news report earlier on coming after the three of you. You are butt naked and 
			have nothing to defend yourself with…
		</p>
		<p id="pk-ip-ps-pk">
			You decide to go for a drunken stroll in the park and you find a couple having sex in underbrush. 
			They are feeling experimental and you are still drunk, time to have a threesome! The three of 
			you are having a wonderful time in the dark until you all notice a fourth presence. You realize 
			it is a zombie and it is able to bite the couple and they become zombies. Now you have three 
			zombies on top of you and you are butt naked with only the pistol you found earlier to defend 
			yourself with…
		</p>
		<p id="pk-ip-hp-pk">
			You decide to go for a drunken stroll in the park and you find a couple having sex in underbrush. 
			They are feeling experimental and you are still drunk, time to have a threesome! The three of 
			you are having a wonderful time in the dark until you all notice a fourth presence. You realize 
			it is a zombie and it is able to bite the couple and they become zombies. Now you have three 
			zombies on top of you and you are butt naked with only the pistol you found earlier to defend 
			yourself with…
		</p>
				
		
				
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
		<embed src="park.mp3" autostart="true" loop="true"
		width="2" height="0">
		</embed>
		<noembed>
		<bgsound src="park.mp3" loop="infinite">
		</noembed>
	
</script>
</body>
</html>