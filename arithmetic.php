<?php
function add($a, $b) {
    return ($a + $b) . "\n";
}
function subtract($a, $b) {
    return ($a - $b) . "\n";
}
function multiply($a, $b) {
    return ($a * $b) . "\n";
}
function divide($a, $b) {
    return ($a / $b) . "\n";
}
function modulus($a, $b) {
    return ($a % $b) . "\n";
}
$a = 100;
$b = 20;
echo add($a, $b);
echo subtract($a, $b);
echo multiply($a, $b);
echo divide($a, $b);
echo modulus($a, $b);
