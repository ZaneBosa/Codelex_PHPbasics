<?php

/** Write a console program in a class named RollTwoDice
 * that prompts the user for a desired sum,
 * then repeatedly rolls two six-sided dice (using a Random object
 * to generate random numbers from 1-6) until the sum of
 * the two dice values is the desired sum.
 * Here is the expected dialogue with the user:
 * Desired sum: 9
 * 4 and 3 = 7
 * 3 and 5 = 8
 * 5 and 6 = 11
 * 5 and 6 = 11
 * 1 and 5 = 6
 * 6 and 3 = 9
 */

$desiredSum = (int) readline('Choose a number (2-12): ');
$dice1 = rand(1,6);
$dice2 = rand(1,6);

$diceSum = $dice1 + $dice2;

while ($desiredSum !== $diceSum) {
    $dice1 = rand(1,6);
    $dice2 = rand(1,6);
    $diceSum = $dice1 + $dice2;
    echo "$dice1 + $dice2 = $diceSum";
    echo PHP_EOL;
}

echo 'Congratulations! You got got your desired sum!';
echo PHP_EOL;
