<?php
function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return ($a + $b) . "\n";
	} else {
		echo "Both values need to me numeric in value.\n";
	}
}
function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return ($a - $b) . "\n";
	} else {
		echo "Both values need to me numeric in value.\n";
	}
}
function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return ($a * $b) . "\n";
	} else {
		echo "Both values need to me numeric in value.\n";
	}
}
function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b) && $b != 0) {
		return ($a / $b) . "\n";
	} elseif ($b == 0) {
		echo "Can not divide by 0\n";
	} else {
		echo "Both values need to me numeric in value.\n";
	}
}
function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b) && $b != 0) {
		return ($a % $b) . "\n";
	} elseif ($b == 0) {
		echo "Can not divide by 0\n";
	} else {
		echo "Both values need to me numeric in value.\n";
	}
}

$a = 100;
$b = 25;
echo add($a, $b);
echo subtract($a, $b);
echo multiply($a, $b);
echo divide($a, $b);
echo modulus($a, $b);