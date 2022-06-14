<?php


/** Modify the example program to compute the position of an object after falling for 10 seconds,
 * outputting the position in meters. The formula in Math notation is:
 * Gravity formula [link: https://github.com/codelex-io/php-syllabus/blob/main/php-basics/arithmetic-operations/gravity-formula.png]
 * Note: The correct value is -490.5m.
 */



function gravity(float $acceleration, float $time, float $velocity, float $position) : float
{
    return (0.5 * ($acceleration * pow($time, 2)) + ($velocity * $time) + $position);
}

echo gravity(-9.81, 10, 0, 0) . "m" . PHP_EOL;