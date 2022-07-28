<?php

use function cli\line;
use function cli\prompt;
use function Engine\congrat;
use function Engine\salute;

function prime()
{
    //приветствие
    $name = salute();
    // задать вопрорсы, максимум 3 шт
    line('What is the result of the expression?');
    for ($i = 0; $i <= 2; $i++) 
    {
//вывести сообщение и ввести ответ
        line('Question: ' . $rand_keysy);
        $answer = prompt('Your answer');
       //сравниваю ответ пользователя с правельным ответом
       // если да = ок и задаю следующий вопрос
       //если нет ... тогда ответ не верен и конец игре.
        if ($answer != $rand_keys) {
            line("'$answer' is wrong answer ;(. Correct answer was '$rand_keys'.)");
            break;
        } else {
            line('Correct!');
        }
    }
    congrat($i, 3, $name);
}
