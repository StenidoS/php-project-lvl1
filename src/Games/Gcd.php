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
    // задать вопрорсы, максимум 3 шт
    line('Find the greatest common divisor of given numbers.');
    for ($i = 0; $i <= 2; $i++) {
        $a = rand(0, 10);
        $b = rand(0, 10);
        $nod = nod($a, $b);
     //вывести сообщение и ввести ответ
        line('Question: ' . $a . ' ' . $b);
        $answer = prompt('Your answer');
     //сравниваю ответ пользователя с правельным ответом
     // если да = ок и задаю следующий вопрос
     //если нет ... тогда ответ не верен и конец игре.
        if ($answer != $nod) {
            line("'$answer' is wrong answer ;(. Correct answer was '$nod'.)");
            break;
        } else {
            line('Correct!' . $i);
        }
    }
    congrat($i, 3, $name);
}
