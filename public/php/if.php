<?php 
 $a = 5;
 $b = 10;
 $c = '10';

if ($a < $b) {
	echo "$a is less than $b\n";
} else {
	echo "$b is less than $a\n";
}
 echo $a < $b ? "$a is less than $b" : "$b is less than $a\n";

if ($b >= $c) {
     echo "$b is greater than or equal to $c\n";
 } else {
     echo "$b is NOT greater than or equal to $c\n";
 }
 echo $b >= $c ? "$b is greater than or equal to $c" : "$c is greater\n";

if ($b === $c) {
     echo "$b is identical to $c";
 } else if ($b == $c) {
     echo "$b is equal to $c";
 } else {
     echo "$b is not identical or equal to $c";
 } 

?>