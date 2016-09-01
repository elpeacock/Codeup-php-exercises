<?php

function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    return $a / $b;
}

function modulus($a, $b) {
	return $a % $b;
}
// Add code to test your functions here
echo add(1, 5) . PHP_EOL;
echo subtract(6, 4) . PHP_EOL;
echo multiply(3, 5) . PHP_EOL;
echo divide(4, 2) . PHP_EOL;
echo modulus(5, 3) . PHP_EOL;