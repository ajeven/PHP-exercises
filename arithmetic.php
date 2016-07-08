<?php
function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return ($a + $b) . "\n";
	}
}
function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return ($a - $b) . "\n";
	}
}
function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return ($a * $b) . "\n";
	}
}
function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b) && $b != 0) {
		return ($a / $b) . "\n";
	}
}
function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b) && $b != 0) {
		return ($a % $b) . "\n";
	}
}
function error($a, $b) {
	if (is_numeric($a) && is_numeric($b) && $b != 0) {
		echo add($a, $b);
		echo subtract($a, $b);
		echo multiply($a, $b);
		echo divide($a, $b);
		echo modulus($a, $b);
	} elseif ($b == 0) {
		echo "Can not divide by 0!\n";
	} else {
		echo "Both values need to me numeric in value.\n";
	}
}

$a = 40;
$b = 5;
echo error($a, $b);