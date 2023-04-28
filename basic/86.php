<?php
function last($items)
{
    return end($items);
}

print_r(last([1, 2, 3]));
echo "\n";
print_r(last([2, 1, 3, -4, 5, 1, 2]));

?>