<?php

/** Exercise 7**: Imagine you own a gun store. Only certain guns can be purchased with license types.
 * Create an object (person) that will be the requester to purchase a gun (object)
 * Person object has a name, valid licenses (multiple) & cash. Guns are objects stored within an array.
 * Each gun has license letter, price & name. Using PHP in-built functions determine if the requester
 * (person) can buy a gun from the store.
 */

$requester = [
    'name' => 'Zane',
    'validLicenses' => ['A', 'C'],
    'cash' => 6700
];
$guns = [
    [
        'licenceLetter' => 'A',
        'price' => 3000,
        'name' => 'A1111'
    ],
    [
        'licenceLetter' => 'B',
        'price' => 48000,
        'name' => 'B45'
    ],
    [
        'licenceLetter' => 'C',
        'price' => 1309,
        'name' => 'C72'
    ],
    [
        'licenceLetter' => 'D',
        'price' => 10000,
        'name' => 'D103'
    ],
    [
        'licenceLetter' => 'B',
        'price' => 480,
        'name' => 'A1111'
    ]
];

function findOptions ($guns)
{

    if (in_array($requester[$validLicenses]) === $guns[$licenceLetter])) {
        echo 'You are allowed to buy following guns: ';
        foreach ()
}

}



