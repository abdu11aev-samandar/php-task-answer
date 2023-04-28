<?php

function without($items, ...$params)
{
    return array_values(array_diff($items, $params));
}

print_r(without([2, 1, 2, 3], 1, 2));