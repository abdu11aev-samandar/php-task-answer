<?php

function tail($items)
{
    return count($items) > 1 ? array_slice($items, 1) : $items;
}

print_r(tail([1, 2, 3]));