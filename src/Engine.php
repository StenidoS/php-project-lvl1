<?php

namespace Engine;

use PHPUnit\TextUI\XmlConfiguration\Constant;

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
            line("Your answer: %s!\nCorrect!", $userAnswer);
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.\n" .
                "Let's try again, %s!", $userAnswer, $correctAnswer, $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
