<?php
function deep_flatten($items)
{
    $result = [];
    foreach ($items as $item) {
        if (!is_array($item)) {
            $result[] = $item;
        } else {
            $result = array_merge($result, deep_flatten($item));
        }
    }
    return $result;
}

$result = deep_flatten([1, [2], [[3], 4], 5, 6]);
print_r($result);

?>