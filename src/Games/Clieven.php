<?php

use function cli\line;
use function cli\prompt;
use function Engine\congrat;
use function Engine\salute;

function greetingEven()
{
    //приветствие
    $name = salute();
    //1 вопрорс из 3
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i <= 2; $i++) {
        $number = rand(0, 100);
        //вывести сообщение и ввести ответ
        line("Question: %s", $number);
        //проверка на чётность $number
        if (($number % 2) == 0) {
            //если да тогда $number = yes
                $number = 'yes';
        } else {
            //если нет тогда $number = no
                $number = 'no';
        }
        $answer = prompt('Your answer');
        //проверка на валидацию ввода да или нет.
        //сравниваю ответ пользователя с правельным ответом
        // если да = ок(Подтверждение) и задаю следующий пример
        //если нет тогда пусть попробуют позже. Брэйк(стоп цикл).
        if (($answer == 'yes' || $answer == 'no') && $number == $answer) {
            line('Correct!');
            //line("Congratulations %s!", $name . ', next Question...');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$number'.)");
            break;
        }
    }
//вывести поздравления для конкретного пользователя.(при условии что цикл пройден(3 раза))
    congrat($i, 3, $name);
}
