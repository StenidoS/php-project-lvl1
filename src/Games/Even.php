<?php

namespace Games\Even;

use function Engine\playGame;

use const Engine\ROUNDS_COUNT;

function isEven(int $number): bool
{
    return ($number % 2) === 0;
}

function playEven(): void
{
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNumber = random_int(1, 100);
        $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';
        $gameData[] = ['question' => $randomNumber, 'correctAnswer' => $correctAnswer];
    }

    playGame($task, $gameData);
}
