<?php
function has_Duplicates($items)
{
    if (count($items) > count(array_unique($items)))
        return 1;
    else
        return 0;
}

print_r(has_Duplicates([1, 2, 3, 4, 5, 5]));
echo "\n";
print_r(has_Duplicates([1, 2, 3, 4, 5]));