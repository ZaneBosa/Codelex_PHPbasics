<?php

/** By your choice, create condition with 3 checks.
 * For example, if value is greater than X, less than Y and is an even number.
 */

$x = 5;
$y = 10;

if ($x === $y) {
    echo 'Values are even' . PHP_EOL;
} else if ($x > $y) {
    echo 'Value x ir greater than y' . PHP_EOL;
} else {
    echo 'Value x is less than y' . PHP_EOL;
}

