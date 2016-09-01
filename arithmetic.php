<?php

$value = 7;
$value2 = 8;


function add($a, $b) {
    checkNumeric($a, $b);
    return $a + $b;
}

function subtract($a, $b) {
    checkNumeric($a, $b);
    return $a - $b;
}

function multiply($a, $b) {
    checkNumeric($a, $b);
    return $a * $b;
}

function divide($a, $b) {
    checkNumeric($a, $b);
    divideByZero($a, $b);
    return $a / $b;
}

function modulus($a, $b) {
    checkNumeric($a, $b);
    divideByZero($a, $b);
    return $a % $b;
}

function checkNumeric ($a, $b) {
	if (is_numeric($a) && (is_numeric($b))) {
		return;
	} else {
		echo "inputs must be numbers, duh!" . PHP_EOL;
		if (! is_numeric ($a)){
			echo "{$a} is not a number" . PHP_EOL;	
		} 
		if (! is_numeric ($b)){
			echo "{$b} is not a number" . PHP_EOL;
		}
	}
}

function divideByZero ($a, $b) {
	if ($b != 0) {
		return;
	} else if (! is_numeric($b)) {
		echo "{$b} is not a number" . PHP_EOL;
		exit;
	} else {
		echo "you can't divide by zero, bro!" . PHP_EOL;
		exit;
	}
}
// Add code to test your functions here
echo add($value, $value2) . PHP_EOL;
echo subtract($value, $value2) . PHP_EOL;
echo multiply($value, $value2) . PHP_EOL;
echo divide($value, $value2) . PHP_EOL;
echo modulus($value, $value2) . PHP_EOL;