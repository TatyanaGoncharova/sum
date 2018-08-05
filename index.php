<?php

function sum($a, $b)
{
    $s=$a + $b;
    return "says that $a+$b= $s\n";
}
$a=10;
$b=4;
echo sum($a, $b);
