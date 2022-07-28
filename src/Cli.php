<?php

use function cli\line;
use function cli\prompt;
use function Engine\salute;

function greeting()
{
    $name = salute();
}
