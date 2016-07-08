<?php
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function search($array, $needle) {
	$found = array_search($needle, $array);
		if ($found == true){
		}
		return $found;		
}
function compare($names, $compare) {
	$i = 0;
	foreach ($names as $key => $value) {
		if (array_search($value, $compare, true) !== false) {
			++$i;
		}
	}
	return $i;
}
fwrite(STDOUT, "I will check our names database based on your input...\n");
$name = trim(fgets(STDIN));
echo var_dump(search($names, $name)) . "\n";
echo "There is " . compare($names, $compare) . " between the two arrays\n";









