<?php

/** Exercise 7**: Imagine you own a gun store. Only certain guns can be purchased with license types.
 * Create an object (person) that will be the requester to purchase a gun (object)
 * Person object has a name, valid licenses (multiple) & cash. Guns are objects stored within an array.
 * Each gun has license letter, price & name. Using PHP in-built functions determine if the requester
 * (person) can buy a gun from the store.
 */

$requester = new stdClass();
$requester->name = 'Zane';
$requester->license = ['A','C'];
$requester->cash = 3950;

$gun1 = new stdClass();
$gun1->license = 'B';
$gun1->price = 2500;
$gun1->name = 'A1001';

$gun2 = new stdClass();
$gun2->license = 'C';
$gun2->price = 1390;
$gun2->name = 'H78001';

$gun3 = new stdClass();
$gun3->license = 'A';
$gun3->price = 2900;
$gun3->name = 'D1661';

$gun3 = new stdClass();
$gun3->license = 'D';
$gun3->price = 6300;
$gun3->name = 'X2645';

$gun4 = new stdClass();
$gun4->license = 'C';
$gun4->price = 3600;
$gun4->name = 'C67001';

$guns = [$gun1, $gun2, $gun3, $gun4];

foreach ($guns as $key =>$gun) {
    echo "{$key}: {$gun->name}, {$gun->price}EUR, {$gun->license} " . PHP_EOL;
}
$decision = readline('Enter the name of the gun: ') . PHP_EOL;
$request = $guns[$decision];

if (in_array($request->license, $requester->license) && ($requester->cash >= $request->price)) {
    echo 'Sorry, you cannot buy this gun!';
    echo PHP_EOL;
    exit;
} else {
    echo 'Congratulation, you are allowed to buy this gun!';
    echo PHP_EOL;
}