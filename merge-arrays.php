<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'Bob'];

//---------------------------------part 1---------------------------------
//create a function that returns true or false if an array value is found.
function searchArray ($array){

    $searchFor = 'Dana';

    echo "Searching for {$searchFor}........" . PHP_EOL;

    $result = array_search($searchFor, $array);

    if ($result !== false) {
        echo "We found {$searchFor} at the index {$result}" . PHP_EOL;
    } else {
        echo "No results for {$searchFor}" . PHP_EOL;
    }
}

searchArray($names);

// //-------------------------------part 2------------------------------------
// //create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().
function compareArrays ($array, $array2) {

    $count = 0;


    foreach ($array2 as $name) {
        $searchFor = $name;
        echo "searching for {$searchFor}........." . PHP_EOL;

        $compareArrays = array_search($searchFor, $array);
        if ($compareArrays !== false) {
            $count += 1;
            if ($count != 0) {
                echo 'Array $compare shares ' . $count . ' values with Array $names.' . PHP_EOL;    
            } else {
                echo 'Array $compare does NOT share any values with Array $names.' . PHP_EOL;
            }
        }   
    }
}
compareArrays ($names, $compare);

//------------------------------------merging arrays------------------------------------

//Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

// If the arrays have the same value at the same index, then it should only be added once.
// If the values differ, then the value from the first array should be added and then the second.
// The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop().
// Test your combine_arrays() function with $names and $compare. The resulting array should look like:

function combineArrays($array, $array2) 
{
    $combined = [];

    if(count($array) >= count($array2)) {
        $largerArray = $array; 
        $shorterArray = $array2;
    } else {
        $largerArray = $array2;
        $shorterArray = $array;
    }

    foreach ($largerArray as $key => $name) {
        if (in_array($name, $shorterArray)) {
            array_push($combined, $name);
            
        } else {
            array_push($combined, $name);
            if (isset($shorterArray[$key])) {
                array_push($combined, $shorterArray[$key]);
            }
        }   
        
    }

    return $combined;
}

print_r (combineArrays ($names, $compare));

