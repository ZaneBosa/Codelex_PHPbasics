<?php

/**
 * echo "Input the 1st number: ";
 * echo "Input the 2nd number: ";
 * echo "Input the 3rd number: ";
 * //todo print the largest number
 */

$number1 = (int) readline( 'Input the 1st number: ') . PHP_EOL;
$number2 = (int) readline( 'Input the 2nd number: ') . PHP_EOL;
$number3 = (int) readline( 'Input the 3rd number: ') . PHP_EOL;

echo max($number1, $number2, $number3) . PHP_EOL;