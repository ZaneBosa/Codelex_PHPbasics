<?php

/** Write a program that reads an positive integer
 * and count the number of digits the number has.
 */

$number = (int) readline('Enter the number: ');
$digits = strlen($number);

if ($number >= 0) {
    echo "Yes, number is positive integer and has {$digits} digits" . PHP_EOL;
} else {
    echo 'Your number does not qualify for the test';
}