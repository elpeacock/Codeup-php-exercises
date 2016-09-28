<?php

require_once 'rectangle.php';
require_once 'square.php';

$firstRectangle = new rectangle(5, 9);
$secondRectangle = new rectangle (7, 4);

echo $firstRectangle->area(5, 9) . PHP_EOL;
echo $firstRectangle->perimeter(5, 9) . PHP_EOL;
echo $secondRectangle->area(7, 4) . PHP_EOL;
echo $secondRectangle->perimeter(7, 4) . PHP_EOL;

$firstSquare = new square(5);
$secondSquare = new square(7);

echo $firstSquare->area(5) . PHP_EOL;
echo $firstSquare->perimeter(5) . PHP_EOL;
echo $secondSquare->area(7) . PHP_EOL;
echo $secondSquare->perimeter(7) . PHP_EOL;