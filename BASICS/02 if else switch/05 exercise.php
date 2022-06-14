<?php

/** Exercise 5: Given variable (int) 50 create a condition that prints
 * out "correct" if the variable is inside the range. Range should be stored
 * within the 2 separated variables $y and $z.
 */

$value = 50;
$y2 = 30;
$z2 = 60;

if($value >= $y2 && $value <= $z2) {
    echo 'correct' . PHP_EOL;
} else {
    echo 'incorrect' . PHP_EOL;
}
