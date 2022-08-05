<?php

namespace Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function playGame(string $task, array $gameData): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("{$task}");
    foreach ($gameData as $round) {
        $question = $round['question'];
        $correctAnswer = $round['correctAnswer'];

        $userAnswer = prompt("Question: {$question}");

        if ($userAnswer === $correctAnswer) {
            line("Your answer: %s\nCorrect!", $userAnswer);
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.\n" .
                "Let's try again, %s!", $userAnswer, $correctAnswer, $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
function salute()
{
    line('Welcome to the Brain Games!');
    $a = prompt('May I have your name?');
    line("Hello, %s!", $a);
    return $a;
}
function findGcd(int $number1, int $number2): int
{
    $result = 1;
    for ($index = 1; $index < ($number1 + 1); $index++) {
        if ($number1 % $index === 0 && $number2 % $index === 0) {
            $result = $index;
        }
    }
    return $result;
}


function Congrat($a, $b, $name)
{
    if ($a == $b) {
        line("Congratulations, %s!", $name);
        line('Next Game?');
    } else {
        line("Let's try again, %s!)", $name);
    }
}
function IsPrime($n)
{
    for ($x = 2; $x < $n; $x++) {
        if ($n % $x == 0) {
            return 0;
        }
    }
    return 1;
}
