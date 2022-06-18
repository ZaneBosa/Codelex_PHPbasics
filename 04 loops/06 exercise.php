<?php
/**
 * Write a console program in a class named AsciiFigure
 * that draws a figure of the following form, using for loops.
 *
 *       ////////////////\\\\\\\\\\\\\\\\
 *       ////////////********\\\\\\\\\\\\
 *       ////////****************\\\\\\\\
 *       ////************************\\\\
 *       ********************************
 * Then, modify your program using an integer class constant
 * so that it can create a similar figure of any size.
 * For instance, the diagram above has a size of 5.
 * For example, the figure below has a size of 3:
 *          ////////\\\\\\\\
 *          ////********\\\\
 *          ****************
 * And the figure below has a size of 7:
 *
 *       ////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\
 *       ////////////////////********\\\\\\\\\\\\\\\\\\\\
 *       ////////////////****************\\\\\\\\\\\\\\\\
 *       ////////////************************\\\\\\\\\\\\
 *       ////////********************************\\\\\\\\
 *       ////****************************************\\\\
 *       ************************************************
 */


$left1 = '/';
$middle1 = '*';
$right1 = '\\';

$leftCount1 = 8;
$rightCount1 = 8;
$middleCount1 = 0;

for ($i = 0; $i < 5; $i++) {
    echo str_repeat($left1, $leftCount1);
    echo str_repeat($middle1, $middleCount1);
    echo str_repeat($right1, $rightCount1);
    echo PHP_EOL;

    $leftCount1 -= 3;
    $middleCount1 += 4;
    $rightCount1 -=3;
}

$left2 = '/';
$middle2 = '*';
$right2 = '\\';

$leftCount2 = 24;
$rightCount2 = 24;
$middleCount2 = 0;

for ($i = 0; $i < 7; $i++) {
    echo str_repeat($left2, $leftCount2);
    echo str_repeat($middle2, $middleCount2);
    echo str_repeat($right2, $rightCount2);
    echo PHP_EOL;

    $leftCount2 -= 3;
    $middleCount2 += 4;
    $rightCount2 -= 3;
}

$left3 = '/';
$middle3 = '*';
$right3 = '\\';

$leftCount3 = 8;
$rightCount3 = 8;
$middleCount3 = 0;

for ($i = 0; $i < 3; $i++) {
    echo str_repeat($left3, $leftCount3);
    echo str_repeat($middle3, $middleCount3);
    echo str_repeat($right3, $rightCount3);
    echo PHP_EOL;

    $leftCount3 -= 3;
    $middleCount3 += 4;
    $rightCount3 -= 3;
}