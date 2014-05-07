<?php
	session_start();
?>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="taxi.js" type="text/javascript"></script>
</head>

<body>

<!--Create the phone-->
<?php 
//this is for errors
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
//welcome to the map! :)
//This is a poi that generates an icon and a link for the map
class Poi {
	var $name;
	var $visited;
	
	function Poi($name="mall", $visited=true) {
		$this->name = $name;
		$this->visited = $visited;
	}
	function what_name() {
		echo $this->name;
	}
	function is_visited() {
		return $this->visited;
	}	
}

function getPath() {
	return $path;
	newMap();
}

function displayPoi($poi) {

 
   	//create div with a class of "Poi" and an ID of $name
   	echo '<div class="Poi';
   	
   	//if this place has been visited before, make it gray
   	if ($poi->is_visited()) {
   		echo ' visited';
   	}
   	
   	echo '" id="';
    echo ($poi->what_name());
    echo '">';
    echo '<a href="http://google.com"></a></div>';
  
}

//made these dummies for demo
function displayPolice($poi) {

 
   	//create div with a class of "Poi" and an ID of $name
   	echo '<div data-name="Police Station" class="Poi';
   	
   	//if this place has been visited before, make it gray
   	if ($poi->is_visited()) {
   		echo ' visited';
   	}
   	
   	echo '" id="';
    echo ($poi->what_name());
    echo '">';
    echo '<a onclick="addToPath(\'ps\')" href="police.php"></a></div>';
  
}

function displayPark($poi) {

 
   	//create div with a class of "Poi" and an ID of $name
   	echo '<div data-name="Park" class="Poi';
   	
   	//if this place has been visited before, make it gray
   	if ($poi->is_visited()) {
   		echo ' visited';
   	}
   	
   	echo '" id="';
    echo ($poi->what_name());
    echo '">';	
    echo '<a onclick="addToPath(\'pk\')"href="park.php"></a></div>';
  
}

function displayHospital($poi) {

 
   	//create div with a class of "Poi" and an ID of $name
   	echo '<div data-name="Hospital" class="Poi';
   	
   	//if this place has been visited before, make it gray
   	if ($poi->is_visited()) {
   		echo ' visited';
   	}
   	
   	echo '" id="';
    echo ($poi->what_name());
    echo '">';
    echo '<a onclick="addToPath(\'hp\')" href="hospital.php"></a></div>';
}

function displayCoffee($poi) {

 
   	//create div with a class of "Poi" and an ID of $name
   	echo '<div data-name="Coffee Shop" class="Poi';
   	
   	//if this place has been visited before, make it gray
   	if ($poi->is_visited()) {
   		echo ' visited';
   	}
   	
   	echo '" id="';
    echo ($poi->what_name());
    echo '">';
    echo '<a onclick="addToPath(\'cs\')" href="coffee.php"></a></div>';
  
}
function displayPub($poi) {

 
   	//create div with a class of "Poi" and an ID of $name
   	echo '<div data-name="Pub" class="Poi';
   	
   	//if this place has been visited before, make it gray
   	if ($poi->is_visited()) {
   		echo ' visited';
   	}
   	
   	echo '" id="';
    echo ($poi->what_name());
    echo '">';
    echo '<a onclick="addToPath(\'ip\')" href="pub.php"></a></div>';
  
}





//Unofficial "list" of Pois
$coffee = new Poi("coffee",false);
$pub = new Poi("pub",false);
$police = new Poi("police",false);
$hospital = new Poi("hospital",false);
$park = new Poi("park",false);


//POI, POI, POI, POI -> boolean
//Has this place been visited at at all?
function trippleCheck($one, $two, $three) {
	if ($one->is_visited()) {
		return true;
	}
	elseif ($two->is_visited()) {
		return true;
	}
	elseif ($three->is_visited()) {
		return true;
	}
	else {
		return false;
	}
}

function getPhone(){
$p ="";
	if(isset($_SESSION['path'])){ $p = $_SESSION['path']; }
	
	if (strlen($p) ==0) {
		echo'<img src="phones/p1.png"/>';
	}
	else if (strlen($p)==2) {
		echo'<img src="phones/p1.png"/>';
	}
	else if (strlen($p)==5) {
		echo'<img src="phones/p2.png"/>';
	}
	else if (strlen($p)==8) {
		echo'<img src="phones/p3.png"/>';
	}
	else if (strlen($p)==11) {
		echo'<img src="phones/p4.png"/>';
	}
}


//Produces Map
//checks if each POI has been visited
//displays icons
function newMap() {
	global $p, $coffee, $pub, $police, $hospital, $park;
	$p = "";
	if(isset($_SESSION['path'])){ $p = $_SESSION['path']; }

	if ((strpos($p, "cs")!==false) and !(($p == "ip") and (strlen($p)==2))) {
		$coffee->visited=true;
//		print($p . "checkcs");	
	}
	if (strpos($p, "ip")!==false) {
		$pub->visited=true;
//		print($p. "checkip");		
	}
	if ((strpos($p, "ps")!==false) 
	and !((strpos($p, "ip")==6)and(strlen($p)==8))) {
		$police->visited=true;	
//		print($p. "checkps");	
	}
	if ((strpos($p, "hp")!==false) 
	and !((strpos($p, "pk")==3) and (strlen($p)==5))) {
		$hospital->visited=true;	
//		print($p. "checkhp");	
	}
	if (strpos($p, "pk")!==false) {
		$park->visited=true;	
//		print($p. "checkpk");	
	}
	//coffee shop closer
	if (strlen($p)>4){
		$coffee->visited=true;
//		print($p. "checkcsclosed");	
	}
	//pub is closed
	if (strlen($p)>7){
		$pub->visited=true;
//		print($p. "checkpubclosed");	
	}
	//pub is connected to coffee shop if first
	if (($p == "ip") and (strlen($p)==2)){
		$pub->visited=true;
		$police->visited=true;
		$hospital->visited=true;
		$park->visited=true;
		$coffee->visited=false;
//		print($p. "checkipcon1");	
	}
	//pub is connected to police if third
	if ((strpos($p, "ip")==6)and(strlen($p)==8)){
		$pub->visited=true;
		$hospital->visited=true;
		$coffee->visited=true;
		$park->visited=true;
		$police->visted=false;
//		print($p. "checkipcon2");
	}
	//park is connected to hospital 
	if ((strpos($p, "pk")==3)and (strlen($p)==5)){
		$pub->visited=true;
		$police->visited=true;
		$coffee->visited=true;
		$park->visited=true;
		$hospital->visted=false;
//		print($p. "checkpkcon");	
	}

	displayCoffee($coffee);
	displayPub($pub);
	displayPolice($police);
	displayHospital($hospital);
	displayPark($park);	
}

 ?>
</body>


</html>