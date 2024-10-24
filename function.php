<?php

function perimeter(int $a, int $b): int
{
    return sum($a,$b)*2;
}
function sum(int $a, int $b): int
{
    return $a + $b;
}
$a = perimeter(6,4);
echo " perimeter -> "  .  $a;
