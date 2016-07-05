<?php

$number = 0;

for ($number = 1; $number <= 100; $number++) {
	if ($number % 3 == 0 && $number % 5 == 0) {
		echo "FizzBuzz\n";
	}
	elseif ($number % 5 == 0) {
		echo "Buzz\n";
	}
	elseif ($number % 3 == 0) {
		echo "Fizz\n";
	} else {
		echo "$number\n";
	}
}