<?php
$x = 0;
$y = 5;
$z = 10;
if ($x < $y && $y < $z) {
	echo "{$x} < {$y} < {$z}\n";
}
if ($x > 0 || $x < 10) {
	echo "{$x} is greater than 0 or {$x} less than 10\n";
}
if ($y > 0 || $y < 10)
 {
 	echo "{$y} is greater than 0 or {$y} less than 10\n";
 } 
 if ($z > 0 || $z < 10) {
 	echo "$z is greater than 0 or less than 10\n";
 }
if ($x > 0 && $x < 10) {
	echo "{$x} is greater than 0 and {$x} less than 10\n";
}
if ($y > 0 && $y < 10)
 {
 	echo "{$y} is greater than 0 and {$y} less than 10\n";
 } 
 if ($z > 0 && $z < 10) {
 	echo "$z is greater than 0 and less than 10\n";
 }
  // If $x is greater than 0 AND less than 10, echo the result as a sentence "$x is greater than 0 AND less than 10".

 // repeat the if statement for $y and $z.




?>