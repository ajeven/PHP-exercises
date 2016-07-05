<?php

$number = mt_rand(1, 100);
fwrite(STDOUT, "What number am I thinking?\n");
$guess = fgets(STDIN);
do {
	if ($guess > $number) {
		fwrite(STDOUT, "Lower!\n");
		$guess = fgets(STDIN);
	} elseif ($guess < $number) {
		fwrite(STDOUT, "Higher!\n");
		$guess = fgets(STDIN);
	} elseif ($guess == $number) {
		fwrite(STDOUT, "You win!\n");
		if (true) break;
	}
} while ($guess !== $number);