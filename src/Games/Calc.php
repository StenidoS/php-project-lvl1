<?php 

use function cli\line;
use function cli\prompt;

function greetingCalc()
{
    //приветствие
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    // задать вопрорсы, максимум 3 шт
    line('What is the result of the expression?');
    for ($i = 0; $i <= 2; $i++) {
        $number = rand(0, 10);
        $number2 = rand(0, 10);
        $index = rand(0, 2);
        $input = array($number + $number2, $number - $number2, $number * $number2);
        $rand_keys = $input[$index];
        $input2 = array("$number + $number2", "$number - $number2", "$number * $number2");
        $rand_keysy = $input2[$index];
    //вывести сообщение и ввести ответ
        line('Question: ' . $rand_keysy);
        $answer = prompt('Your answer');
    //сравниваю ответ пользователя с правельным ответом 
    // если да = ок и задаю следующий вопрос
    //если нет ... тогда ответ не верен и конец игре.
        if($answer != $rand_keys){
            line("'$answer' is wrong answer ;(. Correct answer was '$rand_keys'.)");
            line("Let's try again, %s!", $name);
            break;
        } else {
            line('Correct!');
        }            
    }
    line("Congratulations, %s!", $name);    
}    
