<?php

use function cli\line;
use function cli\prompt;

function greetin()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}

function NOD($number, $number2)
{
    while ($number != $number2)
    {
        if ($number > $number2) $number =  $number - $number2;
        else $number2 = $number2 - $number;
    }
    return $number2;
}
