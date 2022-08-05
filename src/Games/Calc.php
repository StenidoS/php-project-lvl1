<?php

use function cli\line;
use function cli\prompt;
use function Engine\Congrat;
use function Engine\salute;

function greetingCalc()
{
    $name = salute();
    line('What is the result of the expression?');
    for ($i = 0; $i <= 2; $i++) {
        $number = rand(0, 10);
        $number2 = rand(0, 10);
        $index = rand(0, 2);
        $input = array($number + $number2, $number - $number2, $number * $number2);
        $rand_keys = $input[$index];
        $input2 = array("$number + $number2", "$number - $number2", "$number * $number2");
        $rand_keysy = $input2[$index];
        line('Question: ' . $rand_keysy);
        $answer = prompt('Your answer');
        if ($answer != $rand_keys) {
            line("'$answer' is wrong answer ;(. Correct answer was '$rand_keys'.");
            break;
        } else {
            line('Correct!');
        }
    }
    Congrat($i, 3, $name);
}
