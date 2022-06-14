<?php

/** Exercise 6
Create an non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
 * Create a for loop that iterates non-associative array using php in-built function
 * that determines count of elements in the array. Create a function that doubles the
 * integer number. Within the loop using php in-built function print out the double of
 * the number value (using your custom function).
 */

$list = [6, 84, 12, 13.11, 'Zane'];

function doubles(int $number): int
{
    return $number * 2;
}

for($i = 0; $i ,count($list); $i++)
{
    if (is_integer($list[$i])) {
        echo doubles(($list[$i])) . PHP_EOL;
    }
}
