<?php


/** Write a program to accept two integers and return true
 * if the either one is 15 or if their sum or difference is 15.
 */

$a = readline('Enter the first integer: ');
$b = readline('Enter the second integer: ');

function perfectChoice(int $a, int $b): bool
{
    return ($a === 15 || $b === 15) || ($a + $b == 15) || (($a - $b == 15) || ($b - $a === 15));
}

  var_dump(perfectChoice($a,$b)) . PHP_EOL;
