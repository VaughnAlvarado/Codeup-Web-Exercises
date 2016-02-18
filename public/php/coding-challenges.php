<?php 

// ------------------------------------> 1st Challenge
// $n = 0;
// for($i = 0; $i <= 328; $i++) {
// 	$splitNumber = str_split($i);
// 	foreach($splitNumber as $seperatedNumber) {
// 		if ($seperatedNumber == 4) {
// 			$n++;
// 			break;
// 		}
// 	}
// }
// echo $n;

$n = 4183;
$squareOfNumber = sqrt(5 * $n * $n -4);
$secondSquareOfNumber = sqrt(5 * $n * $n +4);

if($squareOfNumber - ceil($squareOfNumber) == 0) {
	echo "this is fibonacci";
} else if($secondSquareOfNumber - ceil($secondSquareOfNumber) == 0) {
	echo "this is fibonacci";
} else {
	echo "this is not a fibonacci";
}
