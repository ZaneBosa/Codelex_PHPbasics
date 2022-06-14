<?php


/** Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
 * Take note that it is the same as factorial of N.
 */


function Factorial(int $number)
{
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++)
    {
        $factorial = $factorial * $i;
    }
    return $factorial;
}


echo Factorial(10) . PHP_EOL;