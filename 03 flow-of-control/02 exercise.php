<?php

/**
 * echo "Enter the number.";
 * //todo print if number is positive or negative
 */

$number = (int) readline('Enter the number: ');

function checkNumber ($number) {
    if ($number >= 0) {
        echo 'Positive number';
        echo PHP_EOL;
    }
    if ($number < 0) {
        echo 'Negative number';
        echo PHP_EOL;
    }
}
echo checkNumber($number) . PHP_EOL;