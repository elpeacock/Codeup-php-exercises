<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
    if (is_array($thing)) {
        echo "{$thing} is an array" . PHP_EOL;
    } else if (is_bool($thing)) {
        echo "{$thing} is a boolean" . PHP_EOL;
    } else if (is_string($thing)) {
        echo "{$thing} is a string" . PHP_EOL;
    } else if (is_null($thing)) {
        echo "{$thing} is value type null" . PHP_EOL;
    } else if (is_integer($thing)) {
        echo "{$thing} is an integer" . PHP_EOL;
    } else if (is_float($thing)) {
        echo "{$thing} is a float" . PHP_EOL;
    }
}