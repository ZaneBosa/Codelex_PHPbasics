<?php

/** Exercise 5: Create a 2D associative array in 2nd dimension with fruits and their weight.
 * Create a function that determines if fruit has weight over 10kg.
 * Create a secondary array with shipping costs per weight. Meaning that you can say that
 * over 10 kg shipping costs are 2 euros, otherwise its 1 euro. Using foreach loop print out the
 * values of the fruits and how much it would cost to ship this product.
 */

$fruits = [
    [
        'name' => 'ābols',
        'weight' => 10
    ],
    [
        'name' => 'bumbieris',
        'weight' => 20
    ]
];

function shippingCost(int $weight): int
{
    if ($weight >10 && $weight <50) {
        return 2;
    }
    if ($weight >= 50 && $weight <= 100) {
        return 3;
    }

    return 1;
}
foreach ($fruits as $fruit)
{
    echo $fruit['name'] . ' ' . $fruit['weight'] ;

    if ($fruit[' weight'] > 10) {
        echo ' Shipping: 2 euros';
    } else {
        echo ' Shipping: 1 euros';
        echo PHP_EOL;
    }
}

