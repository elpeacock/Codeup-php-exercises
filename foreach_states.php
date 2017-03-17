<?php
// Using the following associative array, produce a script that does the following:

$states = [
    'AL' => 'Alabama',
    'AK' => 'Alaska',
    'AZ' => 'Arizona',
    'AR' => 'Arkansas',
    'CA' => 'California',
    'CO' => 'Colorado',
    'CT' => 'Connecticut',
    'DE' => 'Delaware',
    'DC' => 'District of Columbia',
    'FL' => 'Florida',
    'GA' => 'Georgia',
    'HI' => 'Hawaii',
    'ID' => 'Idaho',
    'IL' => 'Illinois',
    'IN' => 'Indiana',
    'IA' => 'Iowa',
    'KS' => 'Kansas',
    'KY' => 'Kentucky',
    'LA' => 'Louisiana',
    'ME' => 'Maine',
    'MD' => 'Maryland',
    'MA' => 'Massachusetts',
    'MI' => 'Michigan',
    'MN' => 'Minnesota',
    'MS' => 'Mississippi',
    'MO' => 'Missouri',
    'MT' => 'Montana',
    'NE' => 'Nebraska',
    'NV' => 'Nevada',
    'NH' => 'New Hampshire',
    'NJ' => 'New Jersey',
    'NM' => 'New Mexico',
    'NY' => 'New York',
    'NC' => 'North Carolina',
    'ND' => 'North Dakota',
    'OH' => 'Ohio',
    'OK' => 'Oklahoma',
    'OR' => 'Oregon',
    'PA' => 'Pennsylvania',
    'PR' => 'Puerto Rico',
    'RI' => 'Rhode Island',
    'SC' => 'South Carolina',
    'SD' => 'South Dakota',
    'TN' => 'Tennessee',
    'TX' => 'Texas',
    'VI' => 'US Virgin Islands',
    'UT' => 'Utah',
    'VT' => 'Vermont',
    'VA' => 'Virginia',
    'WA' => 'Washington',
    'WV' => 'West Virginia',
    'WI' => 'Wisconsin',
    'WY' => 'Wyoming'
];

//     - Outputs only the states with an "x" character in the state name
echo 'states with names that contain the letter x' . PHP_EOL;
echo '-----------------------' . PHP_EOL;

foreach ($states as $stateAbbrev => $stateName) {
    if (strpos($stateName, 'x')) {
        echo $stateName . PHP_EOL;
    }
}

//     - Outputs all the states without the letter "a" in their name
echo '-----------------------' . PHP_EOL;
echo 'states with names that do not contain the letter a' . PHP_EOL;
echo '-----------------------' . PHP_EOL;

foreach ($states as $stateAbbrev => $stateName) {
    if (strpos($stateName, 'a') === false) {
        echo $stateName . PHP_EOL;
    }
}

//     - Outputs the states and abbreviations of all the states starting with vowels.
echo '------------------------' . PHP_EOL;
echo 'abbreviation and name of state names that begin with vowels' . PHP_EOL;
echo '-----------------------' . PHP_EOL;

$vowels = array('A', 'E', 'I', 'O', 'U', 'a', 'e', 'i', 'o', 'u');
foreach ($states as $stateAbbrev => $stateName) {

    if (in_array($stateName[0], $vowels)) {
        echo $stateAbbrev . ': ' . $stateName . PHP_EOL;
    }

}

// create a new array of state names that start and end with vowels
echo '------------------------' . PHP_EOL;
echo 'state names that start and end with vowels' . PHP_EOL;
echo '--------------------------------------' . PHP_EOL;
$statesThatStartAndEndWithVowels = array();
foreach ($states as $stateAbbrev => $stateName) {
    if (in_array($stateName[0], $vowels) 
        && in_array(substr($stateName, -1), $vowels, $strict = true) ) {
        $statesThatStartAndEndWithVowels[$stateAbbrev] = $stateName;
    }
    
}
foreach ($statesThatStartAndEndWithVowels as $state) {
    echo $state . PHP_EOL;
}

//create a new array of states with names that are more than one word in length
echo '------------------------' . PHP_EOL;
echo 'state names that are more than one word' . PHP_EOL;
echo '--------------------------------------' . PHP_EOL;
$statesWithMoreThanOneWordNames = array();
foreach ($states as $stateAbbrev => $stateName) {
    if (stripos($stateName, ' ')) {
        array_push($statesWithMoreThanOneWordNames, $stateName);
    }
}
foreach ($statesWithMoreThanOneWordNames as $state) {
    echo $state . PHP_EOL;
}

// use a foreach to construct a new array of all the states with "North" "East" "South" or "West"
echo '------------------------' . PHP_EOL;
echo 'state names with north, south, east, or west in the name' . PHP_EOL;
echo '--------------------------------------' . PHP_EOL;
$arrayOfCardinalStates = array();
$directions = array('North', 'South', 'East', 'West');
foreach ($states as $stateAbbrev => $stateName) {
    foreach ($directions as $direction) {
        if (stripos($stateName, $direction) !== false) {
            array_push($arrayOfCardinalStates, $stateName);
        }
    }
}
foreach ($arrayOfCardinalStates as $cardinalState) {
    echo $cardinalState . PHP_EOL;
}

