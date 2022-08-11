<?php

namespace Games\Prime;

use function Engine\playGame;

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
    $task = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNumber = random_int(2, 50);
        $correctAnswer = isPrime($randomNumber) ? 'yes' : 'no';

        $question = (string)$randomNumber;
        $gameData[] = ['question' => $question, 'correctAnswer' => $correctAnswer];
    }

    playGame($task, $gameData);
}
