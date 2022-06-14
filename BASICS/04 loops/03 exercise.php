<?php

/** Exercise 3: Given variable $x = 1 while $x is lower than 10, print out text "codelex".
 * (Note: To avoid infinite looping, after each print increase the variable $x by 1)
 */

$text = 'codelex';
$x = 1;

while ($x < 10) {
    echo $text . PHP_EOL;
    $x++;
}
