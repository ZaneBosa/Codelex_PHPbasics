<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo $check = readline("Enter the value to search for: ") . PHP_EOL;

//todo check if an array contains a value user entered
if (in_array((int) $check, $numbers, true)) {
    echo "Yes, this value does exist" . PHP_EOL;
} else {
    echo "No, this value does not exist" . PHP_EOL;
}
