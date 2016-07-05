<?php

$number = 0;

for ($number = 1; $number <= 100; $number++) {
	if ($number % 2 == 0) {
	echo $number . PHP_EOL;
		continue;
	}
}
for ($number = 1; $number <= 100; $number++) {
	echo $number . PHP_EOL;
	if ($number == 10) {
		break;
	}	
}
echo "I wont go past 10! NO WAY NO HOW!\n";