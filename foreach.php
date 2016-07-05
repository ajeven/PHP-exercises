<?php

$things = ['Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11];

foreach ($things as $thing) {
	if (is_scalar($thing)) { //scalar checks for float int string and bool
		echo "{$thing}" . PHP_EOL;
	} elseif (is_bool($thing)) {
	 	echo "I am true or false!!" . PHP_EOL;
	} elseif (is_float($thing)) {
		echo "We all float down here\n";
	} elseif (is_double($thing)) { //double and real alias float
		echo "Double no trouble\n";
	} elseif (is_real($thing)) {
		echo "Im a real boy\n";
	} elseif (is_int($thing)) {
		echo "Intergers are fun\n";
	} elseif (is_null($thing)) {
		echo "I am worthless\n";
	} elseif (is_string($thing)) {
		echo "Yo-Yo\n";
	} else {
		echo "Move along nothing to see here\n";
	} 
}