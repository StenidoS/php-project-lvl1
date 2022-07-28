<?php

use function cli\line;
use function cli\prompt;
use function Engine\congrat;
use function Engine\salute;
use function Engine\progression;

function ProgressNambers()
{
    //приветствие
    $name = salute();
    // задать вопрорсы, максимум 3 шт
    line('What number is missing in the progression?');
    for ($i = 0; $i <= 2; $i++) {

        $a1 = rand(1, 10);
        $d = rand(2, 5);
        $n = 1;
        $max = rand(5, 15);
        $val = progression($a, $d, $n, $max);
    //вывести сообщение и ввести ответ
        line('Question: ' . $val);

        
        $answer = prompt('Your answer');
    //сравниваю ответ пользователя с правельным ответом
    // если да = ок и задаю следующий вопрос
    //если нет ... тогда ответ не верен и конец игре.
        if ($answer != $val) {
            line("'$answer' is wrong answer ;(. Correct answer was '$val'.)");
            break;
        } else {
            line('Correct!');
        }
    }
    congrat($i, 3, $name);
}
