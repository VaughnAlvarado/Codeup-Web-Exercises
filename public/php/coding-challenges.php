<?php 

// ------------------------------------> 1st Challenge
$n = 0;
for($i = 0; $i <= 328; $i++) {
	$splitNumber = str_split($i);
	foreach($splitNumber as $seperatedNumber) {
		if ($seperatedNumber == 4) {
			$n++;
			break;
		}
	}
}
echo $n . PHP_EOL;

// ------------------------------------------> 2nd challenge
function fibonacci($n) {
	$squareOfNumber = sqrt(5 * $n * $n -4);
	$secondSquareOfNumber = sqrt(5 * $n * $n +4);

	if($squareOfNumber - ceil($squareOfNumber) == 0) {
		echo "$n is fibonacci" . PHP_EOL;
	} else if($secondSquareOfNumber - ceil($secondSquareOfNumber) == 0) {
		echo "$n is fibonacci" . PHP_EOL;
	} else {
		echo "$n is not a fibonacci" . PHP_EOL;
	}
}
fibonacci(89);
fibonacci(233);
fibonacci(375);
fibonacci(601);
fibonacci(1597);
fibonacci(4183);
