<?php

use function cli\line;
use function cli\prompt;
use function Engine\congrat;
use function Engine\salute;
use function Engine\IsPrime;

function prime()
{
    //приветствие
    $name = salute();
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    for ($i = 0; $i <= 2; $i++) {
        $a = rand(1, 100);
        $ansPrime = IsPrime($a);
        if ($ansPrime == 0){
            $ansPrime = 'no';
        } else {
            $ansPrime = 'yes';;
        }    
        line('Question: ' . $a);
        $answer = prompt('Your answer');
        if (($answer != 'yes' || $answer != 'no') && $ansPrime != $answer) {
            line("'$answer' is wrong answer ;(. Correct answer was '$ansPrime'.)");
            break;
        } else {
            line('Correct!');
        }
    }
    congrat($i, 3, $name);
}
