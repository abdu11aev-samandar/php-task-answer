<?php

function equal($num1, $num2, $epsilon = 0.001)
{
    if (abs($num1 - $num2) < $epsilon)
        return 1;
    else
        return 0;
}

print_r(equal(10.0, 10.0001));
echo("\n");
print_r(equal(10.0, 10.01));