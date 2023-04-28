<?php

function variadic($operands)
{
    $sum = 0;
    foreach ($operands as $operand) {
        $sum += $operand;
    }
    return $sum;
}

var_dump(variadic([1, 2, 3, 4]));