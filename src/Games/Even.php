<?php

namespace Games\Even;

use function Engine\playGame;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';
use const Engine\ROUNDS_COUNT;

function isEven(int $number): bool
{
    return ($number % 2) === 0;
}

function playEven(): void
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNumber = random_int(1, 100);
        $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';
        $gameData[] = ['question' => $randomNumber, 'correctAnswer' => $correctAnswer];
    }

    playGame(DESCRIPTION, $gameData);
}
