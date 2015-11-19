<?php 
function pageController() {
	$nouns = [
		"meat",
		"tacos",
		"burrito",
		"pink-slime",
		"babies",
		"food-babies",
		"beans",
		"man who talks to none",
		"tortillas",
		"bean"
	];
	$adjectives = [
		"Supercalifragilisticexpialidocious",
		"Wide-eyed",
		"Colossal",
		"Inferior",
		"Creepy",
		"Substantial",
		"Worthy",
		"Touchy",
		"Massive",
		"Salty"
	];
	$randomNoun = array_rand($nouns, 1);
	$randomAdjective = array_rand($adjectives, 1);
	$randomServerName = $adjectives[$randomAdjective] . "-" . $nouns[$randomNoun] . "\n";
	return [
		"randomServerName" => $randomServerName
	];
}
	$data = pageController();
	extract($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>List of Server-Names</title>
	 <link href="/css/servername.css" rel="stylesheet">
</head>
<body>
	<h1>List Of Server Names</h1>
	<div class="center-stuff">
		<input id="servername" value="<?= $randomServerName ?>"</input> 
	</div>

</body>
</html>