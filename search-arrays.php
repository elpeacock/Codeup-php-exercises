<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//---------------------------------part 1---------------------------------
//create a function that returns true or false if an array value is found.

$searchFor = 'Dana';

echo "Searching for {$searchFor}........" . PHP_EOL;

$result = array_search($searchFor, $names);

if ($result !== false) {
	echo "We found {$searchFor} at the index {$result}" . PHP_EOL;
} else {
	echo "No results for {$searchFor}" . PHP_EOL;
}

//-------------------------------part 2------------------------------------
//create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

$count = 0;

foreach ($compare as $name) {
	$searchFor = $name;
	echo "searching for {$searchFor}........." . PHP_EOL;

	$compareArrays = array_search($searchFor, $names);
	if ($compareArrays !== false) {
		$count += 1;
		if ($count != 0) {
			echo 'Array $compare shares ' . $count . ' values with Array $names.' . PHP_EOL;	
		} else {
			echo 'Array $compare does NOT share any values with Array $names.' . PHP_EOL;
		}
	}	
}
