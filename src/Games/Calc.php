<?php

namespace Games\Calc;

use function Engine\playGame;

use const Engine\ROUNDS_COUNT;

function calculate(string $operator, int $number1, int $number2): int
{
    switch ($operator) {
        case '+':
            return $number1 + $number2;
        case '-':
            return $number1 - $number2;
        case '*':
            return $number1 * $number2;
        default:
            throw new \Exception('Error');
    }
}

function playCalculate(): void
{
    $task = 'What is the result of the expression?';
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNumber1 = random_int(0, 10);
        $randomNumber2 = random_int(0, 10);
        $operator = ['*', '+', '-'];
        $randomOperator = $operator[random_int(0, 2)];
        $correctAnswer = calculate($randomOperator, $randomNumber1, $randomNumber2);
        $question = "{$randomNumber1 } {$randomOperator } {$randomNumber2}";
        $gameData[] = ['question' => $question, 'correctAnswer' => (string)$correctAnswer];
    }

    playGame($task, $gameData);
}
