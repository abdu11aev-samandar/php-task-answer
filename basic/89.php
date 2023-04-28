<?php
//Licence: https://bit.ly/2CFA5XY

function reject($items, $func)
{
    return array_values(array_diff($items, array_filter($items, $func)));
}

print_r(reject(['Green', 'Red', 'Black', 'White'], function ($item) {
    return strlen($item) > 4;
}));
