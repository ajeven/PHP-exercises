<?php
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combineArrays($names, $compare) {
	$anotherArray = [];
	for ($i = 0; $i < count($names); $i++) {
		if ($names[$i] === $compare[$i]) {
			$anotherArray[] = $names[$i] . "\n";
		} else {
			$anotherArray[] = $names[$i] . "\n";
			$anotherArray[] = $compare[$i] . "\n";
		}
	} 
	return $anotherArray;
}

print_r(combineArrays($names, $compare)) . "\n";
