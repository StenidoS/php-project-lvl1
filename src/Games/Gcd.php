<?php 


use function cli\line;
use function cli\prompt;
use function Engine\NOD;

function Gcd()
{
    //приветствие
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    // задать вопрорсы, максимум 3 шт по циклу
    line('Find the greatest common divisor of given numbers.');
    for ($i = 0; $i <= 2; $i++) {
       $number = rand(1, 10);
       $number2 = rand(1, 10);
    //вывести сообщение и ввести вопрос
        line('Question: ' . $number . ' ' . $number2);
        // функция поиска наибольшего общего делителя (php)
       // используем метод взаимного вычитания       
       $nod = NOD($number, $number2);
       $answer = prompt('Your answer');
    //сравниваю ответ пользователя с правельным ответом 
    // если да = ок и задаю следующий вопрос
    //если нет ... тогда ответ не верен и конец игре.
        if($answer != $nod){
            line("'$answer' is wrong answer ;(. Correct answer was '$nod'.)");
            line("Let's try again, %s!", $name);
            break;
        } else {
            line('Correct!');
        }            
    }
    line("Congratulations, %s!", $name);
}
