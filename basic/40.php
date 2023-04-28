<?php

function without_mod($m, $n)
{
    $divides = (int)($m / $n);
    return $m - $n * $divides;
}

echo without_mod(13, 2);