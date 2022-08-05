<?php

namespace Engine;

use function cli\line;
use function cli\prompt;

function salute()
{
    line('Welcome to the Brain Games!');
    $a = prompt('May I have your name?');
    line("Hello, %s!", $a);
    return $a;
}
function nod($a, $b)
{
    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
        return $a;
    }
}
function Congrat($a, $b, $name)
{
    if ($a == $b) {
        line("Congratulations, %s!", $name);
        line('Next Game?');
    } else {
        line("Let's try again, %s!)", $name);
    }
}
function IsPrime($n)
{
    for ($x = 2; $x < $n; $x++) {
        if ($n % $x == 0) {
            return 0;
        }
    }
    return 1;
}
