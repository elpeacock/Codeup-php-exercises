<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
    if (is_array($thing)) {
        echo "type is array" . PHP_EOL;
    } else if (is_bool($thing)) {
        echo "type is boolean" . PHP_EOL;
    } else if (is_integer($thing)) {
        echo "type is integer" . PHP_EOL;
    } else if (is_float($thing)) {
        echo "type is float" . PHP_EOL;
    } else if (is_null($thing)) {
        echo "type is null" . PHP_EOL;
    } else if (is_string($thing)) {
        echo "type is string" . PHP_EOL;
    }
};

foreach ($things as $thing) {
    if (is_scalar($thing)) {
        echo "{$thing} is scalar, type is " . gettype($thing) . PHP_EOL;
    }
};

foreach ($things as $thing) {
    $message = "the type is " . gettype($thing) . ". The value is: ";
    if (is_array($thing)) {
        foreach ($thing as $piece) {
            $message .= "{$piece}" . " ";
        }
    } else {
        $message .= "{$thing}";
    }
    $message .= PHP_EOL;
    echo $message;
}
