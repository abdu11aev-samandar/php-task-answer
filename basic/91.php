<?php

function take($items, $n = 1)
{
    return array_slice($items, 0, $n);
}

print_r(take([1, 2, 3, 4], 1));
echo "\n";
print_r(take([1, 2, 3, 4, 5, 6], 2));