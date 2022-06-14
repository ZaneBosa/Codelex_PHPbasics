<?php

$move = [ 'rock', 'paper', 'scissor', 'spock', 'lizard'];
$randMove = $move[array_rand($move)];

$player1 = readline('Make your move: ');
$player2 = $randMove;

echo 'Player1 move: ' . $player1 . PHP_EOL;
echo 'Player2 move: ' . $player2 . PHP_EOL;

$win = [
    'rock' => ['scissor', 'lizard'],
    'paper' => ['rock', 'spock'],
    'scissor' => ['paper', 'lizard'],
    'spock' => ['rock', 'scissor'],
    'lizard' => ['paper', 'spock']
];

if ($player1 === $player2) {
    echo 'Tie!' . PHP_EOL;
}

if (in_array($player1,$win[$player1]) === $player2) {
    echo "You win!" . PHP_EOL;
}

if (in_array($player2,$win[$player2]) === $player1) {
    echo "You lose" . PHP_EOL;
}


