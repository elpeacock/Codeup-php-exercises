<?php

for ($i = 1; $i <= 100; $i += 1) {
    if ($i % 2 != 0) {
        continue;
    }
    echo $i . PHP_EOL;
};

for ($i = 1; $i <= 100; $i += 1) {
    if ($i > 10) {
        break;
    }
    echo $i . PHP_EOL;
};