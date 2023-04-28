<?php

function string($sentence, $needle)
{
    return strpos($sentence, $needle) == 0;
}

print_r(string('Hi, this is me', 'this'));