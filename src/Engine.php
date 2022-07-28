<?php

namespace Engine;

use function cli\line;
use function cli\prompt;

function salute()
{
    line('Welcome to the Brain Game!');
    $a = prompt('May I have your name?');
    line("Hello, %s!", $a);
    return $a;
}

function nod($a, $b) 
{
    while ($a != $b)
        if ($a > $b)
            $a -= $b;
        else
            $b -= $a;
    return $a;
}

function Congrat($a, $b, $name)
{
    if ($a == $b) {
        line("Congratulations, %s!", $name);
        line('Next Game?');
    } else {
        line("Let's try again, %s!", $name);
    }
}
// Арифметическая прогрессия 
// @param $a1 - первый член прогрессии
// @param $d - Разность
// @Param $n - номер члена прогрессии 
// В нашем случае $n обязательно должен быть инициализирован "1" 
// @param $max - максимальное значение прогрессии
 
function progression($a1, $d, $n, $max) 
{
    $val = $a1 + (($n - 1) * $d);
    $n++;
    echo "<br>".$val;
 
    if ($val < $max - $d){
        progression($a1, $d, $n, $max);        
    }    
}
// пример оформления...

/*
//проверить последовательность чисел является арифметической прогрессией или нет
function is_arithmetic($arr)
{
   $delta = $arr[1] - $arr[0];
   for($index=0; $index<sizeof($arr)-1; $index++)
    {
        if (($arr[$index + 1] - $arr[$index]) != $delta)
        {
             
             return "Not an arithmetic sequence";
        }       
    }
    return "An arithmetic sequence";
}
$my_arr1 = array(6, 7, 9, 11);
$my_arr2 = array(5, 7, 9, 11);
print_r(is_arithmetic($my_arr1)."\n");
print_r(is_arithmetic($my_arr2)."\n");
*/
