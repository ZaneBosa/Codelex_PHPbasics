<?php

/** Write a program called CheckOddEven which prints "Odd Number"
 * if the int variable “number” is odd, or “Even Number” otherwise.
 * The program shall always print “bye!” before exiting.
 */


function checkOddEven (int $number): bool
{
    $number = readline("Enter the number: ");

    if ($number % 2 !== 0) {
        echo "Odd Number" . PHP_EOL;
    } else {
        echo "Even Number" . PHP_EOL;
    }

    exit("bye!") . PHP_EOL;
}


var_dump (checkOddEven(15));
var_dump (checkOddEven(8));
var_dump (checkOddEven('20'));
var_dump (checkOddEven( 2.123));