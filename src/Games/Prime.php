<?php

namespace Games\Prime;

use function Engine\playGame;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
use const Engine\ROUNDS_COUNT;

function isPrime(int $number): bool
{
    $result = true;
    for ($index = 2; $index < $number; $index++) {
        if ($number % $index === 0) {
            $result = false;
            break;
        }
    }
    return $result;
}

function playPrime(): void
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNumber = random_int(2, 50);
        $correctAnswer = isPrime($randomNumber) ? 'yes' : 'no';

        $question = (string)$randomNumber;
        $gameData[] = ['question' => $question, 'correctAnswer' => $correctAnswer];
    }

    playGame(DESCRIPTION, $gameData);
}
