<?php

/** Exercise 1: Create a function that accepts any string and returns the same value with added "codelex"
* by the end of it. Print this value out.
 */

function addCodelex(string $word): string{
    return "$word codelex;";
}

echo addCodelex('Hello') . PHP_EOL;

