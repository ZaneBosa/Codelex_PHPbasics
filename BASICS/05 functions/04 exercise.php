<?php

/** Exercise 4: Create a array of objects that uses the function of exercise 3 but in loop printing
 * out if the person has reached age of 18.
 */

$persons = [
    [
        "name" => "Anna",
        "surname" => "Sur",
        "age" => 31
    ],
    [
        "name" => "Bob",
        "surname" => "Lame",
        "age" => 18
    ],
    [
        "name" => "Bianca",
        "surname" => "Blanco",
        "age" => 16
    ]

];


function legalNew(int $b): bool
{
    return $b >= 18;
}
foreach ($persons as $person) {
    if (legalNew($person["age"])) {
        echo $person["name"] . " has reached age of 18" . PHP_EOL;
    } else {
        echo $person["name"] . " is under 18 years old" . PHP_EOL;
    }
}
