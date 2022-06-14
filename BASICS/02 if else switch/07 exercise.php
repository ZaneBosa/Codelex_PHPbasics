<?php


/** Exercise 7: Create a variable $number with integer by your choice. Create
 * a switch statement that prints out text "low" if the value is under 50, "medium"
 * if the case is higher than 50 but lower than 100, "high" if the value is >100.
 */
$number = 72;
$min = 50;
$max = 100;

switch ($number) {
    case $number < $min:
        echo 'low' . PHP_EOL;
        break;
    case $min <= $number && $number <= $max:
        echo 'medium' . PHP_EOL;
        break;
    default:
        echo 'high' . PHP_EOL;
        break;
}