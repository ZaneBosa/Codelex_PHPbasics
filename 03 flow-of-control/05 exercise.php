<?php
/** On your phone keypad, the alphabets are mapped to digits as follows:
 * ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
 * Write a program called PhoneKeyPad, which prompts user for a String (case insensitive),
 * and converts to a sequence of keypad digits.
 *
 * Use:
 * a "nested-if" statement
 * a "switch-case-default" statement
 * Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,
 */


$text = strtoupper(readline('Enter the word you would like to see in PhoneKeyPad code: '));
$textArray = str_split($text);
var_dump($textArray);

for($i = 0; $i < count($textArray); $i++) {
    switch ($textArray[$i]) {
        case 'A':
            echo 2;
            break;
        case 'B':
            echo 22;
            break;
        case 'C':
            echo 222;
            break;
        case 'D':
            echo 3;
            break;
        case 'E':
            echo 33;
            break;
        case 'F':
            echo 333;
            break;
        case 'G':
            echo 4;
            break;
        case 'H':
            echo 44;
            break;
        case 'I':
            echo 444;
            break;
        case 'J':
            echo 5;
            break;
        case 'K':
            echo 55;
            break;
        case 'L':
            echo 555;
            break;
        case 'M':
            echo 6;
            break;
        case 'N':
            echo 66;
            break;
        case 'O':
            echo 666;
            break;
        case 'P':
            echo 7;
            break;
        case 'Q':
            echo 77;
            break;
        case 'R':
            echo 777;
            break;
        case 'S':
            echo 7777;
            break;
        case 'T':
            echo 8;
            break;
        case 'U':
            echo 88;
            break;
        case 'V':
            echo 888;
            break;
        case 'W':
            echo 9;
            break;
        case 'X':
            echo 99;
            break;
        case 'Y':
            echo 999;
            break;
        case 'Z':
            echo 9999;
            break;
        case ' ':
            echo ' ';
            break;
        default:
            echo 'Use Latin alphabet!';
            break;
    }
}
echo PHP_EOL;