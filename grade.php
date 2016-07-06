<?php
$subjects = [];
$grades = [];
fwrite(STDOUT, "Give me subjects and their grades and I will return an average\n");
do {
	fwrite(STDOUT, "What subject? \n");
	array_push($subjects, fgets(STDIN));
	fwrite(STDOUT, "What was your grade? \n");
	array_push($grades, fgets(STDIN));
	fwrite(STDOUT, "Add more? Y or N.\n");
	$continue = trim(fgets(STDIN));
} while ($continue == "y");
echo "This is your grades added together.\n";
echo $solution = array_sum($grades) . "\n";
echo "This is your average.\n";
$average = $solution / count($grades) . "\n";
echo round($average) . "\n";

$f = 3;