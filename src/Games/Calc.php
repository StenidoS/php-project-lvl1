<?php

namespace Games\Calc;

use function Engine\playGame;

const DESCRIPTION = "What is the result of the expression?";
use const Engine\ROUNDS_COUNT;

function playCalculate(): void
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNumber1 = random_int(0, 10);
        $randomNumber2 = random_int(0, 10);
        $input = [
            '*' => $randomNumber1 * $randomNumber2,
            '+' => $randomNumber1 + $randomNumber2,
            '-' => $randomNumber1 - $randomNumber2
        ];
        $randomOperator = array_rand($input);
        $correctAnswer = $input[$randomOperator];
        $question = "{$randomNumber1} {$randomOperator} {$randomNumber2}";
        $gameData[] = ['question' => $question, 'correctAnswer' => (string)$correctAnswer];
    }
    playGame(DESCRIPTION, $gameData);
}
