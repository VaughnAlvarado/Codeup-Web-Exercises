<?php 
require 'function.php';
// function pageController() {

	$count = inputGET('click');
// }
// $data = pageController();
// extract($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Count</title>
</head>
<body>
	<h1>Counter : <?= $count ?></h1>
	<h3>Up</h3>
	<a href="/php/counter.php?click=<?= $count+1 ?>" name='up_one'>Click Me</a>
	<h3>Down</h3>
	<a href="/php/counter.php?click=<?= $count-1 ?>" name='down_one'>Click Me</a>

</body>
</html>
