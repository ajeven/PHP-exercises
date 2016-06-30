<?php

$x = 0;
$y = 5;
$z = 10;

// TODO:
//If $x < $y < $z then echo "{$x} < {$y} < {$z}\n";
if ($x < $y && $y < $z) {
	echo "$x < $y < $z\n"; 
}

// TODO:
// If 0 is less than $x OR $x is less than 10
// then echo the result as a sentence "0 is less than {$x} OR {$x} is less than 10".
if (0 < $x || $x < $z) {
	echo "$x is less than $x OR $x is less than $z\n";
}
// TODO:
// repeat the if statement for $y and $z.
if (0 < $y || $y < $z) {
	echo "$x is less than $y OR $y is less than $z\n";
}
// TODO:
// If 0 is less than $x AND $x is less than 10
// then echo the result as a sentence "0 is less than {$x} AND {$x} is less than 10".
if (0 < $z || $y < $z) {
	echo "$x is less than $z OR $z is less than $z\n";
}
// TODO:
// repeat the if statement for $y and $z.
if (0 < $y && $y < $z) {
	echo "$x is less than $y AND $y is less than $z\n";
}