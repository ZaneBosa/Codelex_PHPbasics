<?php

/** Write a program which prints “Sunday”, “Monday”, ... “Saturday”
 * if the int variable "dayNumber" is 0, 1, ..., 6, respectively.
 * Otherwise, it shall print "Not a valid day".
 *
 * Use:
 * a "nested-if" statement
 * a "switch-case-default" statement.
 */

$chosenDay = (int) readline('Enter a number of the weekday from 0-6: ');

if ($chosenDay >= 0 && $chosenDay < 8) {
    if ($chosenDay === 0) {
        echo 'It is Sunday!';
        echo PHP_EOL;
    }
    if ($chosenDay === 1) {
        echo 'It is Monday!';
        echo PHP_EOL;
    }
    if ($chosenDay === 2) {
        echo 'It is Tuesday!';
        echo PHP_EOL;
    }
    if ($chosenDay === 3) {
        echo 'It is Wednesday!';
        echo PHP_EOL;
    }
    if ($chosenDay === 4) {
        echo 'It is Thursday!';
        echo PHP_EOL;
    }
    if ($chosenDay === 5) {
        echo 'It is Friday!';
        echo PHP_EOL;
    }
    if ($chosenDay === 6) {
        echo 'It is Saturday!';
        echo PHP_EOL;
    }

} else {
    echo 'Not a valid day' . PHP_EOL;
}

switch ($chosenDay){
    case 0:
        echo 'Sunday';
        break;
    case 1:
        echo 'Monday';
        break;
    case 2:
        echo 'Tuesday';
        break;
    case 3:
        echo 'Wednesday';
        break;
    case 4:
        echo 'Thursday';
        break;
    case 5:
        echo 'Friday';
        break;
    case 6:
        echo 'Saturday';
        break;
    default:
        echo 'Not a valid day';
        break;
}
echo PHP_EOL;