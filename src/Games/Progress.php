<?php

use function cli\line;
use function cli\prompt;
use function Engine\Congrat;
use function Engine\salute;

function PlayProgress()
{
    $name = salute();
    line('What number is missing in the progression?');
    for ($i = 0; $i <= 2; $i++) {
        $val = '';
        $a = rand(1, 3);
        $interval = rand(2, 5);
        $b = rand(5, 10);
        $propusk = rand(0, $b - 1);
        for ($n = 0; $n <= $b - 1; $n++) {
            if ($n == $propusk) {
                $trueAnswer = $a + $interval * $n;
                $val .= '.. ';
            } else {
                $val .= $a + $interval * $n . ' ';
            }
        }
        line('Question: ' . $val);
        $answer = prompt('Your answer');
        if ($answer != $trueAnswer) {
            line("'$answer' is wrong answer ;(. Correct answer was '$trueAnswer'.");
            break;
        } else {
            line('Correct!');
        }
    }
    Congrat($i, 3, $name);
}
