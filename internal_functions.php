<?php

// TODO: Create your inspect() function here
function inspect ($arg) {
    $msg = '';
    $msg .= "   The variable is a(n): " . gettype($arg) . ". ";
    switch (gettype($arg)) {
        case 'NULL':
            $msg .= "The value is NULL" . PHP_EOL;
            break;
        case 'array':
            if (empty($arg)) {
                $msg .= "The value is an empty array" . PHP_EOL; 
            } else {
                $msg .= "The value is an array" . PHP_EOL;
            }
            break;
        case 'boolean':
            if ((boolval($arg)) == 1) {
                $msg .= "The value is: true" . PHP_EOL;
            } else {
                $msg .= "The value is: false" . PHP_EOL;
            }
            break;
        case 'string':
            if (empty($arg)) {
                $msg .= "The value is an empty string" . PHP_EOL;
            } else {
                $msg .= "The value is {$arg}" . PHP_EOL;
            }
            break;
        case 'integer':
            $msg .= "The value is {$arg}" . PHP_EOL;
            break;
        case 'double':
            $msg .= "The value is {$arg}" . PHP_EOL;
            break;

    } 
echo $msg;
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
inspect($num1);

echo 'Inspecting $num2:' . PHP_EOL;
inspect($num2);

echo 'Inspecting $num3:' . PHP_EOL;
inspect($num3);

echo 'Inspecting $num4:' . PHP_EOL;
inspect($num4);

echo 'Inspecting $null:' . PHP_EOL;
inspect($null);

echo 'Inspecting $bool1:' . PHP_EOL;
inspect($bool1);

echo 'Inspecting $bool2:' . PHP_EOL;
inspect($bool2);

echo 'Inspecting $string1:' . PHP_EOL;
inspect($string1);

echo 'Inspecting $string2:' . PHP_EOL;
inspect($string2);

echo 'Inspecting $array1:' . PHP_EOL;
inspect($array1);

echo 'Inspecting $array2:' . PHP_EOL;
inspect($array2);
