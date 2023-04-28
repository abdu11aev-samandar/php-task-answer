<?php
function pull(&$items, ...$params)
{
$items = array_values(array_diff($items, $params));
return $items;
}
$items = ['a', 'b', 'c', 'a', 'b', 'c'];
print_r(pull($items, 'a', 'c'));

?>