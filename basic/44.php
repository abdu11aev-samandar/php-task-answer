<?php

function multiply_two_lists($x, $y)
{
    $a = explode(' ', trim($x));
    $b = explode(' ', trim($y));

    foreach ($a as $index => $item) {
        $output[$index] = $a[$item] * $b[$item];
    }
    return implode(' ', $output);
}

echo multiply_two_lists(("10 12 3"), ("1 3 3"))."\n";