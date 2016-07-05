<?php

$number = mt_rand($argv[1], $argv[2]);
fwrite(STDOUT, "What number am I thinking?\n");
// Best practice to always trim STDIN
$guess = trim(fgets(STDIN));
$count = 0;
if ($argc == 3) {
	echo "The number you are looking for is between $argv[1] and $argv[2]\n";
}
do {
	if ($guess > $number) {
		fwrite(STDOUT, "Lower!\n");
		$guess = trim(fgets(STDIN));
		$count++;
	} elseif ($guess < $number) {
		fwrite(STDOUT, "Higher!\n");
		$guess = trim(fgets(STDIN));
		$count++;
	} elseif ($guess == $number) {
		fwrite(STDOUT, "You win!\n");
		if (true) break;
	}
} while ($guess !== $number);
fwrite(STDOUT, "It took you $count tries.\n");