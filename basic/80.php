<?php

function drop_from_left($items, $n = 1): array
{
    return array_slice($items, $n);
}

print_r(drop_from_left([1, 2, 3]));
print_r(drop_from_left([1, 2, 3, 4], 2));

