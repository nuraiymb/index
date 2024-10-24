<?php

$a = 5;
function getFactorial(int $a): int
{
    if ($a < 0)
    {
        return "теріс емес бүтін сан";
    }
    {
    if ($a === 0) {
        return 1;
    }
        $result = 1;
        for ($i = 1; $i <= $a; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

echo getFactorial($a);