<?php

/** Exercise 6: Create a variable $plateNumber that stores your car plate number.
 * Create a switch statement that prints out that it is your car in case of your number.
 */

$plateNumber = 3293;

switch ($plateNumber) {
    case 3293:
        echo 'My car number is 3293' . PHP_EOL;
        break;
    case 2895:
        echo 'My car number is 2895' . PHP_EOL;
        break;
    case 125:
        echo 'My car number is 125' . PHP_EOL;
        break;
    default:
        echo 'My car number is neither 3292, 2895, nor 125';
}