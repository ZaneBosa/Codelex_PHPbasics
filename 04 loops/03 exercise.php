<?php

/** Write a program that asks the user to enter two words.
 * The program then prints out both words on one line.
 * The words will be separated by enough dots so that the total line length is 30:
 *
 *      Enter first word:
 *      turtle
 *      Enter second word
 *      153
 *      turtle....................153
 *
 * This could be used as part of an index for a book.
 * To print out the dots, use echo "." inside a loop body.
 */

$input1 = readline('Enter first word: ');
$input2 = readline('Enter second word: ');

$inputCount = strlen($input1) + strlen($input2);
$dotCount = 30 - $inputCount;
$dotCountChar = strlen($dotCount);
$dot = '.';

if ($inputCount > 30) {
    echo 'Too long input' . PHP_EOL;
}

for ($i = 0; $i < $dotCount; $i++) {
    $dotCount .= '.';
}

echo $input1 . substr($dotCount, $dotCountChar) . $input2 . PHP_EOL;
