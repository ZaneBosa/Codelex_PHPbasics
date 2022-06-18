<?php

/** Write a console program in a class named NumberSquare
 * that prompts the user for two integers, a min and a max,
 * and prints the numbers in the range from min to max inclusive in a square pattern.
 * Each line of the square consists of a wrapping sequence of integers
 * increasing from min and max. The first line begins with min,
 * the second line begins with min + 1, and so on. When the sequence
 * in any line reaches max, it wraps around back to min.
 * You may assume that min is less than or equal to max.
 * Here is an example dialogue:
 *
 * Min? 1
 * Max? 5
 * 12345
 * 23451
 * 34512
 * 45123
 * 51234
 */

$minNum = (int) readline('Choose the min number: ') . PHP_EOL;
$maxNum = (int) readline( 'Choose the max number: ') . PHP_EOL;

$sequence = '';

for ($i = $minNum; $i <= $maxNum; $i++) {
    $sequence = $sequence . $i;
    echo $sequence;
}

$numberSquare = new stdClass();
$sequence = $numberSquare->$sequence;
$loops = 1;
$loop = strlen($sequence) - 1;

echo $sequence;
echo PHP_EOL;

$movingIntegers = substr($sequence, 1, $maxNum -1) . $sequence[0];

while($loops <= $loop) {
    $sequence = $numberSquare->$movingIntegers;
    $loops++;
    echo $sequence. PHP_EOL;
}
