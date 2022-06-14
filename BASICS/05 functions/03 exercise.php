<?php

/** Exercise 3: Create a person object with name, surname and age.
 * Create a function that will determine if the person has reached 18 years of age.
 * Print out if the person has reached age of 18 or not.
 */

$person = [
    "name" => "Zane",
    "surname" => "Boša",
    "age" => 31
];

function legal(int $a): bool
{
    return $a >= 18;
}
if (legal($person["age"]))
{
    echo "Person is 18 years old" . PHP_EOL;
} else {
    echo "Parson is under 18 years old" . PHP_EOL;
}

