<?php
function head($items)
{
    return reset($items);
}

print_r(head([1, 2, 3]));
echo "\n";
print_r(head([2, 1, 3, -4, 5, 1, 2]));
