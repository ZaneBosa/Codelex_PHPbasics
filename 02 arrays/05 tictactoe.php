<?php

/**
 * Code an interactive, two-player game of Tic-Tac-Toe.
 * You'll use a two-dimensional array of chars.
 *
 * (...a game already in progress)
 *          X   O
 *          O X X
 *            X O
 *
 * 'O', choose your location (row, column): 0 1
 *          X O O
 *          O X X
 *            X O
 *
 * 'X', choose your location (row, column): 2 0
 *          X O O
 *          O X X
 *          X X O
 * The game is a tie.
 */

$board = [
    0 => [
        0=> null,
        1=> null,
        2=> null,
    ],
    1 => [
        0=> null,
        1=> null,
        2=> null,
    ],
    2 => [
        0=> null,
        1=> null,
        2=> null,
    ],

];

function displayBoard(array $board): void
{
    echo "  {$board[0][0]}  |  {$board[0][1]}  | {$board[0][2]}   \n";
    echo "---+---+---\n";
    echo "  {$board[1][0]}  |  {$board[1][1]}  | {$board[1][2]}   \n";
    echo "---+---+---\n";
    echo "  {$board[2][0]}  |  {$board[2][1]}  | {$board[2][2]}   \n";
}

function winner(string $player, array $board): bool
{
    if ($board[0][0] === $player && $board[0][1] === $player && $board[0][2] === $player) {
        return true;
    }
    if ($board[1][0] === $player && $board[1][1] === $player && $board[1][2] === $player) {
        return true;
    }
    if ($board[2][0] === $player && $board[2][1] === $player && $board[2][2] === $player) {
        return true;
    }
    if ($board[0][0] === $player && $board[1][0] === $player && $board[2][0] === $player) {
        return true;
    }
    if ($board[0][1] === $player && $board[1][1] === $player && $board[2][1] === $player) {
        return true;
    }
    if ($board[0][0] === $player && $board[1][1] === $player && $board[2][2] === $player) {
        return true;
    }
    if ($board[0][2] === $player && $board[1][1] === $player && $board[2][0] === $player) {
        return true;
    }
    return false;
}

$player1 = 'X';
$player2 = 'O';

$turns = 0;
$currentPlayer = $player1;


while ($turns < 10)
{

    $input = readline('Your move: ');
    [$x, $y] = explode(' ', $input);

    $board[$x][$y] = $currentPlayer;

    displayBoard($board);

    // function to check if the game is tie

    if (winner($currentPlayer, $board)) {
        echo "Player $currentPlayer has won!" . PHP_EOL;
        break;
    }
    $currentPlayer = $currentPlayer === $player1 ? $player2 : $player1;

    $turns++;
}




