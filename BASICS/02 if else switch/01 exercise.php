<?php

// Given variables (int) 10, string "10" determine if they both are the same.

$value1 = 10;
$value2 = '10';

var_dump ($value1 === $value2);
if ($value1 === $value2) {
    echo 'Yes, both values are identical' . PHP_EOL;
} else {
    echo 'No, these values differ' . PHP_EOL;
}