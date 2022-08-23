<?php

namespace Games\Calc;

use function Engine\playGame;

const DESCRIPTION = "What is the result of the expression?";
use const Engine\ROUNDS_COUNT;

function Calculate(int $randomNumber1, int $randomNumber2, string $randomOperator)
{
    switch ($randomOperator) {
        case "+":
            return $randomNumber1 + $randomNumber2;
        case "-":
            return $randomNumber1 - $randomNumber2;
        case "*":
            return $randomNumber1 * $randomNumber2;
        default:
            return "Incorrect sign: '{$randomOperator}'";
    }
}

function playCalculate(): void
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNumber1 = random_int(0, 10);
        $randomNumber2 = random_int(0, 10);
        $input = ['+', '-', '*'];
        $randomOperator = $input[array_rand($input)];
        $correctAnswer = Calculate($randomNumber1, $randomNumber2, $randomOperator);
        $question = "{$randomNumber1} {$randomOperator} {$randomNumber2}";
        $gameData[] = ['question' => $question, 'correctAnswer' => (string)$correctAnswer];
    }
    playGame(DESCRIPTION, $gameData);
}
