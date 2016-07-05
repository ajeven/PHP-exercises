<?php
echo "Give me a starting number\n";
$i = trim(fgets(STDIN));
echo "Give me an ending number\n";
$a = trim(fgets(STDIN));
echo "Would you like to set a custom increment?\n";
$b = trim(fgets(STDIN));
for ($i = $i; $i <= $a; $i+=$b) {
	if ($b == null) {
		$i++;
	}
	if (is_numeric($i) && is_numeric($a)) {
		echo "$i\n";
	} else {
		echo "make sure you pass numeric values\n";
		exit(0);
	}
}