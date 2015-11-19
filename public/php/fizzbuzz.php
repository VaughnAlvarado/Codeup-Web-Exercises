<?php 
for($number = 0; $number <=100; $number++) {
	if ($number % 3 == 0 && $number % 5 == 0){
		echo "fizzbuzz\n";
	} else if ($number % 5 == 0) {
		echo "buzz\n";
	} else if ($number % 3 == 0) {
		echo "fizz\n";
	} else {
		echo "$number\n";
	}
}