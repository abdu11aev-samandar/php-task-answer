<?php
function test_all($items, $my_func)
{
    if (count(array_filter($items, $my_func)) === count($items))
        return 1;
    else
        return 0;
}

echo test_all([2, 3, 4, 5], function ($item) {
    return $item > 0;
});
echo "\n";
echo test_all([-2, -3, -4, -5], function ($item) {
    return $item > 0;
});
echo "\n";
echo test_all([-2, 3, 4, -5], function ($item) {
    return $item > 0;
});
