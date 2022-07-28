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
    // задать вопрорсы, максимум 3 шт
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    for ($i = 0; $i <= 2; $i++) {
        $a = rand(1, 100);
        $ansPrime = IsPrime($a);
        if ($ansPrime == 0){
            $ansPrime = 'no';
        } else {
            $ansPrime = 'yes';;
        }    
        //вывести сообщение и ввести ответ
        line('Question: ' . $a);
        $answer = prompt('Your answer');
       //сравниваю ответ пользователя с правельным ответом
       // если да = ок и задаю следующий вопрос
       //если нет ... тогда ответ не верен и конец игре.
        if (($answer != 'yes' || $answer != 'no') && $ansPrime != $answer) {
            line("'$answer' is wrong answer ;(. Correct answer was '$ansPrime'.)");
            break;
        } else {
            line('Correct!');
        }
    }
    congrat($i, 3, $name);
}
