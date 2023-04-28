<?php

function orderBy($items, $attr, $order)
{
    $sortedItems = [];

    foreach ($items as $item) {
        $key = is_object($item) ? $item->{$attr} : $item[$attr];
        $sortedItems[$key] = $item;
    }

    if ($order == 'desc') {
        krsort($sortedItems);
    } else {
        ksort($sortedItems);
    }

    return array_values($sortedItems);
}

print_r(orderBy(
    [
        ['id' => 2, 'name' => 'Red'],
        ['id' => 3, 'name' => 'Black'],
        ['id' => 1, 'name' => 'Green'],
    ],
    'id',
    'desc'
));
