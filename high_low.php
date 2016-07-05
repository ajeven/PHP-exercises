<?php

// Best practice to always trim STDIN
$count = 1;
if ($argc == 3 && is_numeric($argv[1])  && is_numeric($argv[2]) && $argv[1] <= $argv[2]) {
	echo "The number you are looking for is between $argv[1] and $argv[2]\n";
		$number = mt_rand($argv[1], $argv[2]);
		fwrite(STDOUT, "What number am I thinking?\n");
		$guess = trim(fgets(STDIN));
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
			fwrite(STDOUT, "It took you $count tries.\n");
			if (true) break;
		}
	} while ($guess !== $number);
} else {
	echo "Enter two numbers for your game silly\n", "First number must be lower than second\n";
}
