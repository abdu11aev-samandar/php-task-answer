<?php
function find_Last($items, $func)
{
    $filteredItems = array_filter($items, $func);

    return array_pop($filteredItems);
}

echo find_Last([1, 2, 3, 4], function ($n) {
    return ($n % 2) === 1;
});
echo "\n";
echo find_Last([1, 2, 3, 4], function ($n) {
    return ($n % 2) === 0;
});

?>