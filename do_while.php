<?php

$x = 0;

do {
	echo $x . PHP_EOL; 
	$x += 2; 
} while ($x <= 100);

$y = 100; 

do {
	echo $y . PHP_EOL;
	$y -= 5;
} while ($y >= -10);

$a = 2;

do{
	echo $a . PHP_EOL;
	$a *= $a;
} while ($a < 1000000);