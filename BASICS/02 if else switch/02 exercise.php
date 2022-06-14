<?php

// Exercise 2: Given variable (int) 50, determine if it is in the range of 1 and 100.

$value = 50;
$min = 1;
$max = 100;

if (($min <= $value) && ($value <= $max)) {
    echo 'Yes, given value is in the range' . PHP_EOL;
} else {
    echo 'No, given value is not in the range' . PHP_EOL;
}