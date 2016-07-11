<?php

// Converts array into list n1, n2, ..., and n3
function humanizedList($array) {
	sort($array);
	$famousFakePhysicists = implode(", ", $array);
	//function must return or you will get a value of NULL.
	return $famousFakePhysicists;
}
// List of famous peeps
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// TODO: Convert the string into an array
$physicistsArray = explode(", ", $physicistsString);
$last = array_pop($physicistsArray);
array_push($physicistsArray, "and $last");

// Humanize that list
$famousFakePhysicists = humanizedList($physicistsArray);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are " . $famousFakePhysicists . ".\n";