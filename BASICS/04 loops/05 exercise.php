<?php


/** Exercise 5: Create an associative array with objects of multiple persons.
 *Each person should have a name, surname, age and birthday.
 * Using loop (by your choice) print out every persons personal data.
 */

$persons = [
    [
        "name" => "Anna",
        "surname" => "Sur",
        "age" => 31,
        "birthday" => "28th June"
    ],
    [
        "name" => "Bob",
        "surname" => "Lame",
        "age" => 18,
        "birthday" => "1st August"
    ],
    [
        "name" => "Bianca",
        "surname" => "Blanco",
        "age" => 16,
        "birthday" => "28th October"
    ]

];

foreach ($persons as $person) {
    echo $person["name"] . " " . $person["surname"] . " is " . $person["age"] .
        "years old, having birthday on " . $person["birthday"] . PHP_EOL;
}