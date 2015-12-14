<?php
function pageController() {
	$confirmedPingSwing = Input::get('click');
	$confirmedPongSwing = Input::get('click');
	$random = mt_rand(0, 100);
	return [
		'random' => $random,
		'confirmedPingSwing' => $confirmedPingSwing,
		'confirmedPongSwing' => $confirmedPongSwing
	];
}
$data = pageController();
extract($data);
?>
<html>
<head>
	<title>Pong</title>
</head>
<body>
	<h1>Pongs Turn!!</h1>
	<h1>Round: <?= $confirmedPongSwing ?></h1>
	<h3>Hit</h3>
	<?php if($random > 10): ?>
		<a href="/php/ping.php?click=<?= $confirmedPingSwing ?>" name='up_one'>Swing !!!</a>
	<?php else: ?>
		<a href="/php/ping.php?click=<?= $confirmedPingSwing=0 ?>" name='down'>Swing !!!</a>
	<?php endif; ?>

</body>
</html>