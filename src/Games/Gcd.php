<?php

use function cli\line;
use function cli\prompt;
use function Engine\nod;
use function Engine\congrat;
use function Engine\salute;

function gcd()
{
    //приветствие
    $name = salute();
    line('Find the greatest common divisor of given numbers.');
    for ($i = 0; $i <= 2; $i++) {
        $a = rand(0, 10);
        $b = rand(0, 10);
        $nod = nod($a, $b);
        line('Question: ' . $a . ' ' . $b);
        $answer = prompt('Your answer');
        if ($answer != $nod) {
            line("'$answer' is wrong answer ;(. Correct answer was '$nod'.)");
            break;
        } else {
            line('Correct!');
        }
    }
    congrat($i, 3, $name);
}
