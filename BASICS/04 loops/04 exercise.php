<?php

// Exercise 4: Create a non-associative array with integers and print out only integers that divides by 3 without any left.

$listOfNum = [5, 8, 6, 5, 2, 9, 3, 5];

foreach ($listOfNum as $list) {

    if ($list % 2 === 0) {
        echo $list . PHP_EOL;
    }
}