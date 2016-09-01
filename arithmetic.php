<?php

$value = 5;
$value2 = 2;


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
echo add($value, $value2) . PHP_EOL;
echo subtract($value, $value2) . PHP_EOL;
echo multiply($value, $value2) . PHP_EOL;
echo divide($value, $value2) . PHP_EOL;
echo modulus($value, $value2) . PHP_EOL;