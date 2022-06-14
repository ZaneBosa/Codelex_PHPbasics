<?php

/** Given variables (string) "hello" create a condition that
 * if the given value is "hello" then output "world".
 */
$value = 'hello';
$valueTest = 'hello';

if ($value === $valueTest) {
    echo 'world' . PHP_EOL;
} else {
    echo $value . PHP_EOL;
}

