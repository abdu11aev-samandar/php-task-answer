<?php
function pluck($items, $key)
{
    return array_map(function ($item) use ($key) {
        return is_object($item) ? $item->$key : $item[$key];
    }, $items);
}

print_r(pluck([
    ['product_id' => 'p100', 'name' => 'Computer'],
    ['product_id' => 'p200', 'name' => 'Laptop'],
], 'name'));

