<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);


function humanizedList($array) 
{
	$msg = '';
	$sort = false;

	if ($sort === true) {
		sort($array);
	};
	//take off the last person and save
	$lastInList = array_pop($array);

	//add an and
	array_push($array, 'and');

	//turn array to string
	$stringWithAnd = implode(', ', $array);

	//concatenate that
	$msg .= 'Some of the most famous fictional theoretical physicists are ';
	$msg .= $stringWithAnd . ' ';
	$msg .= $lastInList . '.' . PHP_EOL;

	echo $msg;
}
humanizedList($physicistsArray);