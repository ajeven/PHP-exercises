<?php
echo "Give me a starting number\n";
$i = trim(fgets(STDIN));
echo "Give me an ending number\n";
$a = trim(fgets(STDIN));
for ($i = $i; $i <= $a; $i++) {
	echo "$i\n";
}