<?php
$letters = array('e', 'a', 'g', 'x', 'i', 'd', 'f', 'b', 'h', 'r', 'p', '42', '4', '2', 'YEA');

for ($i = 0; $i < count($letters); $i++) {
	for ($x = 0; $x < count($letters)-1; $x++) {

		if ($letters[$x] > $letters[$x+1]) {
			$sorted = $letters[$x+1];
			$letters[$x+1] = $letters[$x];
			$letters[$x] = $sorted;
		}
	}
}

print_r($letters);