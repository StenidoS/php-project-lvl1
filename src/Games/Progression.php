<?php

namespace Games\Progression;

use function Engine\playGame;

const DESCRIPTION = 'What number is missing in the progression?';
use const Engine\ROUNDS_COUNT;

function generateProgression(): array
{
    $startProgression = random_int(1, 50);
    $stepProgression = random_int(1, 10);
    $maxElementsCount =  10;
    $progression = [];
    for ($x = $startProgression; count($progression) < $maxElementsCount; $x++) {
        $x += $stepProgression;
        $progression[] = $x;
    }
    return $progression;
}

function playProgression(): void
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $progression = generateProgression();
        $randomNumberQuestion = random_int(0, 9);
        $correctAnswer = $progression[$randomNumberQuestion];
        $progression[$randomNumberQuestion] = '..';

        $question = implode(' ', $progression);
        $gameData[] = ['question' => $question, 'correctAnswer' => (string)$correctAnswer];
    }
    playGame(DESCRIPTION, $gameData);
}
