<?php
//fix this later ... its not complete...
function inspect($all) {
		$type = gettype($all);
	if (is_null($all)) { 
		return "The value is NULL\n";
	} elseif (is_string($all) && empty($all)) {
		return "Im an empty string\n";
	} elseif (is_array($all) && empty($all)) {
				return " I am an EMPTY array\n";
	} elseif (is_array($all)) {
		foreach ($all as $key => $value) {
			return "Index $key is: $value \n";
		}
		} else {
			var_export($all) . PHP_EOL;
		}
}
// TODO: Create your inspect() function here
// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;
// TODO: After each echo statement, use inspect() to output the variable's type and its value
echo 'Inspecting $num1:' . PHP_EOL;
echo inspect($num1) . PHP_EOL;
echo 'Inspecting $num2:' . PHP_EOL;
echo inspect($num2) . PHP_EOL;
echo 'Inspecting $num3:' . PHP_EOL;
echo inspect($num3) . PHP_EOL;
echo 'Inspecting $num4:' . PHP_EOL;
echo inspect($num4) . PHP_EOL;
echo 'Inspecting $null:' . PHP_EOL;
echo inspect($null) . PHP_EOL;
echo 'Inspecting $bool1' . PHP_EOL;
echo inspect($bool1) . PHP_EOL;
echo 'Inspecting $bool2' . PHP_EOL;
echo inspect($bool2) . PHP_EOL;
echo 'Inspecting $string1' . PHP_EOL;
echo inspect($string1) . PHP_EOL;
echo 'Inspecting $string2' . PHP_EOL;
echo inspect($string2) . PHP_EOL;
echo 'Inspecting $array1' . PHP_EOL;
echo inspect($array1) . PHP_EOL;
echo 'Inspecting $array2' . PHP_EOL;
echo inspect($array2) . PHP_EOL;