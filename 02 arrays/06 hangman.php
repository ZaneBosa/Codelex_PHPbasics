<?php

/**
* Write a program to play a word-guessing game like Hangman.
*
* It must randomly choose a word from a list of words.
* It must stop when all the letters are guessed.
* It must give them limited tries and stop after they run out.
* It must display letters they have already guessed
 * (either only the incorrect guesses or all guesses).
 *
 * -=-=-=-=-=-=-=-=-=-=-=-=-=-
 * Word:	_ _ _ _ _ _ _ _ _
 * Misses:
 * Guess:	e
 * -=-=-=-=-=-=-=-=-=-=-=-=-=-
 * Word:	_ e _ _ _ _ _ _ _
 * Misses:
 * Guess:	i
 * -=-=-=-=-=-=-=-=-=-=-=-=-=-
 * Word:	_ e _ i _ _ _ _ _
 * Misses:
 * Guess:	a
 * -=-=-=-=-=-=-=-=-=-=-=-=-=-
 * Word:	_ e _ i a _ _ a _
 * Misses:
 * Guess:	r
 * -=-=-=-=-=-=-=-=-=-=-=-=-=-
 * Word:	_ e _ i a _ _ a _
 * Misses:	r
 * Guess:	s
 * -=-=-=-=-=-=-=-=-=-=-=-=-=-
 * Word:	_ e _ i a _ _ a _
 * Misses:	rs
 * Guess:	t
 * -=-=-=-=-=-=-=-=-=-=-=-=-=-
 * Word:	_ e _ i a t _ a _
 * Misses:	rs
 * Guess:	n
 * -=-=-=-=-=-=-=-=-=-=-=-=-=-
 * Word:	_ e _ i a t _ a n
 * Misses:	rs
 * Guess:	o
 * -=-=-=-=-=-=-=-=-=-=-=-=-=-
 * Word:	_ e _ i a t _ a n
 * Misses:	rso
 * Guess:	l
 * -=-=-=-=-=-=-=-=-=-=-=-=-=-
 * Word:	l e _ i a t _ a n
 * Misses:	rso
 * Guess:	v
 * -=-=-=-=-=-=-=-=-=-=-=-=-=-
 * Word:	l e v i a t _ a n
 * Misses:	rso
 * Guess:	h
 * -=-=-=-=-=-=-=-=-=-=-=-=-=-
 * Word:	l e v i a t h a n
 * Misses:	rso
 * YOU GOT IT!
 * Play "again" or "quit"? quit
 */


$secretWordList = ['glasses', 'fridge', 'elephant', 'grandfather'];
$secretWord = ($secretWordList[array_rand($secretWordList)]);
$hiddenLetters = str_split($secretWord);

echo 'Word: ';
for ($i = 0; $i < count($hiddenLetters); $i++) {
    echo $hiddenLetters[$i] = '_';
}
echo PHP_EOL;


$maxGuess = 10;
$guess[] = [];
$misses[] = [];
$leftToGuess = $maxGuess - (count($guess) + count($misses));


while (true) {
    echo '-=-=-=-=-=-=-=-=-=-=-=-=-=-' . PHP_EOL;
    echo 'Word: ' . implode(' ', $hiddenLetters) . PHP_EOL;
    echo 'Misses: ' . implode(' ', $misses) . PHP_EOL;
    $input = readline('Your guess: ');
    echo PHP_EOL;

    foreach ($hiddenLetters as $letter) {
        if ($input === $letter) {
            $hiddenLetters[$i] = $input;
            if (count(array_diff($hiddenLetters, $input)) == 0) {
                echo 'Word: ' . implode(' ', $hiddenLetters);
                echo 'YOU GOT IT!' . PHP_EOL;
                echo readline('Play "again" or "quit"?');
            }
        }
    }

    if (in_array($input, $hiddenLetters) != 1) {
        $misses[] = $input;
        echo 'Word: ' . implode(' ', $misses) . PHP_EOL;
        if (count($misses) === $maxGuess) {
            echo "You lose!";
            exit();
        }
    }
}
