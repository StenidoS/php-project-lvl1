<?php

use function cli\line;
use function cli\prompt;
use function Engine\congrat;
use function Engine\salute;

function greetingEven()
{
    $name = salute();
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i <= 2; $i++) {
        $number = rand(0, 100);
        line("Question: %s", $number);
        if (($number % 2) == 0) {
                $number = 'yes';
        } else {
                $number = 'no';
        }
        $answer = prompt('Your answer');
        if (($answer == 'yes' || $answer == 'no') && $number == $answer) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$number'.)");
            break;
        }
    }
    congrat($i, 3, $name);
}
