<?php

$filename = 'cities.txt';
//'r' = read if you wish to write use 'w'
$handle = fopen($filename, 'r');
$contents = fread($handle, filesize($filename));
print_r(explode("\n", trim($contents)));
echo $contents . PHP_EOL;
fclose($handle);